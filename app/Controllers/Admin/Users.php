<?php

namespace App\Controllers\Admin;

use App\Models\Admin\UsersModel;

class Users extends AdminBaseController
{

    function superAdmin()
    {
        $this->data['title'] = 'Super Admin List';
        return view($this->config->views['super-admin'], $this->data);
    }

    function fetchSuperAdminDt()
    {
        $response = [];
        $draw = $this->request->getPost('data')['draw'];
        $start = $this->request->getPost('data')['start'];
        $rowperpage = $this->request->getPost('data')['length'];
        $searchData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
        ];
        $user = new UsersModel();
        $totalRecords = $totalRecordwithFilter = $user->getDtAdmin(1, $searchData, 0, 0);
        $rows = $user->getDtAdmin(0, $searchData, $rowperpage, $start);
        $data = [];
        $i = $start + 1;

        foreach ($rows as $row) {
            $actions = '';
            $status = $row->status == 'Active' ? "Active" : "Inactive";
            $stat = $row->status == 'Active' ? "Inactive" : "Active";

            $name = '<div class="d-flex justify-content-start align-items-center user-name">
            <div class="avatar-wrapper">
            <div class="avatar avatar-sm me-3">
            <img src="' . ($row->image ? UPLOADED_PATH . 'users/' . $row->image : USER_IMAGE) . '" alt="Avatar" class="rounded-circle">
            </div>
            </div>
            <div class="d-flex flex-column">
            <a href="#" class="text-body text-truncate"><span class="fw-semibold">' . $row->name . '</span></a>
            <small class="text-muted">' . $row->email . '</small>
            </div>
            </div>';

            $actions = '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>';
            $actions .= '<div class="dropdown-menu dropdown-menu-end m-0" style=""><a href="javascript:void(0)" data-id=' . $row->id . ' class="edit-super-admin dropdown-item">Edit</a>

            <a href="javascript:void(0)" data-id="' . $row->id . '" data-val="' . $stat . '" class="dropdown-item change-status">' . $stat . '</a>
            <a href="javascript:void(0)" data-id="' . $row->id . '" class="dropdown-item delete-super-admin">Delete</a>
            <a href="javascript:void(0)" data-id="' . $row->id . '" class="dropdown-item change-password">Change Password</a>
            </div>';


            $data[] = [
                "slNo"              => $i++,
                "name"              => $name,
                "phone"             => $row->phone,
                "gender"            => $row->gender ?: 'NA',
                "created_at"        => date('d-m-Y', $row->created_at),
                "status"            => "<a href='javascript:void(0)' data-id='{$row->id}' data-val='$stat' class='change-status'><span class='badge bg-label-" . (($status == 'Active') ? 'success' : 'danger') . "' text-capitalized=''>$status</span></a>",
                "action"            => $actions ?? 'NA',
            ];
        }
        $response = [
            "draw" => intval($draw),
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "iTotalRecords" => $totalRecords,
            "aaData" => $data,
            "hash" => csrf_hash()
        ];
        return $this->response->setJSON($response);
    }

    function addNewSuperAdmin()
    {
        $this->data = [];
        $this->data['success'] = false;
        $this->data['hash'] = csrf_hash();
        $rules = [
            'name' => ['label' => 'Name', 'rules' => 'required|alpha_space'],
            'phone' => ['label' => 'Phone', 'rules' => 'required|min_length[10]|max_length[50]'],
            'email' => ['label' => 'Email', 'rules' => 'required|valid_email|is_unique[users.email]'],
            'username' => ['label' => 'Username', 'rules' => 'required|validUsername|is_unique[users.user_name]'],
            'gender' => ['label' => 'Gender', 'rules' => 'required|in_list[1, 2, 3]'],
            'password' => ['label' => 'Password', 'rules' => 'required|validatePassword'],
            'confirm_password' => ['label' => 'Confirm Password', 'rules' => 'required|matches[password]'],
            'image' => ['label' => 'Profile Picture', 'rules' => 'uploaded[image]|is_image[image]|max_dims[image, 100, 100]']
        ];

        $errors = [
            'username' => [
                'validUsername' => 'Username shouldn\'t contain any special chars or any blank space and can\'t be shorter than or 5 chars.'
            ],
            'password' => [
                'validatePassword' => 'Length should be 8-15 and should include at least one upper case letter, one number and one special character.'
            ]
        ];

        if ($this->validate($rules, $errors)) {
            $users = new UsersModel();
            $img = $this->request->getFile('image');
            $encryptedName = $img->getRandomName();
            $img->move('uploads/users/', $encryptedName);

            $data = [
                'name' => $this->request->getPost('name'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'user_name' => $this->request->getPost('username'),
                'gender' => $this->request->getPost('gender'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'image' => $encryptedName,
                'group_id' => 1
            ];

            if ($users->save($data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'Super admin has been succesfully added.';
                return $this->response->setJSON($this->data);
            } else {
                $this->data['message'] = 'Incorrect password. Please try again.';
                return $this->response->setJSON($this->data);
            }
        } else {
            $this->data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($this->data);
        }
    }

    function updateSuperAdmin()
    {
        $this->data = [];
        $this->data['success'] = false;
        $this->data['hash'] = csrf_hash();
        $rules = [
            'id' => ['label' => 'Id', 'rules' => 'is_natural_no_zero'],
            'name' => ['label' => 'Name', 'rules' => 'required|alpha_space'],
            'phone' => ['label' => 'Phone', 'rules' => 'required|min_length[10]|max_length[50]'],
            'email' => ['label' => 'Email', 'rules' => 'required|valid_email|is_unique[users.email,id,{id}]'],
            'username' => ['label' => 'Username', 'rules' => 'required|validUsername|is_unique[users.user_name,id,{id}]'],
            'gender' => ['label' => 'Gender', 'rules' => 'required|in_list[1, 2, 3]'],
            'image' => ['label' => 'Profile Picture', 'rules' => 'is_image[image]|max_dims[image, 100, 100]']
        ];

        $errors = [
            'username' => [
                'validUsername' => 'Username shouldn\'t contain any special chars or any blank space and can\'t be shorter than or 5 chars.'
            ]
        ];

        if ($this->validate($rules, $errors)) {
            $users = new UsersModel();

            $img = $this->request->getFile('image');
            $encryptedName = $this->request->getPost('old_image');
            if ($img->isValid()) {
                $encryptedName = $img->getRandomName();
                $img->move('uploads/users/', $encryptedName);
                if (!empty($this->request->getPost('old_image'))) {
                    unlink('uploads/users/' . $this->request->getPost('old_image'));
                }
            }


            $data = [
                'name' => $this->request->getPost('name'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'user_name' => $this->request->getPost('username'),
                'gender' => $this->request->getPost('gender'),
                'image' => $encryptedName,
            ];
            if ($users->update($this->request->getPost('id'), $data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'User has been succesfully updated.';
                return $this->response->setJSON($this->data);
            } else {
                $this->data['message'] = 'Incorrect password. Please try again.';
                return $this->response->setJSON($this->data);
            }
        } else {
            $this->data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($this->data);
        }
    }

    function changeStatus()
    {
        $this->data = [];
        $this->data['success'] = false;
        $this->data['hash'] = csrf_hash();
        $rules = [
            'id' => ['label' => 'Id', 'rules' => 'is_natural_no_zero'],
            'status' => ['label' => 'Name', 'rules' => 'required|in_list[Active, Inactive]'],
        ];

        if ($this->validate($rules)) {
            $users = new UsersModel();

            $data = [
                'status' => $this->request->getGet('status'),
            ];
            if ($users->update($this->request->getGet('id'), $data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'Status has been succesfully changed.';
                return $this->response->setJSON($this->data);
            }
        } else {
            $this->data['message'] = 'Something went wrong!';
            return $this->response->setJSON($this->data);
        }
    }

    function fetchSuperAdminDetails(int $id)
    {
        $this->data = [];
        $this->data['hash'] = csrf_hash();
        $this->data['success'] = false;
        $users = new UsersModel();
        if (!empty($this->data['row'] = $det = $users->find($id))) {
            $this->data['row']['oldImage'] = $det['image'];
            if (empty($det['image']))
                $this->data['row']['image'] = USER_IMAGE;
            else
                $this->data['row']['image'] = UPLOADED_PATH . 'users/' . $det['image'];
            $this->data['success'] = true;
        } else {
            $this->data['message'] = 'Sorry, the requested user could not be found.';
        }
        return $this->response->setJSON($this->data);
    }

    function deleteSuperAdmin()
    {
        $this->data = [];
        $this->data['hash'] = csrf_hash();
        $this->data['success'] = false;
        $users = new UsersModel();
        $id = $this->request->getPost('id');

        if (!empty($details = $users->select('image')->find($id))) {
            $details['image'] ? unlink('uploads/users/' . $details['image']) : '';
            $users->delete($id, true);
            $this->data['success'] = true;
            $this->data['message'] = 'Super admin has been succesfully deleted.';
        } else {
            $this->data['message'] = 'Sorry, the requested super admin could not be found.';
        }
        return $this->response->setJSON($this->data);
    }

    function updatePassword()
    {
        $this->data = [];
        $this->data['success'] = false;
        $this->data['hash'] = csrf_hash();
        $rules = [
            'new_password' => ['label' => 'New Password', 'rules' => 'required|validatePassword'],
            'confirm_password' => ['label' => 'Confirm Password', 'rules' => 'required|matches[new_password]'],
        ];

        $errors = [
            'new_password' => [
                'validatePassword' => 'Length should be 8-15 and should include at least one upper case letter, one number and one special character.'
            ]
        ];

        if ($this->validate($rules, $errors)) {
            $users = new UsersModel();

            $data = [
                'password_hash' => password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT)
            ];

            if ($users->update($this->request->getPost('id'), $data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'User password has been successfully changed.';
                return $this->response->setJSON($this->data);
            }
        } else {
            $this->data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($this->data);
        }
    }

    public function updateAdminProfile()
    {
        $this->data = [];
        $this->data['success'] = false;
        $this->data['hash'] = csrf_hash();
        $id = \Config\Services::session()->userData['id'];
        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => "required|valid_email|is_unique[users.email,id,$id]"
            ],
            'user_name' => [
                'label' => 'Username',
                'rules' => "required|validUsername|is_unique[users.user_name,id,$id]"
            ],
            'user_image' => [
                'label' => 'Profile Picture',
                'rules' => 'is_image[user_image]|max_dims[user_image,100,100]'
            ]
        ];

        $errors = [
            'user_name' => [
                'validUsername' => 'Username shouldn\'t contain any special chars or any blank space and can\'t be shorter than or 5 chars.'
            ]
        ];

        if ($this->validate($rules, $errors)) {
            $users = new UsersModel();

            $img = $this->request->getFile('user_image');
            $encryptedName = $this->request->getPost('old_image');
            if ($img->isValid()) {
                $encryptedName = $img->getRandomName();
                $img->move('uploads/users/', $encryptedName);
                if (!empty($this->request->getPost('old_image'))) {
                    unlink('uploads/users/' . $this->request->getPost('old_image'));
                }
            }


            $data = [
                'email' => $this->request->getPost('email'),
                'user_name' => $this->request->getPost('user_name'),
                'image' => $encryptedName,
            ];
            if ($users->update($id, $data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'Admin has been succesfully updated.';
                return $this->response->setJSON($this->data);
            } else {
                $this->data['message'] = 'Incorrect password. Please try again.';
                return $this->response->setJSON($this->data);
            }
        } else {
            $this->data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($this->data);
        }
    }

    function fetchAdminDetails()
    {
        $this->data = [];
        $this->data['hash'] = csrf_hash();
        $this->data['success'] = false;
        $users = new UsersModel();
        $id = \Config\Services::session()->userData['id'];
        if (!empty($this->data['row'] = $det = $users->find($id))) {
            $this->data['row']['oldImage'] = $det['image'];
            if (empty($det['image']))
                $this->data['row']['image'] = USER_IMAGE;
            else
                $this->data['row']['image'] = UPLOADED_PATH . 'users/' . $det['image'];
            $this->data['success'] = true;
        } else {
            $this->data['message'] = 'Sorry, the requested user could not be found.';
        }
        return $this->response->setJSON($this->data);
    }
}

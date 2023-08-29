<?php

namespace App\Controllers;

use App\Models\RadioModel;
use CodeIgniter\Filters\Honeypot;

class Radio extends BaseController
{

    function radioList()
    {
        $this->data['title'] = 'Radio List';
        return view($this->config->views['radio-list'], $this->data);
    }

    function fetchRadioList()
    {

        $response = [];
        $draw = $this->request->getPost('data')['draw'];
        $start = $this->request->getPost('data')['start'];
        $rowperpage = $this->request->getPost('data')['length'];
        $searchData = [];
        $advertise = new RadioModel();
        $totalRecords = $totalRecordwithFilter = $advertise->getRadios(1, $searchData, 0, 0);
        $rows = $advertise->getRadios(0, $searchData, $rowperpage, $start);
        $data = [];
        $i = $start + 1;
        foreach ($rows as $row) {
            $actions = $class = '';
            switch ($row->status) {
                case 'Pending':
                    $class = 'warning';
                    break;
                case 'Active':
                    $class = 'success';
                    break;
                default:
                    $class = 'danger';
                    break;
            }
            $stat = $row->status == 'Active' ? "Inactive" : "Active";

            $image = '<div class="d-flex justify-content-start align-items-center user-name">
            <div class="avatar-wrapper">
            <div class="avatar me-2">
            <img src="' . UPLOADED_PATH . 'radio/' . $row->image . '" alt="Avatar" class="rounded">
            </div></div></div>';

            $actions = '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>';
            $actions .= '<div class="dropdown-menu dropdown-menu-end m-0" style=""><a href="javascript:void(0)" data-id=' . $row->id . ' class="edit-radio dropdown-item">Edit</a>

            <a href="javascript:void(0)" data-id="' . $row->id . '" data-val="' . $stat . '" class="dropdown-item change-status">' . $stat . '</a>
            <a href="javascript:void(0)" data-id="' . $row->id . '" class="dropdown-item delete-radio">Delete</a>
            </div>';


            $data[] = [
                "slNo"              => $i++,
                "image"              => $image,
                "title"              => $row->title,
                'description'        => $row->description,
                'link'              => $row->link,
                "status"            => "<a href='javascript:void(0)' data-id='{$row->id}' data-val='$stat' class='change-status'><span class='badge bg-label-$class' text-capitalized=''>$row->status</span></a>",
                "created_at"        => date('d-m-Y', $row->created_at),
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

    function saveRadio()
    {
        $this->data = [];
        $this->data['success'] = false;
        $this->data['hash'] = csrf_hash();
        $rules = [
            'title' => ['label' => 'Title', 'rules' => 'required|is_unique[advertisements.title]|alpha_space'],
            'description' => ['label' => 'Description', 'rules' => 'modRequired'],
            'image' => ['label' => 'Image', 'rules' => 'uploaded[image]|is_image[image]'],
            'link' => ['label' => 'Link', 'rules' => 'valid_url']
        ];


        $errors = [
            'description' => [
                'modRequired' => 'The Description field is required.'
            ]
        ];

        if ($this->validate($rules, $errors)) {
            $radio = new RadioModel();
            $img = $this->request->getFile('image');
            $encryptedName = $img->getRandomName();
            $img->move('uploads/radio/', $encryptedName);

            $data = [
                'title'         => $this->request->getPost('title'),
                'slug'          => slugify($this->request->getPost('title')),
                'description'   => $this->request->getPost('description'),
                'link'          => $this->request->getPost('link'),
                'image'         => $encryptedName,
            ];

            if ($radio->save($data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'Radio has been succesfully saved.';
                return $this->response->setJSON($this->data);
            }
        } else {
            $this->data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($this->data);
        }
    }

    function updateRadio()
    {
        $this->data = [];
        $this->data['success'] = false;
        $this->data['hash'] = csrf_hash();
        $rules = [
            'id' => ['label' => 'Id', 'rules' => 'is_natural_no_zero'],
            'title' => ['label' => 'Title', 'rules' => 'required|is_unique[advertisements.title,id,{id}]|alpha_space'],
            'description' => ['label' => 'Description', 'rules' => 'modRequired'],
            'image' => ['label' => 'Image', 'rules' => 'is_image[image]'],
            'link' => ['label' => 'Link', 'rules' => 'valid_url']
        ];

        if ($this->validate($rules)) {
            $radio = new RadioModel();

            $img = $this->request->getFile('image');
            $encryptedName = $this->request->getPost('old_image');
            if ($img->isValid()) {
                $encryptedName = $img->getRandomName();
                $img->move('uploads/radio/', $encryptedName);
                if (!empty($this->request->getPost('old_image'))) {
                    unlink('uploads/radio/' . $this->request->getPost('old_image'));
                }
            }

            $data = [
                'title'         => $this->request->getPost('title'),
                'slug'          => slugify($this->request->getPost('title')),
                'description'   => $this->request->getPost('description'),
                'link'          => $this->request->getPost('link'),
                'image'         => $encryptedName
            ];
            if ($radio->update($this->request->getPost('id'), $data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'Radio has been succesfully updated.';
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
            $advertise = new RadioModel();

            $data = [
                'status' => $this->request->getGet('status'),
            ];
            if ($advertise->update($this->request->getGet('id'), $data)) {
                $this->data['success'] = true;
                $this->data['message'] = 'Status has been succesfully changed.';
                return $this->response->setJSON($this->data);
            }
        } else {
            $this->data['message'] = 'Something went wrong!';
            return $this->response->setJSON($this->data);
        }
    }

    function fetchRadioDetails(int $id)
    {
        $this->data = [];
        $this->data['hash'] = csrf_hash();
        $this->data['success'] = false;
        $radio = new RadioModel();
        if (!empty($this->data['row'] = $det = $radio->find($id))) {
            $this->data['row']['oldImage'] = $det['image'];
            $this->data['row']['image'] = UPLOADED_PATH . 'radio/' . $det['image'];

            $this->data['success'] = true;
        } else {
            $this->data['message'] = 'Sorry, the requested AD post could not be found.';
        }
        return $this->response->setJSON($this->data);
    }

    function deleteRadio()
    {
        $this->data = [];
        $this->data['hash'] = csrf_hash();
        $this->data['success'] = false;
        $radio = new RadioModel();
        $id = $this->request->getPost('id');

        if (!empty($details = $radio->select('id')->find($id))) {
            $radio->delete($id);
            $this->data['success'] = true;
            $this->data['message'] = 'Radio has been succesfully deleted.';
        } else {
            $this->data['message'] = 'Sorry, the requested Radio could not be found.';
        }
        return $this->response->setJSON($this->data);
    }
}

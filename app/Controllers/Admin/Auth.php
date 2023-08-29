<?php

namespace App\Controllers\Admin;

use App\Models\Admin\AuthModel;

class Auth extends AdminBaseController
{
	function login()
	{
		if (session()->isLoggedIn) {
			return redirect()->route('dashboard');
		}
		$this->data['title'] = 'Login';
		return view($this->config->views['auth-login-basic'], $this->data);
	}

	function attemptToLogin()
	{
		unset($this->data['view']);
		$this->data['success'] = false;
		$this->data['hash'] = csrf_hash();
		$rules = [
			'email-username' => ['label' => 'Email / Username', 'rules' => 'required|min_length[5]|max_length[255]'],
			'password' => ['label' => 'Password', 'rules' => 'required|min_length[8]|max_length[15]'],
		];
		if ($this->validate($rules)) {
			$auth = new AuthModel();
			$user = $auth->groupStart()->where('user_name', $this->request->getPost('email-username'))->orWhere('email', $this->request->getPost('email-username'))->groupEnd()->first();
			if (is_null($user)) {
				$this->data['message'] = 'User does not exist. Please try again.';
				return $this->response->setJSON($this->data);
			} else if ($user['status'] != 'Active') {
				$this->data['message'] = 'Your account has been inactivated by the admin.';
				return $this->response->setJSON($this->data);
			}
			if (password_verify($this->request->getPost("password"), $user['password_hash'])) {
				$session = \Config\Services::session();

				$session->set('isLoggedIn', true);
				$sessionArr = [
					'id' 			=> $user['id'],
				];
				$session->set('userData', $sessionArr);
				$session->setFlashdata('message', 'Welcome! You have successfully logged in.');
				$session->setFlashdata('title', 'Success');
				$session->setFlashdata('messageType', 'success');
				$this->data['success'] = true;
				$this->data['redirect'] = url_to('dashboard');
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
			$auth = new AuthModel();

			$data = [
				'password_hash' => password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT)
			];

			if ($auth->update(\Config\Services::session()->userData['id'], $data)) {
				$this->data['success'] = true;
				$this->data['message'] = 'Password has been successfully changed.';
				return $this->response->setJSON($this->data);
			}
		} else {
			$this->data['errors'] = $this->validator->getErrors();
			return $this->response->setJSON($this->data);
		}
	}

	function logout()
	{
		session()->remove(['isLoggedIn', 'userData']);
		return redirect()->route('admin-login');
	}
}

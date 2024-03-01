<?php

namespace App\Controllers;

use App\Models\AuthModel;


class Auth extends BaseController
{

    public $authModel;

	public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function registration()
    {
        return view('registration-form');
    }
    public function auth_registration()
    {
        $data = $this->request->getPost();

        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

        $insert = $this->authModel->insert_data($data);

        echo "Registration success";
    }
}

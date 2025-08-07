<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    // public function login()
    // {
    //     return view('auth/login');
    // }
     public function login()
    {
        $data = [
            'text' => 'Hello World',
        ];
        return $this->template->displaylogin('auth/login', $data);
        // return view('welcome_message');
    }
    
    public function processLogin()
    {
        $nik = $this->request->getPost('nik');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getByNik($nik);

        // Cek apakah user ada
        if (!$user) {
            return redirect()->back()->with('error', 'NIK tidak ditemukan');
        }

        // Cek password
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah');
        }

        // Pecah kolom access jadi array role
        $roles = explode(',', $user['access']);
        $roles = array_map('trim', $roles);

        // Simpan session login
        session()->set([
            'user_id'    => $user['id'],
            'user_name'  => $user['nama'],
            'roles'      => $roles,
            'logged_in'  => true
        ]);

        // Jika hanya ada 1 role → langsung arahkan ke dashboard sesuai role
        if (count($roles) === 1) {
            $roleActive = $roles[0];
            session()->set('role_active', $roleActive);

            if ($roleActive === 'administrator') {
                return redirect()->to('/dashboard/administrator');
            } elseif ($roleActive === 'dpl') {
                return redirect()->to('/dashboard/dpl');
            } elseif ($roleActive === 'drpm') {
                return redirect()->to('/dashboard/drpm');
            } else {
                return redirect()->to('/'); // Default jika role tidak dikenali
            }
        } 
        // Jika punya lebih dari 1 role → pilih role dulu
        else {
            return redirect()->to('/choose-role');
        }
    }

    public function chooseRole()
    {
        $roles = session()->get('roles');
        return view('auth/choose_role', ['roles' => $roles]);
    }

    public function setRole($role)
    {
        session()->set('role_active', $role);
        return redirect()->to('/dashboard/' . $role);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

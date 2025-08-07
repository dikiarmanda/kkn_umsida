<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function administrator()
    {
        // Cek role yang aktif
        if (session()->get('role_active') !== 'administrator') {
            return redirect()->to('/login');
        }

        $data['title'] = 'Dashboard Administrator';
        return $this->template->display('dashboard/administrator', $data);
    }

    public function dpl()
    {
        if (session()->get('role_active') !== 'dpl') {
            return redirect()->to('/login');
        }

        $data['title'] = 'Dashboard DPL';
        return $this->template->display('dashboard/dpl', $data);
    }

    public function drpm()
    {
        if (session()->get('role_active') !== 'drpm') {
            return redirect()->to('/login');
        }

        $data['title'] = 'Dashboard drpm';
        return $this->template->display('dashboard/drpm', $data);
    }
}

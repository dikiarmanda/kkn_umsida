<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function administrator()
    {
        // Cek role yang aktif
        if (session()->get('role_active') !== 'administrator') {
            return redirect()->to('/login');
            // FIXME: routes login nya tidak ada
        }

        $data['title'] = 'Dashboard Administrator';
        return $this->template->display('dashboard/administrator', $data);
        // FIXME: kalau memang mau dibagi per role untuk controller, view
        // FIXME: lebih baik struktur foldernya dikelompokkan berdasarkan role bukan menu
        // FIXME: admin/dashboard, admin/daftar_peserta, admin/validasi
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

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        echo view('template_sb_admin/header.php');
        echo view('siswa_sb_admin/dashboard.php');
        echo view('template_sb_admin/footer.php');
    }
    
    public function laporan()
    {
        echo view('template_sb_admin/header.php');
        echo view('siswa_sb_admin/blank.php');
        echo view('template_sb_admin/footer.php');
    }
}

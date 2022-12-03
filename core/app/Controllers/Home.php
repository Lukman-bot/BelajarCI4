<?php

namespace App\Controllers;
use App\Models\ModelSekolah;

class Home extends BaseController
{
    public function index()
    {
        $this->model    = new ModelSekolah();
        $data_sekolah   = $this->model->findAll();

        $data = array(
            'data_sekolah' => $data_sekolah
        );
        
        return view('data_sekolah',$data);
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_home');
    }

    public function Hello($nama=null){
        $data['nama'] = $nama;
        $data['judul'] = 'judul halaman';

        return view('front',$data);
    }

    public function kategori(){
        return view('kategori');
    }
    
    public function alattulis(){
      return view('alattulis');
    }
    
    public function pakaian(){
      return view('pakaian');
    } 
    public function pertukangan(){
      return view('pertukangan');
    }
    public function elektronik(){
      return view('elektronik');
    }
    public function snack(){
      return view('snack');
    }
}

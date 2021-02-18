<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        echo ("Nama: Daffa Cahyo Alghifari <p> NIM: 1941720104 <p> Kelas: TI_2A");
    }
}
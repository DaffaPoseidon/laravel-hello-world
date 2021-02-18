<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function welcome(){
    echo ("Selamat Datang") ;
}
public function about(){
    echo ("Nama: Daffa Cahyo Alghifari <p> NIM: 1941720104 <p> Kelas: TI_2A");
}
public function articles($page){
    echo ("Halaman artikel ini dengan id").$page;

}
}
<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "Halaman Trem of Service";
    }

    public function biodata()
    {
        echo "Nama      : Bagus naufal Ar Rahman </br>";
        echo "Nim       : 4122047</br>";
        echo "Kelamin   : Laki-laki</br>";
        echo "Agama     : Islam</br>";
        echo "Alamat    : Grogol</br>";
    }
}
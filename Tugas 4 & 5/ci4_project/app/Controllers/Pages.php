<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      $data = [
        'title' => 'Home | Unipdu Press'
      ];
        return view('/pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About me'
          ];    
        return view('/pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln. Gubsur no.19 ',
                    'kota' => 'Jombang'
                ],

                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Kompleks Jaya Abadi Bekasi',
                    'kota' => 'Bekasi'
                ]
            ]
          ];    
        return view('/pages/contact', $data);
    }
}
<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | PTIK FKIP UNS'
        ];
        return view('pages/home', $data);
    }

    public function profil()
    {
        return view('pages/profil');
    }

    public function fasilitas()
    {
        $data = [
            'title' => 'Fasilitas | PTIK FKIP UNS'
        ];
        return view('pages/fasilitas', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri | PTIK FKIP UNS'
        ];
        return view('pages/galeri', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us | PTIK FKIP UNS'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | PTIK FKIP UNS'
        ];
        return view('pages/contact', $data);
    }
}

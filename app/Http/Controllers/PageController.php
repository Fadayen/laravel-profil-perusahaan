<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.services');
    }

    public function gallery() {
        return view('pages.gallery');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function products()
{
    $rumahList = [
        [
            'nama' => 'Rumah Minimalis Bekasi',
            'lokasi' => 'Bekasi Timur',
            'harga' => 450000000,
            'gambar' => 'https://via.placeholder.com/400x250?text=Rumah+1'
        ],
        [
            'nama' => 'Cluster Cibubur Indah',
            'lokasi' => 'Cibubur',
            'harga' => 750000000,
            'gambar' => 'https://via.placeholder.com/400x250?text=Rumah+2'
        ],
        [
            'nama' => 'Perumahan Bogor Asri',
            'lokasi' => 'Bogor',
            'harga' => 600000000,
            'gambar' => 'https://via.placeholder.com/400x250?text=Rumah+3'
        ],
    ];

    return view('pages.products', compact('rumahList'));
}

public function productDetail($id)
{
    $rumahList = [
        1 => [
            'nama' => 'Rumah Minimalis Bekasi',
            'lokasi' => 'Bekasi Timur',
            'harga' => 450000000,
            'gambar' => 'https://via.placeholder.com/600x400?text=Rumah+1',
            'deskripsi' => 'Rumah minimalis cocok untuk keluarga kecil. Lingkungan aman dan strategis.'
        ],
        2 => [
            'nama' => 'Cluster Cibubur Indah',
            'lokasi' => 'Cibubur',
            'harga' => 750000000,
            'gambar' => 'https://via.placeholder.com/600x400?text=Rumah+2',
            'deskripsi' => 'Cluster elit dengan keamanan 24 jam dan taman bermain anak.'
        ],
        3 => [
            'nama' => 'Perumahan Bogor Asri',
            'lokasi' => 'Bogor',
            'harga' => 600000000,
            'gambar' => 'https://via.placeholder.com/600x400?text=Rumah+3',
            'deskripsi' => 'Rumah nyaman di kawasan sejuk Bogor, dekat tol dan stasiun.'
        ],
    ];

    if (!array_key_exists($id, $rumahList)) {
        abort(404);
    }

    $rumah = $rumahList[$id];

    return view('pages.product-detail', compact('rumah'));
}



}

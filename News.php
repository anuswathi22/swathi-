<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        $model = new NewsModel();
        $data['news'] = $model->findAll();
        echo view('templates/header', ['title' => 'News']);
        echo view('news/index', $data);
        echo view('templates/footer');
    }
}
?>


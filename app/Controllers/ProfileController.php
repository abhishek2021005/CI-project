<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        return view('sorting');
        // return view('register');
        // echo "Hello : ".$session->get('name');
    }
}

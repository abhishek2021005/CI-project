<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        return view('sorting');
        // echo "Hello : ".$session->get('name');
    }
}
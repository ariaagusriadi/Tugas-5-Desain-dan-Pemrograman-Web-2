<?php 

namespace App\Http\Controllers;

class AdminController extends Controller {

  function showadmin() {
    return view('template.backend.dasboard');
  }

  function kategori() {
    return view('template.backend.kategori');
  }



} 
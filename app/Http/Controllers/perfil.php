<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perfil extends Controller
{
  public function perfil(){
    return view('.auth.perfil');
  }
}

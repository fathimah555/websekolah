<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;

class AdminSettingsController extends Controller
{
  public function index()
{
    $users = User::all();
    $gurus = Guru::all(); // ambil semua guru
    return view('admin.settings.index', compact('users', 'gurus'));
}
}

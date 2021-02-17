<?php
namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('back.index');
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class MyController extends Controller
{
    
    public function check_number(): View
    {
        dd("number");
        //return view('user.profile', [
        //    'user' => User::findOrFail($id)
        //]);
    }

    public function check_csv(): View
    {
        dd("csv");
        //return view('user.profile', [
        //    'user' => User::findOrFail($id)
        //]);
    }
}
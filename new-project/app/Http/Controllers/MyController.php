<?php

namespace App\Http\Controllers;
use Storage;
//require('../Models/mobileSANumber.php');

use App\Models\mobileSANumber;
use Illuminate\View\View;
use Illuminate\Http\Response; 
class MyController extends Controller
{
    
    public function check_number(): View
    {

        $mobileNumber = new mobileSANumber();
        echo $mobileNumber->check_number($_POST["number"]);
        //dd("number");
        //return view('user.profile', [
        //    'user' => User::findOrFail($id)
        //]);
    }

    public function check_csv()
    {
        ob_start();


        var_dump($_FILES);
        $tmpName = $_FILES['csv']['tmp_name'];

        $outputArray=[];

        $file  = fopen($tmpName,"r");

        $mobileNumber = new mobileSANumber();
        echo $mobileNumber->check_csv($file);

        $file = Storage::disk('public')->get('data.csv');
        echo asset('public/data.csv');
        return redirect(asset('data.csv'));
        
    }
}
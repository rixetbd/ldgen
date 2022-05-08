<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EmailGen extends Controller
{
    public function lead_gen(Request $request)
    {

        // $request->validate([
        //     $first_name = 'required',
        //     $last_name = 'required',
        //     $domain = 'required',
        // ]);

        $first_name =  str_replace(' ', '', strtolower($request->first_name));
        $last_name = str_replace(' ', '', strtolower($request->last_name));
        $domain = str_replace(' ', '', strtolower($request->domain));

        $email1 = $first_name."@".$domain;
        $email2 = $last_name."@".$domain;
        $email3 = $first_name.'.'.$last_name."@".$domain;
        $email4 = str_split($first_name, 1)[0].".".$last_name."@".$domain;
        $email5 = $first_name.'-'.$last_name."@".$domain;
        $email6 = $first_name.'_'.$last_name."@".$domain;
        $email7 = $first_name.str_split($last_name, 1)[0]."@".$domain;
        $email8 = str_split($first_name, 1)[0].$last_name."@".$domain;
        $email9 = $first_name.'_'.str_split($last_name, 1)[0]."@".$domain;
        $email10 = str_split($first_name, 1)[0]."_".$last_name."@".$domain;
        $email11 = $first_name.'.'.str_split($first_name, 1)[0]."@".$domain;
        $email12 = str_split($first_name, 1)[0].str_split($last_name, 1)[0]."@".$domain;

        print_r($email1);
        echo "<br>";
        print_r($email2);
        echo "<br>";
        print_r($email3);
        echo "<br>";
        print_r($email4);
        echo "<br>";
        print_r($email5);
        echo "<br>";
        print_r($email6);
        echo "<br>";
        print_r($email7);
        echo "<br>";
        print_r($email8);
        echo "<br>";
        print_r($email9);
        echo "<br>";
        print_r($email10);
        echo "<br>";
        print_r($email11);
        echo "<br>";
        print_r($email12);

        // return view('frontend.indexgen',[
        //     'email1' => $email1,
        //     'email2' => $email2,
        //     'email3' => $email3,
        //     'email4' => $email4,
        //     'email5' => $email5,
        //     'email6' => $email6,
        //     'email7' => $email7,
        //     'email8' => $email8,
        //     'email9' => $email9,
        //     'email10' => $email10,
        //     'email11' => $email11,
        //     'email12' => $email11,
        // ]);
    }
}

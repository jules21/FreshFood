<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class freshFoodPages extends Controller
{
    public function home(){
        return view('/freshfood/pages/homepage');
    }
    public function shop(){
        return view('/freshfood/pages/shop');
    }
    public function contact(){
        return view('/freshfood/pages/contact_us');
    }
    public function about(){
        return view('/freshfood/pages/about_us');
    }
    // public function table($x =2){
    //     for($i=1;$i<=10;$i++){
    //         echo "$x * $i = ".$i*$x;
    //         echo "<br>";
    //     }
    // }
}

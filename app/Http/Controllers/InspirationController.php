<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspirationController extends Controller
{
    private $citations =[

        'Работа не хрен-стояла и стоять будет',
        'Набыдлокодил-гуляй смело',
        'Чтобы yаучиться програмировать на РНР-нужно програмировать на РНР',
        'Вовремя сделанное ДЗ-залог успеха',
        'Под лежачий камень вода не течет'];


        public function inspire()
        {
            $randomIndex=rand(0,count($this->citations)-1);
               $citation=$this->citations[$randomIndex];
               return view('insipire', compact('citation'));
        }
         public function about()
        {

             return view('about');
        }
         public function contact()
        {

              return view('contact');
        }
        public function profile()
        {

         return view('profile');
         }




}

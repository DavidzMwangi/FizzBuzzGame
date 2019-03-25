<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    //
    public function __invoke()
    {
        //display the page
        return view('game');
    }

    public function generate(Request $request)
    {
        //get the inputted value and validate it
        $this->validate($request,['number'=>'required']);

        $results=array();
        for ($i=1;$i<=$request->number;$i++){
            if ($i%3==0 && $i%5==0){
                $results[]='Fizz Buzz';
                //Fizz Buzz
            }else if ($i%3==0){
                //fizz
                $results[]='Fizz';
            }else if ( $i%5==0){
                //buzz
                $results[]='Buzz';
            }else{
                //number
                $results[]=$i;
            }


        }

        $request->session()->flash('results',$results);
        return redirect()->back();
    }
}

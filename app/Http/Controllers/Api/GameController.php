<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public function generate($number)
    {
        //determine if the number is an integer and whether is above 0
      if (!is_numeric($number)  ){
          return response()->json('Error! The passed value is not a number',400);//did not pass the validation
      }
      if (!$number>0){
          return response()->json('Error! Please Input a number greater than 1',400);
      }
        $number=(int)$number; //convert the passed value to an integer
        $results=array();
        for ($i=1;$i<=$number;$i++){
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
        return response()->json($results,200);
    }
}

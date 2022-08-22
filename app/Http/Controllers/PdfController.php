<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;
        $text = (new Pdf())
    ->setPdf($request->file('pdf'))
    ->text();
    $a ="
    The master of a ship weighing less than 100 tons suspected to be carrying goods contrary to provisions of Customs laws shall be charged before a) A Magistrate court b) A High court c) Court of appeal d) Supreme court 17
";
// return explode(" a) ", $a);
    return view('uploaded',compact(['text'] ));
        $questionPattern = "/[\d.]/";
        $questions = preg_split($questionPattern, $text);
        // return print_r($question);

        echo "<table>";
        foreach($questions as $sn=> $question){
            echo
            "<tr> <td>$sn</td>
            <td>$question</td></tr>";
        }

        echo "</table>";
   $data = (preg_split('#(?<=\d)(\.)#i', $text));
//    echo "<"
   foreach ($data as $key => $da){
        echo "<br>$da <br>";
        $options = preg_split("#(?<=[a-e])(\.)#i", $da);
        print_r($options);
        // foreach ($options as $op){
        //     echo "<br>$op <br>";
        // }

   }
//     // return ($text);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

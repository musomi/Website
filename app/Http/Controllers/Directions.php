<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Directions extends Controller
{
    /**
     * Shows Home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('pages.index');
    }

    /**
     * Shows contacts page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
      $page='Contact Us';
      return view('pages.contact')->with('page',$page);
    }

    /**
     * Shows about page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
      $page='About Us';
      return view('pages.about')->with('page',$page);
    }

    /**
     * Shows gallery page
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
      $page='Gallery';
      return view('pages.gallery')->with('page',$page);
    }

    /**
     * Returns services page
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
      $page='Our Services';
      return view('pages.services')->with('page',$page);
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
     * Sends Email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendemail(Request $request)
    {
      $firstname=$request->input('firstname');
      $secondname=$request->input('secondname');
      $email=$request->input('Email');
      $kuhusu=$request->input('Subject');
      $meso=$request->input('Message');

      $to = "robertmuthomi6@gmail.com";

    $data = array('name'=>$firstname.' '.$secondname,'email'=>$email,'kuhusu'=>$kuhusu,'meso'=>$meso);
      Mail::send('mail', $data, function($message) {

         $message->to('robertmuthomi6@gmail.com', 'Capitol')->subject
            ('ENQUIRY');
         $message->from('robertmuthomi66@gmail.com','Capitol');
      });

return redirect('/contact')->with('success','We have received your email.');


    }

    /**
     * Returns appointment page
     *
     * @return \Illuminate\Http\Response
     */
    public function appointment()
    {
      $page='Appointment';
      return view('pages.appointment')->with('page',$page);
    }

    /**
     * Books an appointment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function book(Request $request)
    {
      $name=$request->input('name');
      $tarehe=$request->input('tarehe');
      $email=$request->input('email');
      $time=$request->input('time');
      $speciality=$request->input('speciality');


      $to = "robertmuthomi6@gmail.com";

      $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<h1 style='color:#FF00FF;text-transform:upperCase;text-decoration:underline'>".$speciality."</h1>
<table>
<tr>
<td>Name:</td>
<td>".$name."</td>
</tr>
<tr>
<td>Email:</td>
<td>".$email."</td>
</tr>
<tr>
<td>Date:</td>
<td>".$tarehe."</td>
</tr>
<tr>
<td>Area:</td>
<td>".$speciality."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";

$send=mail($to,$speciality,$message,$headers);

if($send){
return redirect('/appointment')->with('success','We have received your email.');
}else{
 return redirect('/appointment')->with('error','Some error occured.');
}

  /*$data = array('name'=>$firstname.' '.$secondname,'email'=>$email,'kuhusu'=>$kuhusu,'meso'=>$meso);
      Mail::send('mail', $data, function($message) {

         $message->to('robertmuthomi6@gmail.com', 'Capitol')->subject
            ('ENQUIRY');
         $message->from('robertmuthomi66@gmail.com','Capitol');
      }); */

//return redirect('/contact')->with('success','We have received your email.');


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

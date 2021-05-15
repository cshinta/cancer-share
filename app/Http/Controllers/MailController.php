<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller {
   public function basic_email() {
      $details=
      [
          'title' => 'Reset your Password',
          'body' => 'Hello ! Reset your password here: link'
      ];

      Mail::to("cantikaaristiani@gmail.com")->send(new TestMail($details));
      return "Email sent";
   }
}
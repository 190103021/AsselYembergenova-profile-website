<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\MailSending;


class MailController extends Controller
{
    public function send(){
    	$objMail = new \stdClass();
    	$objMail->demo_one = 'Demo One Value';
    	$objMail->demo_two = 'Demo Two Value';
    	$objMail->sender = 'Assel.Yembergenova';
    	$objMail->reciever = 'Assel.Yembergenova';

    	Mail::to('190103021@stu.sdu.edu.kz')->send(new MailSending($objMail));
    }
}

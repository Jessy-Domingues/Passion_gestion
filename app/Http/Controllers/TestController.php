<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function bar() {

        $user = ['email' => 'user@test.com', 'name' => 'Monsieur Truc'];

        Mail::to($user['email'])->send(new TestMail($user));

        return view('emails.test');
    }
}

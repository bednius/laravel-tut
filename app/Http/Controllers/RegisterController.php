<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\RegistrationConfirmation;
use App\Models\AppUser;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function getRegisterView() {
        return view('register');
    }
    public function registerUser(Request $request) {

        $email = $request->get('email');
        $password = $request->get('password');

        $confirmationHash = md5(rand(0,1000));
        $confirmationLink = $request->root() . "/confirm/" . $confirmationHash;

        Mail::to($email)->send(new RegistrationConfirmation($confirmationLink));

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $user = AppUser::create([
            'email' => $email,
            'password_hash' => $passwordHash,
            'confirmation_hash' => $confirmationHash,
            'status' => 'NOT_ACTIVATED',
        ]);

        return view('register');
    }
}

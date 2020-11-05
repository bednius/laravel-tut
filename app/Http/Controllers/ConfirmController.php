<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppUser;
use App\Mail\DeletionConfirmation;
use Illuminate\Support\Facades\Mail;

class ConfirmController extends Controller
{
    public function confirmRegistration($hash) {
        $user = AppUser::where('confirmation_hash', $hash)->first();

        if ($user === null) {
            return;
        }

        $user->status = 'ACTIVE';
        $user->save();

        return view('confirm');
    }

    public function removeUser($hash) {
        $user = AppUser::where('confirmation_hash', $hash)->first();

        if ($user === null) {
            return;
        }

        $email = $user->email;
        $user->delete();

        Mail::to($email)->send(new DeletionConfirmation());

        return view('confirm');
    }
}

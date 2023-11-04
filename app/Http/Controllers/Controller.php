<?php

namespace App\Http\Controllers;


use App\Device;

class MyDevicesController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        $devices = Device::where('user_id', auth()->user()->id)->get();

        return view('my-devices', compact('devices'));
    }

    public function unsubscribe()
    {
        // Unsubscribe the user from emails.

        return redirect()->route('my-devices')->with('success', 'You have been unsubscribed from emails.');
    }

    public function deleteAccount()
    {
        // Delete the user's account and all associated data.

        return redirect()->route('home')->with('success', 'Your account has been deleted.');
    }
}

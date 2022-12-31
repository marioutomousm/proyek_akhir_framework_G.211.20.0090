<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userManagement extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user/index',compact('users'));
    }

    public function destroy($id)
    {


        // $users->delete();
        // return redirect('UserManagement/')->with('danger','Data Berhasil Dihapus');

        $datahapus = User::findOrFail($id);
        $datahapus->delete();
        return redirect('user/index');
    }
}

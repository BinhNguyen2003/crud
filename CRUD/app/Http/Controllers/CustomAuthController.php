<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

//Unknow
class CustomAuthController extends Controller
{
        public function viewUser($id){
        $user = User::find($id);
        return view('show_view_user',compact('user'));
    }
public function show()
    {
        //hiện tất cả 
        $user = User::all();
        return view('auth.viewuser', compact('user'));
    } 
}


    

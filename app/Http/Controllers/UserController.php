<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Follower;
use Auth;
class UserController extends Controller
{
	public function searchUser($username)
    {
    	$users = User::where('username','LIKE','%'.$username.'%')->get();
    	return $users;	
    }

    public function viewUser($username)
    {
    	$user = User::where('username','=',$username)->first();
    	$tweets = $user->tweets;
    	$type = "";
    	$follower = Follower::where([['user_id',Auth::user()->id],['follower_id',$user->id]])->first();
    	if ($follower) {
    		$type = 'following';
    	}else{
    		$type = 'not following';
    	}
    	return view('user.viewUSer',compact('user','tweets','type'));
    }

    public function follow($id)
    {
    	$follower = new Follower();
    	$follower->user_id = Auth::user()->id;
    	$follower->follower_id = $id;
    	$follower->save();

    	return back();
    }
}

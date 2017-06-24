<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Tweet;
use Auth;
use App\User;

class TweetController extends Controller
{
	public function index()
	{
		$tweets = Auth::user()->tweets;
        $users = Auth::user()->following;
        // return $users;
        if ($users) {
            foreach ($users as $user_) {
                $user = User::findOrfail($user_->follower_id);
                if ($user->tweets) {
                    // return $user->tweets;
                    foreach ($user->tweets as $tweet) {
                        $tweets->push($tweet);
                    }
                }
            }
        }
        $tweets = $tweets->sortByDesc('created_at');
		return view('tweet.timeline',compact('tweets'));
	}

    public function save(Request $request)
    {
    	$validator = Validator::make($request->all(),[
    			'tweet' => 'required|max:140'
    		]);
    	if ($validator->fails()) {
    		return back()->withError($validator)->withInput();
    	}
    	$tweet = new Tweet();
    	$tweet->text = $request->tweet;
    	$tweet->user_id = Auth::user()->id;
    	$tweet->save();

    	return array('status' => 200, 'text' => $tweet->text,'user_id' => Auth::user()->id,'username' => Auth::user()->username);
    }

    public function destroy($id)
    {
    	$tweet = Tweet::findOrfail($id);
    	$tweet->delete();
    	return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Tweet;
use Auth;

class TweetController extends Controller
{
	public function index()
	{
		$tweets = Auth::user()->tweets;
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
}

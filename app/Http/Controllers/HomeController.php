<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Overtrue\Socialite\SocialiteManager;

class HomeController extends Controller
{
    private $config = [
        'qq' => [
            'client_id'     => '101278262',
            'client_secret' => '2a9b4fa482ea566e5b8a2c80c3e806a4',
            'redirect'      => 'http://exingdong.com/test/qq/callback',
        ],
        'weibo' => [
            'client_id'     => '4052205488',
            'client_secret' => 'cedfbfd62a3eb07ba9947671f9ffa8f5',
            'redirect'      => 'http://exingdong.com/test/wb/callback',
        ],
        'wechat' => [
            'client_id'     => 'wxc9512ee29f35dbe1',
            'client_secret' => 'bcd8f9aab70b6b8ce365cfb1d764736d',
            'redirect'      => 'http://www.exingdong.com/callback',
        ],
    ];

    /**
     * 展示首页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $socialite = new SocialiteManager($this->config);
        // $wx_info = $socialite->driver('wechat');
        // //dd($wx_info);
        // if($wx_info){
        //     $user = $wx_info->user();
        //     if(isset($user)){
        //          //$user = $wx_info->user();
        //          dd($user); 
        //      }          
        // }
        return view('search.index');
    }

    public function wx(Request $req)
    {
        $socialite = new SocialiteManager($this->config);
        $user = $socialite->driver('wechat')->user();
        
        dd($user);
       
        return view('search.index');
    }
}

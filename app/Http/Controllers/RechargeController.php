<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Overtrue\Wechat\Server;
use Overtrue\Wechat\Menu;
use Overtrue\Wechat\MenuItem;

class RechargeController extends Controller
{
    /*
     * xsm, 20151021, add.
     * */
    function __construct()
    {
        // TODO: Implement __construct() method.

    }

    /*
     * xsm, 20151021, add.
     * */
    public function test(Server $server) {
        $server->on('message', 'text', function($message) {
            return 'Server';
        });
        return $server->serve();
    }

    /*
     * xsm, 20151021, add.
     * */
    public function setMenu(Request $request) {
        //TODO xsm, how to get these value from /wechat.php?????
        $appId      = null;
        $secretKey  = null;

        $menuService = new Menu($appId, $secretKey);

        global $myMenu = array(
            new MenuItem('流量充值', 'view', 'http://120.26.209.235/action'),
            new MenuItem('优惠活动', 'view', 'http://120.26.209.235/welfare'),
            new MenuItem('我的账户', 'view', 'http://120.26.209.235/account'),
        );
        $menuService->set($myMenu);

        return 'Set Menu Success';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

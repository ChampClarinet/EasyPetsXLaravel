<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Shop;

class ShopController extends Controller
{
    protected $mockShop = [
        'id' => 592,
        'name' => 'My Shop',
        'likes' => 159,
        'reviews' => 4,
        'replies' => 2,
        'tel' => '0819543213',
        'address' => 'This is address',
        'url' => 'http://fb.com/ChampClarinetMaster',
        'desc' => 'description bitch',
        'lat' => 13.7204769,
        'lng' => 100.5231057
    ];

    public function test(){
        $active = 0;
        $shop = $this->mockShop;
        $pageTitle = "Test";
        return view('template', compact('active', 'shop', 'pageTitle'));
    }

    public function test2(){
        $active = 0;
        $shop = $this->mockShop;
        $pageTitle = "Test";
        return view('test', compact('active', 'shop', 'pageTitle'));
    }

    public function dashboard(){
        $active = 1;
        $id = 4;
        $shop = Shop::find($id); //get shop
        $pageTitle = __('pages.index');
        return view('index', compact('active', 'shop', 'pageTitle'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $active = 2;
        $shop = $this->mockShop;
        $pageTitle = $shop['name'];
        return view('shopDetails', compact('active', 'shop', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 2;
        $pageTitle = __('pages.shopEdit');
        $shop = $this->mockShop;
        return view('editShop', compact('active', 'shop', 'pageTitle'));
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

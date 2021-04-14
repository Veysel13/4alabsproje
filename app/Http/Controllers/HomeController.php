<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    private $_config;
    private $uploadManager;
    private $helper;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    public function index(){

        return view($this->_config['view']);
    }

    public function store(){
        session()->flash("success","Dosya başarı ile aktarıldı");
        return redirect()->route($this->_config["redirect"]);
    }
}

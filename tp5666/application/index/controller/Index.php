<?php
namespace app\index\controller;
// 继承框架中的controller类
use think\Controller;

class Index  extends Controller
{
    public function index()
    {
    	return view('index');	
    }

    public function wrzc()
    {
    	return view('wrzc');
    }

}
?>
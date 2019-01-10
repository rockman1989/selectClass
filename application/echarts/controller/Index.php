<?php
namespace app\echarts\controller;
use think\Controller;
use app\echarts\model\Student as StudentModel;
use think\Config;

class Index extends Controller
{
	public function index()
	{
		$stumodel = new StudentModel();
		$res = $stumodel->studentGroup();
		$this->assign("res",$res);
		//var_dump(    \think\Config::get());die();
		return $this->fetch('echarts_test');
		 
	}
}
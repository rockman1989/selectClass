<?php
namespace app\selectClass\controller;
use think\Controller;
use think\Config;
use think\Request;
use think\Db;

class Index extends Controller
{
	public function index()
	{
		return $this->fetch('selectclass');	 
	}
	
	public function managerselectClass(){
		$param = Request::instance()->param();
		$condition['teacher'] = array('like','%'. trim($param['teacher']).'%');
		$condition['class'] = array('like','%'. trim($param['class']).'%');
		$condition['class_time'] = trim($param['class_time']);
		$condition['class_term'] = trim($param['class_term']);
		$condition['class_weekday'] = trim($param['class_weekday']);
		$condition['sigal_week'] = trim($param['sigle_week']);
		$condition['classroom'] = trim($param['classroom']);
		$condition['class_code'] = trim($param['class_code']);
		$condition['specialty'] = array('like','%'. trim($param['specialty']).'%');
		
		
	}
	
	public function studentSelectClass(){
		$param = Request::instance()->param();
		$condition['specialty'] = array('like','%'. trim($param['specialty']).'%');
		$classInfo = Db::table('class_select')->where($condition)->select();
		//var_dump($classInfo);die();
		return $classInfo;
	}
}
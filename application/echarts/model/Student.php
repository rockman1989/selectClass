<?php 
namespace app\echarts\model;

use think\Model;
use think\Db;

class Student extends Model{
	
	public function studentGroup(){
		
		
		//->field('department,count(id) as sum')->group('department')->select();
		//$res = DB::view('student',['count(id)'=>'sum'],'department')
				 //->view('department',['department_name'],'student.department=department.id','LEFT')
				 //->group('student.department')->select();
		$res = Db::query("SELECT department.department_name,student.department,COUNT(student.id) as sum from student INNER JOIN department WHERE student.department = department.id GROUP BY student.department");
		return $res;
	}
}













?>
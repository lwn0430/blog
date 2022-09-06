<?php 
class Factory
{
	public static function M($class_name)
	{
		//定义静态变量，保存实例化好了的对象列表
		//下标时类名，值时类的对象
		static $model_list=array();
		//判断当前模型是否被实例化
		if(!isset($model_list[$class_name]))
		{
			//没有实例化
			//include_once './App/Back/Model/'.$class_name.'.class.php';
			$model_list[$class_name]=new $class_name; 
		}
		return $model_list[$class_name];
	}
}
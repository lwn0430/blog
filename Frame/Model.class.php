<?php 
//将通用的部分写进方法里，然后在__construct中使用这个方法由子类继承（子类不能有自己的__construnct)
class Model
{
	//定义存储dao对象的属性，要求可以在子类中被访问
	protected $dao;
	public function __construct()
	{
		$this->initDAO();
	}
	protected function initDAO()
	{	
		//15.初始化dao
		$config=$GLOBALS['conf']['db'];
		//16.根据配置文件，选择相应的数据库类文件
		switch($GLOBALS['conf']['App']['dao'])
		{
			case 'mysql' :$dao_class='MySQLDB';break;
			case 'pdo'	 :$dao_class='PDODB';
		}
		//实例化数据库操作对象
		$this->dao=$dao_class::getInstance($config);
	}
}
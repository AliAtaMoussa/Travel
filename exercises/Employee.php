<?php
	class Employee
	{
		private $dept;
		
		public function getDept()
		{
			return $this->dept;
		}
		
		public function setDept($dept)
		{
			$this->dept = $dept;
		}
	}
?>

<?php
	class Person
	{
		private $name;
		private $address;
		private $phone;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
		
		public function getAddress()
		{
			return $this->address;
		}
		
		public function setAddress($address)
		{
			$this->address = $address;
		}
		
		public function getPhone()
		{
			return $this->phone;
		}
		
		public function setPhone($phone)
		{
			$this->phone = $phone;
		}
	}
?>

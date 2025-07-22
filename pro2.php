<?php

	class Bank
	{
		public $accountNumber ,$accountHolder;
        public $balance=0;
		
		public function __construct( $accountNumber ,$accountHolder ,$balance)
		{
			$this->accountNumber=$accountNumber;
			$this->accountHolder=$accountHolder;
			$this->balance=$balance;
		}
		
		public function deposit($amount)
		{
            if($amount>0)
            {
                $this->balance=$this->balance+$amount;
                echo "Depositing $amount";
            }
		}
        public function withdraw($amount)
		{
            if($this->balance>$amount)
            {
                $this->balance=$this->balance-$amount;
                echo "<br>Withdrawing $amount";
            }
		}
        public function getBalance()
        {
            echo "<br>Balance: $this->balance";
        }
        public function getAccountInfo()
        {
            echo "<br>Account Number : $this->accountNumber";
            echo "<br>Account holder : $this->accountHolder";
        }
	}
$obj=new Bank(222,"zala",50000);
$obj->deposit(20000);
$obj->withdraw(5000);
$obj->getBalance();
$obj->getAccountInfo();
?>
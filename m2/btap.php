<?php 
// class QuadraticEquation{
//     private float $a;
//     private float $b;
//     private float $c;
//     function __construct($a,$b,$c){
//         $this->a=$a;
//         $this->b=$b;
//         $this->c=$c;
//     }
//     function getDiscriminant(){
//         return ($this->b*$this->b)-(4*$this->a*$this->c);
//     }
//     function getRoot1(){
//         return (-$this->b+sqrt($this->getDiscriminant()))/(2*$this->a);
//     }
//     function getRoot2(){
//         return (-$this->b-sqrt($this->getDiscriminant()))/(2*$this->a);
//     }
// };
// $tinh1=new QuadraticEquation(4,-6,-2);
// echo $tinh1->getRoot1().'<br>';
// echo $tinh1->getRoot2().'<br>';


class StopWatch {
	/**
	* @var $startTimes array The start times of the StopWatches
	*/
	private static $startTimes = array();

	/**
	* Start the timer
	*
	* @param $timerName string The name of the timer
	* @return void
	*/
	public static function start($timerName = 'default') {
		self::$startTimes[$timerName] = microtime(true);
	}

	/**
	* Get the elapsed time in seconds
	*
	* @param $timerName string The name of the timer to start
	* @return float The elapsed time since start() was called
	*/
	public static function elapsed($timerName = 'default') {
		return microtime(true) - self::$startTimes[$timerName];
	}
}

// start the timer
StopWatch::start();

// your script - this is an example
sleep(2);

// check how long 2 seconds is...
echo 'Elapsed time: ' . StopWatch::elapsed() . ' seconds';

?>
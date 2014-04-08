<?php
	
	function fizzbuzz(){
		for ($i = 1; $i < 101; $i++) {
			if(($i%3==0) && ($i%5==0)){
				print ($i." FizzBuzz!");
			} elseif ($i%3==0) {
				print ($i ." Fizz");
			} elseif ($i%5==0) {
				print ($i ." Buzz");
			} else {
				print ($i);
			}
			print ("<br/>");
		}
	}
	
	function test_fizzbuzz($n=1) {
		if(($n%3==0) && ($n%5==0)){
			print ($n." is divisible by 3 and 5 so FizzBuzz!");
		} elseif ($n%3==0) {
			print ($n ." is divisible by 3 so Fizz.");
		} elseif ($n%5==0) {
			print ($n ." is divisible by 5 so Buzz.");
		} else {
			print ($n ." is not divisible by 3 nor 5 so Nothing!");
		}
	}
	
	/*test_fizzbuzz();*/
	fizzbuzz();

?>
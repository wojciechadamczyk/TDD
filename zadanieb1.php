<?php
# ./vendor/bin/phpunit b1Test.php

class BowlingGame {
   private $rolls = array();
  
   public function roll($pins) {
     $this->rolls[] = $pins;
   } 
  
   public function score() {
     $score = 0;
     $rollsMax = count($this->rolls);
     $firstInFrame = 0;
  
     for ($frame = 0; $frame < 10; $frame++) {
       if ($this->isStrike($firstInFrame)) {
         $score += 10 + $this->nextTwoBallsForStrike($firstInFrame);
         $firstInFrame++;
       } else if ($this->isSpare($firstInFrame)) {
           $score += 10 + $this->nextBallForSpare($firstInFrame);
           $firstInFrame += 2;
       } else {
         $score += $this->twoBallsInFrame($firstInFrame);
         $firstInFrame += 2;
       }
     }
  
     return $score; 
   } 
  
   public function nextTwoBallsForStrike($firstInFrame) {
     return $this->rolls[$firstInFrame + 1] + $this->rolls[$firstInFrame + 2];
   }

   public function nextBallForSpare($firstInFrame) {
     return $this->rolls[$firstInFrame + 2];
   }
  
   public function twoBallsInFrame($firstInFrame) {
     return $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame + 1];
   }
  
   public function isStrike($firstInFrame) {
     return $this->rolls[$firstInFrame] == 10;
   }

   public function isSpare($firstInFrame) {
     return $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame+1] == 10;
   }
}

$bg = new BowlingGame;

$bg->roll(0); // 1
$bg->roll(3);

$bg->roll(10); // 2

$bg->roll(10); // 3

$bg->roll(6); // 4
$bg->roll(4);

$bg->roll(3); // 5
$bg->roll(6);

$bg->roll(2); // 6
$bg->roll(4);

$bg->roll(4); // 7
$bg->roll(3);

$bg->roll(5); // 8
$bg->roll(5);

$bg->roll(4); // 9
$bg->roll(6);

$bg->roll(10); // 10
$bg->roll(10); // 11
$bg->roll(10); // 12

print $bg->score();

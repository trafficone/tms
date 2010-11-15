<?php 

class CaptchaController extends Controller{
  private $riddles = array(
    "I fall from clouds, sometimes called 'tears from the sky'.",
    "If you use me from both ends, I am twice as useful for half as long.",
    "A massive dieoff of this tuber caused a lot of Irish deaths. (use singular)",
    "I tell time, and sit on your wrist.",
    "Invented by Alaxander Graham Bell. When I ring, someone is calling you.",
    "This online community that rhymes with 'read it' likes bacon and narwhals.",
    "Type this word in without the e's: typeist",
    "How many times does the the word 'the' appear in this question? (use the word for the number)",
    "I am highly reflective. If I break, it's 7 years bad luck.",
    "I am made of wood and grow from the ground.",
    "I am made of aluminum and fly across the country.",
    "I am a purple dinosaur.",
    "The password is 'swordfish'",
    "People usually put pepperoni, cheese, and tomato sauce on me.",
    "You cut me on your birthday, or at a wedding.",
    "I am frequently found growing underground, but sometimes you might find me in a fancy restaurant."
  );
  private $solutions = array(
    "rain",
    "candle",
    "potato",
    "watch",
    "telephone",
    "reddit",
    "typist",
    "three",
    "mirror",
    "tree",
    "airplane",
    "Barney",
    "swordfish",
    "pizza",
    "cake",
    "truffle"
  );
  public function actionGetRiddle() {
    $random = rand(0,count($this->riddles)-1);
    echo $this->riddles[$random].'<input type="hidden" name="captcha_index" value="'.$random.'" />';
  }
  public function actionVerify(){
    if(isset($_GET['response'])&&isset($_GET['index'])){
      if($_GET['response']==$this->solutions[$_GET['index']]){
        echo "true";
      } else {
        echo "false";
      }
    } else {
      echo "false";
    }
  }
}
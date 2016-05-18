<?php

    abstract class Figure
    {
        public $width;
        public $height;
        public $backgroundColor;
        public $borderColor;
        public $position;
        public $top;
        public $left;
    }

    class Square extends Figure {

        public function display(){
          echo '<div class = "square"></div>';
      }

        public function DrawPicture(){
            echo "width: $this->width;";
            echo "height: $this->height;";
            echo "background-color: $this->backgroundColor;";
            echo "border: $this->borderColor;";
            echo "position: $this->position;";
            echo "top: $this->top;";
            echo "left: $this->left;";

        }

        /**
         * @param mixed $width
         */
        public function setWidth($width)
        {
            $this->width = $width;
        }

        /**
         * @param mixed $height
         */
        public function setHeight($height)
        {
            $this->height = $height;
        }

        /**
         * @param mixed $backgroundColor
         */
        public function setBackgroundColor($backgroundColor)
        {
            $this->backgroundColor = $backgroundColor;
        }

        /**
         * @param mixed $borderColor
         */
        public function setBorderColor($borderColor)
        {
            $this->borderColor = $borderColor;
        }

        /**
         * @param mixed $position
         */
        public function setPosition($position)
        {
            $this->position = $position;
        }

        /**
         * @param mixed $top
         */
        public function setTop($top)
        {
            $this->top = $top;
        }

        /**
         * @param mixed $left
         */
        public function setLeft($left)
        {
            $this->left = $left;
        }

    }

$square1 = new Square();
$square1->display();
$square1->setHeight('150px');
$square1->setWidth('150px');
$square1->setBackgroundColor('red');
$square1->setBorderColor('5px solid green');
$square1->setPosition('absolute');
$square1->setTop('50px');
$square1->setLeft('10px');
?>


<!DOCTYPE HTML>
<html>
<head>
<style>
    .square
    {
    <?php $square1->DrawPicture()?>
    }
</style>
</head>
</html>

<?php
   class Round extends Square {

        public $radius;

        public function display(){
            echo '<div class = "round"></div>';
}

        public function DrawPicture(){
            echo "width: $this->width;";
            echo "height: $this->height;";
            echo "background-color: $this->backgroundColor;";
            echo "border: $this->borderColor;";
            echo "position: $this->position;";
            echo "top: $this->top;";
            echo "left: $this->left;";
            echo "border-radius: $this->radius;";
}
       /**
        * @param mixed $radius
        */
       public function setRadius($radius)
       {
           $this->radius = $radius;
       }
}

$round1 = new Round();
$round1->display();
$round1->setRadius('150px');
$round1->setHeight('150px');
$round1->setWidth('150px');
$round1->setBackgroundColor('yellow');
$round1->setBorderColor('5px solid blue');
$round1->setPosition('absolute');
$round1->setTop('50px');
$round1->setLeft('200px');
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
    .round
    {
    <?php $round1->DrawPicture()?>
    }
</style>
</head>
</html>


<?php
class Rectangle extends Round {


    public function display(){
        echo '<div class = "rectangle"></div>';
    }

  }
$rectangle1 = new Rectangle();
$rectangle1->display();
$rectangle1->setHeight('150px');
$rectangle1->setWidth('250px');
$rectangle1->setBackgroundColor('green');
$rectangle1->setBorderColor('5px solid black');
$rectangle1->setPosition('absolute');
$rectangle1->setTop('50px');
$rectangle1->setLeft('400px');
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
    .rectangle
    {
    <?php $rectangle1->DrawPicture()?>
    }
</style>
</head>
</html>


<?php
class Ellipse extends Rectangle {

    public function display(){
        echo '<div class = "ellipse"></div>';
    }

}
$ellipse1 = new Ellipse();
$ellipse1->display();
$ellipse1->setRadius('15%');
$ellipse1->setHeight('150px');
$ellipse1->setWidth('250px');
$ellipse1->setBackgroundColor('blue');
$ellipse1->setBorderColor('5px solid orange');
$ellipse1->setPosition('absolute');
$ellipse1->setTop('50px');
$ellipse1->setLeft('700px');
?>

<!DOCTYPE HTML>
<html>
<head>
  <style>
    .ellipse
    {
    <?php $ellipse1->DrawPicture()?>
    }
  </style>
</head>
</html>

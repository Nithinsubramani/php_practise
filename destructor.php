<html>
    <body>

    <h2> destructor <h2>

    <?php
     class jiva {

        public $name:
        public $color;

          function __construct($name, $color){
           $this ->name = $name;
          $this ->color = $color;
          }
          
            function __destruct(){
                echo " the name is {$this->name} and the color is {$this->color}";

        }
    }
        $trainee= new jiva( 'naveen', 'indian')
        echo $trainee->getname();
        echo $trainee->get_color();

    
?>
</body>
</html>
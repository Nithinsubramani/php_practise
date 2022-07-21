<html>
    <body>

    <h2> we  created a class and object name jiva <h2>

    <?php
     class jiva {

        public $name:
        public $color;

          function __construct($name, $color){
           $this ->name = $name;
          $this ->color = $color;
          }
          function get_name() {
              return $this ->name;
          }          
          function get_color()
        {
            return $this->color;
        }
        $trainee= new jiva( 'naveen', 'indian')
        echo $trainee->getname();
        echo $trainee->get_color();

    }
?>
</body>
</html>
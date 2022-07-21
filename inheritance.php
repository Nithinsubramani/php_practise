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
        public function intro() {
            echo " a {$this -> name} is a name and the color is {$this-> color}."

        }
        }
        class i95dev extends jiva {
            public function message(){
                echo " name is nithin or naveen ";

            }
        }
         $i95dev = new i95dev ("nithin ","red");
         $i95dev->message();
         $i95dev->intro();
         ?>
         </body>
         </html>
         
<html>
    <body>

    <h2> we  created a class and object name jiva <h2>

    <?php
     class jiva {

        public $name:
        public $color;
         

         function set_name($name){
             $this->name =$name;
         }
         function get_name(){
             return $this->name;


             // object creation using new keyword

             $id=new jiva();
             $age=new jiva();
             $id->set_name(1000);
             $age->set_name(20);


             echo $id->get_name();
             echo $age->get_name();
         }
     }
     ?>
     </body>
    </html>
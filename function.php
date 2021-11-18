<?php 
    
        class fruit{
            //property
            public $name;
            public $color;

            //Use of construct
            public function __construct($name,$color){
                $this->name = $name;
                $this->color = $color;
                
            }
            //method
            public function get_name(){
               return $this->name;
               
            }
            //method
            public function get_color(){
               return $this->color;
               
            }

        }
    
        //A destructor is called when the object is destructed or the script is stopped or exited.

        class mango{
            public $name;
            public $color;

            public function __construct($name,$color){
                $this->name = $name;
                $this->color = $color;
            }
            public function __destruct(){
                echo "the fruit is : {$this->name} and color is {$this->color}";
            }


        }

       // PHP OOP - Access Modifiers public ,private,proteted

       class Orange{
           public $name;
           private $color;
           protected $weight;
       }
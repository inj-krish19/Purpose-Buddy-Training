<?php   

    // now this greeting namespace will be available in other files

    namespace Greetings{

        function CNGR(){
            echo "<br>Congratulaions<br>";
        }
        function BLNT(){
            echo "<br>Better Luck Next Time <br>";
        }
    

        class Person{
            public $name;
            
            public static function setName($name){
                $this->name = $name;
            }
            public function printName(){
                echo "Name Is $this->name<br>";
            }

        }

        //  inheritance

        class Student extends Person{
            public $id;
            
            //  contstructor
            function __construct($id,$name){
                $this->id = $id;
                $this->name = $name;
                $this->printData();
            }
            //  destructor
            function __destruct(){
                echo "<br>Student Destroyed<br>";
            }

            public function setId($id){
                $this->id = $id;
            }
            public function printData(){
                $this->printId();
                $this->printName();
            }

            public function printId(){
                echo "Id Is $this->id<br>";
            }
            

        }


        //  object 
        $s1 = new Student(1,"KRISH");

        $s1->setId(1);

        //  polymorphism 

        class Shape{

            function __construct(){
                echo "<br>I am Shape The Base Of All<br>";
                $this->tellShape();
            }

            public function tellShape(){
                echo "<br>I am Shape The Base Of All<br>";
            }
        }

        class Circle extends Shape{
            public function tellShape(){
                echo "<br>I am Circle<br>";
            }
        }

        class Square extends Shape{
            public function tellShape(){
                echo "<br>I am Square<br>";
            }
        }

        class Triangle extends Shape{
            public function tellShape(){
                echo "<br>I am Triangle<br>";
            }
        }

        $anyShape = new Triangle();

        echo "<br><h3>Java Concepts </h3><br>";

        //  abstract and interface both used for declaraction at child class 

        abstract class Sample{
            function __construct(){
                $this->sayHii();
            }
            abstract public function sayHii();
        }

        class ChildOfSample extends Sample{
            //  if dont write then gives error  
            //  its like virtual function of C++
            //  either write definition or make it abstract    
            public function sayHii(){
                echo "<br>I am Child Of Sample Saying You Hii <br>";
            }

        }

        $hii = new ChildOfSample();

        //  interface used for multiple inheritance

        interface Mother{
            public function ImMother();
        }

        interface Father{
            public function ImFather();
        }

        class Child implements Mother, Father {
            function __construct(){
                $this->giveInfo();
            }
            public function giveInfo() {
                $this->ImMother();
                $this->ImFather();
            }
            public function ImMother(){
                echo "<br>I am Mother Of Child Class<br>";
            }
            public function ImFather(){
                echo "<br>I am Father Of Child Class<br>";
            }
        }

        $infoOfChild = new Child();

        // trait is like local collection
        //  where namespace is like global collection

        trait Messages{
            public function GM(){
                echo "<br>Good Morning<br>";
            }
            public function GN(){
                echo "<br>Good Night<br>";
            }
        }

        class Message{
            use Messages;
        }

        $A = new Message();
        $A->GM();

    }

?>
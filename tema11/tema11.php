<!DOCTYPE html>
<html>
<head>
	<title>PHP 11</title>
</head>
<body>

<?php 
	class Fruit{
		public $name;
		protected $colorp;
		private $weightp;

		public $color;
		public $weight;

		public function __construct($n) {
			$this->name = $n;
		}
		public function set_name($n) {
			$this->name = $n;
		}
		public function get_name() {
			return $this->name;
		}
		final public function intro() {
			return "This is intro message";
		}
	}
	$mango = new Fruit("Mango");
	echo "The object is mango and mango->name is: ".$mango->name;
	$mango->set_name('Mangolino');
	echo "<p>New Mango name is ".$mango->get_name()."</p>";

	class Banana extends Fruit {
		const MESSAGE = "This is a constant";
		public function message() {
			return "The fruit name is ".$this->name;
		}
		public function constant() {
			return self::MESSAGE;
		}

	}
	$banana = new Banana("Banana");
	echo "<p>The derived class is Banana and banana->message() is ".
		$banana->message()."</p>";
	$banana->set_name("Strawberry");
	echo "<p> After banana->set_name(\"Strawberry\")  banana->get_name; is: ".
		$banana->get_name()."</p>";

	echo "<p>".$banana::MESSAGE."<br/>".$banana->constant()."</p>";

	abstract class Car {
	  public $name;
	  public function __construct($name) {
	    $this->name = $name;
	  }
	  abstract public function intro() : string;
	}

	class Audi extends Car {
	  public function intro() : string {
	    return "Choose German quality! I'm an $this->name!";
	  }
	}

	class Volvo extends Car {
	  public function intro() : string {
	    return "Proud to be Swedish! I'm a $this->name!";
	  }
	}

	class Citroen extends Car {
	  public function intro() : string {
	    return "French extravagance! I'm a $this->name!";
	  }
	}
	$audi = new audi("Audi");
	echo $audi->intro();
	echo "<br>";

	$volvo = new volvo("Volvo");
	echo $volvo->intro();
	echo "<br>";

	$citroen = new citroen("Citroen");
	echo $citroen->intro();

	abstract class ParentClass {
		abstract protected function prefixName($name);
	}

	class ChildClass extends ParentClass {
		public function prefixName($name, $separator = ".", $greet = "Dear") {
		if ($name == "John Doe") {
	  		$prefix = "Mr";
		} elseif ($name == "Jane Doe") {
	  		$prefix = "Mrs";
		} else {
	  		$prefix = "";
		}
			return "{$greet} {$prefix}{$separator} {$name}";
		}
		}

	$class = new ChildClass;
	echo "<p>";
	echo $class->prefixName("John Doe");
	echo "<br>";
	echo $class->prefixName("Jane Doe");
	echo "</p>";

	trait message1 {
		public function msg1() {
			echo "<p> The traits are fun! <br/>";
		}
	}
	trait message2 {
		public function msg2() {
			echo " OOP reduces code duplication!</p>";
		}
	}
	class Welcome {
		use message1;
	}
	class Welcome2 {
		use message1, message2;
	}
	$obj = new Welcome();
	$obj -> msg1();

	$obj2 = new Welcome2();
	$obj2 -> msg1();
	$obj2->msg2();

	trait trait1 {
		public function trt1(){
			echo "This is a trait!</p>";
		}
	}
	class Well extends Welcome2 {
		use trait1;
	}
	$obj3 = new Well();
	$obj3 -> msg1();
	$obj3 -> trt1();

	class greeting {
		public static function welcome() {
			echo "<p>Hello Vasile!</p>";
		}
	} 
	class otherClass {
		public function mess() {
			greeting::welcome();
		}
	}
	otherClass::mess();

	class domain {
		protected static function GetWeb() {
			return "www.tudorpopa.dx.am";
		}
	}
	class domainTud extends domain {
		public $Web;
		public function __construct() {
			$this->Web = parent::GetWeb();
		}
	}
	$domainTud = new domainTud;
	echo $domainTud->Web;
?>
</body>
</html>
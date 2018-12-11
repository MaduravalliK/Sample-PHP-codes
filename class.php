<?php
class Animal
{
    private $family;
    private $food;
    public function __construct($family, $food)
    {
        $this->family = $family;
        $this->food   = $food;
    }
    public function get_family()
    {
        return $this->family;
    }
    public function set_family($family)
    {
        $this->family = $family;
    }
    public function get_food()
    {
        return $this->food;
    }
    public function set_food($food)
    {
        $this->food = $food;
    }
}

class Cow extends Animal
{
    private $owner;
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
}

class Lion extends Animal
{
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
}


require 'Animal.php';
require 'Cow.php';
require 'Lion.php';
$cow  = new Cow('Herbivore', 'Grass');
$lion = new Lion('Canirval', 'Meat');
echo '<b>Cow Object</b> <br>';
echo 'The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br><br>';
echo '<b>Lion Object</b> <br>';
echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();

/*
Encapsulation - via the use of “get” and “set” methods etc.
Inheritance - via the use of extends keyword
Polymorphism - via the use of implements keyword

HERE,

“private $family, $food” means the variables cannot be accessed directly outside the class (Encapsulation).
“public function __construct($family…)” is the php constructor method. This function is called whenever an instance of the class has been created. In this case, we are setting the family and food.
“public function get…()” is the method used to access the family or food value (Encapsulation)
“public function set…()” is the method used to set the family or food value (Encapsulation)

*/
?>


<?php
abstract class DBCommonMethods
{
    private $host;
    private $db;
    private $uid;
    private $password;
    public function __construct($host, $db, $uid, $password)
    {
        $this->host     = $host;
        $this->db       = $db;
        $this->uid      = $uid;
        $this->password = $password;
    }
}
?>

<?php
interface DBInterface
{
    public function db_connect();
    public function insert($data);
    public function read($where);
    public function update($where);
    public function delete($where);
}
?>

<?php class MySQLDriver extends 
DBCommonMethods implements DBInterface { 
	public function __construct($host, $db, $uid, $password) { 
		parent::__construct($host, $db, $uid, $password); 
	} 
	public function db_connect() { //connect code goes here } 
	public function delete($where) { //delete code goes here } 
	public function insert($data) { //insert code goes here } 
	public function read($where) { //read code goes here } 
	public function update($where) { //update code goes here } 
} ?>


<?php
$db = new MySQLDriver($host,$db,$uid,$password);
$db->db_connect();
$db->insert($data);
?>

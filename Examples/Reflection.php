<pre><?php
/**
 * @see http://php.net/manual/en/class.reflection.php
 * @version PHP 5+
 */

function myFunction($param1 = 'World')
{
    return "Hello $param1!";
}

var_dump(get_defined_functions()['user']);
var_dump(ReflectionFunction::export('myFunction', true));

echo '<hr />';

class Person
{
    public $name;
    protected $spouse;
    private $password;

    /**
     * My constructor
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSpouse(Person $spouse)
    {
        $this->spouse = $spouse;
    }

    private function setPassword($password)
    {
        $this->password = $password;
    }
}

$reflectionClass = new ReflectionClass('Person');
echo Reflection::export($reflectionClass, true);

$firstMethod = $reflectionClass->getMethods()[0];
$firstProperty = $reflectionClass->getProperties()[0];

var_dump(
    $reflectionClass->getMethods(), // ReflectionMethod[]
    $reflectionClass->hasMethod('getName'),
    $firstMethod->getDocComment(),
    $firstMethod->getParameters(), // ReflectionParameter[]
    //
    $reflectionClass->getProperties(), // ReflectionProperty[]
    $firstProperty->isPublic()
    );

echo '<hr />';

ReflectionObject::export(new Person('Reflection'));

?></pre>

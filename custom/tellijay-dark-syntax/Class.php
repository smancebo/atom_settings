<?php

namespace Namespace\Of\Class;

use ExampleNamespace\ExtendedClass;

class ExampleClass extends ExtendedClass implements ExampleInterface
{
    const MY_INTEGER_CONSTANT = 12345;

    /**
     * Just a dummy property
     * @var string
     */
    private $myProperty = 'hello';

    public function myFunction($myParameter)
    {
        // inline comment
        $myInteger = 6789;
        $myString  = 'hello';
        $myArray   = [
            'aa', 'bb'
        ];

        array_values(['aa']);

        return $this->mySecondFunction($param1, $param2);
    }
}

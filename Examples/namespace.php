<?php

namespace hello
{
    function world()
    {
        return 'World!';
    }
}

namespace myapp
{
  //use hello; // OK
    use \hello; // OK

    function helloWorld()
    {
        echo 'Hello', ' ', hello\world();
    }

    helloWorld();
}

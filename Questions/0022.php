<?php

// How can you modify the copy of an object during a clone operation?

/*

1) Put the logic in the object's constructor to alter the values
2) Implment your own function to do object copying
3) Implement the object's __clone() method											OK
4) Implement __get() and __set() methods with the correct logic
5) Implement the __copy() method with the correct logic

*/


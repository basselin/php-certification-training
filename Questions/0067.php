<?php

// Which of the following comparisons will evaluate to true?

/*

1) 't' == t
2) 1 === "1time"
3) "top" == 0
4) "top" === 0
5) 1 == "1time"

*/

var_dump(
    't' == t, // Notice
    1 === "1time",
    "top" == 0,
    "top" === 0,
    1 == "1time"
);


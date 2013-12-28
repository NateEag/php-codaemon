<?php

/* @brief A function in the global namespace.
 */
function foobazinate()
{
    return false;
}

/* @brief A class in the global namespace.
 */
class Test
{
    public function __construct()
    {
        $this->thing = 2;
    }

    public function bar()
    {
        return $this->thing;
    }
}

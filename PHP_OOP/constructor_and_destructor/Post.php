<?php

/**
 * What Is DESTRUCTOR :
 * ====================================================================
 * -> Destructor are magic methods that gets loaded automatically just before the instance of a class is destroyed . 
 * 
 * Purpose of destructor might be :
 * ============================================================================
 * ->Example : Closing database Connection or Saving File or Etc . 
 * ->Perform the cleanup activities . 
 * ->Save the log Files . 
 * ->Write Activity Logs - End Time . 
 * ->Free up the Resources . 
 * ->Save the properties into a File . 
 * ->Save the Cache . 
 * ->Serialize the Objects . 
 * 
 */


 class Posts{

    function __construct(){
        // Initialize value here 
        echo "This is constructor ".PHP_EOL;
    }

    function __destruct(){
        // close the connection or empty the space . 

        echo "This is Destructor ".PHP_EOL;
    }
    
 }


 $posts1=new Posts();
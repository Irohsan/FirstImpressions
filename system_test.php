<?php
    include 'profileTest.php';
    include 'postTest.php';
    include 'categoryTest.php';
    
    $profTest = new ProfileTest();
    $postTest = new PostTest();
    $catTest = new CategoryTest();
        
    if( $profTest->getBoolPassFail() && $catTest->getBoolPassFail() && $postTest->getBoolPassFail() )
    {
        echo("Tests Passed.");
    }
    else
    {
        echo("Tests Failed.");
    }
?>


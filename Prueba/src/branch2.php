<?php
function testBranch()
{
    
    for( $i = 0; $i < 10; $i++ )
    {
        if ( $i < 5 )
        {
            echo "-";
        }
        else
        {
            echo "+";
        }
    }
    echo "\n";
}
?>

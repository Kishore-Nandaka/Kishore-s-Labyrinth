<?php
$membership = "pAB7";
if(strstr($membership,"ab")){
    echo "Thank you. Dont forget that your membership expires soon";
} else {
    echo "Thank you.";
}
/*strstr() is a case sensetive function
  stristr() is a non-case sensetive function */

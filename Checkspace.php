<?php
##########################################################
# @name : Function Checkspace                            # 
# @version : Version 1.0                                 #
# @author : Mouad Dabdoubi                               #
# @copyrights : 2013 ©                                   #
# @license : LGPL <http://www.gnu.org/licenses/lgpl.txt> #
##########################################################
 
function Checkspace ($val){ 

    $reg= '@^[0-9-A-Za-z_-أ-ي-]+$@'; 
 
    if (preg_match($reg,$val)){ 
    echo "<b>الاسم صحيح</b>"; 
    }else{ 
        echo "<b>! الاسم يحتوي على فراغات</b>"; 
    }
}

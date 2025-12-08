<?php
function gread($marks){

if($marks >=90 && $marks<=100)
{
    echo"A+";
    return "A+";
}
elseif($marks >=85 && $marks<=89)
{
    echo"A";
        return "A";

}
elseif($marks >=80 && $marks<=84)
{
    echo"B+";
        return "B+";

}
elseif($marks >=75 && $marks<=79)
{
    echo"B";
        return "B";

}
elseif($marks >=70 && $marks<=74)
{
    echo"C+";
        return "C+";

}
elseif($marks >=65 && $marks<=69)
{
    echo"C";
        return "C";

}
else
{
    echo"F";
        return "F";

}
}
$marks=80;
$gread=gread($marks);

switch($gread) {
    case 'A+':
        # code...
        echo"You get A+";
        break;
        case 'A':
        # code...
        echo"You get A";
        break;
        case 'B+':
        # code...
        echo"You get B+";
        break;
            case 'B':
        # code...
        echo"You get B";
        break;
            case 'C+':
        # code...
        echo"You get C+";
        break;

        case 'C':
        # code...
        echo"You get C";
        break;
         case 'F':
        # code...
        echo"You get F";
        break;
        
        
    default:
    echo"Invalid";
        # code...
        break;
}


?>
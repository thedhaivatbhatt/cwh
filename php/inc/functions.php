<?php 
    //create/define user defined functions
    function CreateTable($width,$align,$border,$bgcolor)
    {
        echo "<table width='$width' align='$align' border='$border' bgcolor='$bgcolor'>";
    }
    function EndTable()
    {
        echo "</table>";
    }
?>
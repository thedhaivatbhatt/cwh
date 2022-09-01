<?php
//include file functions.php 
require_once("../inc/functions.php");
$rows = $columns = $choice = null; //chain assignment 
$rows = $_POST['row']; //[] MEANS ARRAY WHICH HAS KEY WHICH STRING such array is called associative array
$columns = $_POST['column'];
$choice = $_POST['loop'];
echo "row = $rows columns = $columns choice = $choice";
switch ($choice) {
    case 1: //choice==1 while loop 
        CreateTable('80%','center',1,'yellow');
        $row = 1; //1 //initilization
        while ($row <= $rows) //outer loop (condition)
        {
            echo "<tr>";
            $column = 1; //initilization
            while ($column <= $columns) //inner loop 
            {
                echo "<td>$column</td>";
                $column = $column + 1;
            }
            echo "</tr>";
            $row = $row + 1; //increment/decrement
        }
        EndTable();
        break;

    case 2: //choice ==2 for loop 
        CreateTable('70%','right',2,'cyan');
        for($row=1;$row<=$rows;$row=$row+1) //outer loop
        {
            echo "<tr>";
            for($column=1;$column<=$columns;$column=$column+1) //inner loop 
            {
                echo "<td>$column</td>";
            }
            echo "</tr>";
        }
        EndTable();
        break;
    case 3: //choice ==3 do while loop 
        CreateTable('100%','left',3,'red');
        $row=1;
        do{
            echo "<tr>";
            $column=1;
            do 
            {
                echo "<td>$column</td>";
                $column++;
            }while($column<=$columns);
            echo "</tr>"; 
            $row = $row + 1; 
        }while($row<=$rows);
        EndTable();
        break;
}
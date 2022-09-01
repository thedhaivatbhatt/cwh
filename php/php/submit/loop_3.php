<?php
session_start(); //require to create/access/change global variables 
require('../../vendor/autoload.php');

use Rakit\Validation\Validator;
//include file functions.php 
require_once("../inc/functions.php");
//input validation 
// check user has not open this page directly
// check all inputs are given 
// check row and colummn are numbers 
// check user has select loop 
// check loop has valid value 

$validator = new Validator; //validator is object of Validator

//define rules for each input
$validation = $validator->make($_POST, [
    'row'=> 'required|numeric|min:1|max:100',
    'column'=> 'required|numeric|min:1|max:100',
    'loop'=> 'required|numeric|min:1|max:3',
    'btnsubmit'=> 'required',
]);
// now  validate
$validation->validate();
//check whether input are valid or invalid 
if ($validation->fails()) {
    //input is invalid
    // get all input errors
    $errors = $validation->errors(); //return array which has all errors
    $_SESSION['errors'] = serialize($errors->firstOfAll()); 
    //create global array errors which has all errors

    //getting valid data
    $validData = $validation->getValidData();
    $_SESSION['inputs'] = serialize($validData);

    header("Location:../input2_3.php"); //forcefully send user on other page
    exit;
} else {
    // validation sucessful
    $rows = $columns = $choice = null; //chain assignment 
    $rows = $_POST['row'];
    $columns = $_POST['column'];
    $choice = $_POST['loop'];
    echo "row = $rows columns = $columns choice = $choice";

    switch ($choice) {
        case 1: //choice==1 while loop 
            CreateTable('80%', 'center', 1, 'yellow');
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
            CreateTable('70%', 'right', 2, 'cyan');
            for ($row = 1; $row <= $rows; $row = $row + 1) //outer loop
            {
                echo "<tr>";
                for ($column = 1; $column <= $columns; $column = $column + 1) //inner loop 
                {
                    echo "<td>$column</td>";
                }
                echo "</tr>";
            }
            EndTable();
            break;
        case 3: //choice ==3 do while loop 
            CreateTable('100%', 'left', 3, 'red');
            $row = 1;
            do {
                echo "<tr>";
                $column = 1;
                do {
                    echo "<td>$column</td>";
                    $column++;
                } while ($column <= $columns);
                echo "</tr>";
                $row = $row + 1;
            } while ($row <= $rows);
            EndTable();
            break;
    }
}

<?php
session_start();
//https://getbootstrap.com/docs/5.1/forms/validation/
if(isset($_SESSION['inputs'])==true)
{
    $inputs = unserialize($_SESSION['inputs']);
    $errors = unserialize($_SESSION['errors']);
    unset($_SESSION['inputs']); //it will delete inputs from session
}
if (isset($_SERVER['HTTP_REFERER'])==true) //it means that page is open from another page
    $ErrorClassName = 'is-invalid';
else 
    $ErrorClassName='';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-danger text-white">
                        <h3>Dynamic HTML Generator</h3>
                    </div>
                    <div class="card-body">
                        <form action="submit/loop_3.php" method="post" novalidate>
                            <div class='mb-3'>
                                <label for="row" class="form-label">Rows</label>
                                <input required 
                                type="text" 
                                name="row" 
                                id="row" 
                                value="<?php echo  (isset($inputs['row'])==true)?$inputs['row']:''?>"
                                class="form-control <?php echo  (isset($inputs['row'])==true)?'is-valid':$ErrorClassName ?>" aria-describedby="rowerror" />
<?php 
if(isset($errors['row'])==true)
    echo "<div id='rowerror' class='invalid-feedback'>{$errors['row']}</div>";
?>                              
                            </div>
                            <div class='mb-3'>
                                <label for="column" class="form-label">Columns</label>
                                <input required type="number" name="column" id="column" 
                                value="<?php echo  (isset($inputs['column'])==true)?$inputs['column']:''?>"
                                class="form-control <?php echo  (isset($inputs['column'])==true)?
                                'is-valid':$ErrorClassName ?>" aria-describedby="columnerror" />
<?php 
if(isset($errors['column'])==true)
    echo "<div id='columnerror' class='invalid-feedback'>{$errors['column']}</div>";
?>                                
                            </div>
                            <div class='mb-3'>
                                <label for="loop" class="form-label">Select loop</label>
                                <select name="loop" id="loop" class="form-select <?php echo  (isset($inputs['loop'])==true)?
                                'is-valid':$ErrorClassName ?>" required  aria-describedby="looperror">
                                    <option value="">select</option>
                                    <option value="1">while</option>
                                    <option value="2">for</option>
                                    <option value="3">do while</option>
                                </select>
                                <?php 
if(isset($errors['loop'])==true)
    echo "<div id='looperror' class='invalid-feedback'>{$errors['loop']}</div>";
?>                                  
                            </div>
                            <div class='float-end'>
                                <input name="btnsubmit" type="submit" class="btn btn-danger mt-3" value="Generate Table" />
                            </div>
                        </form>
                        <?php
                        if (isset($_SESSION['errors']) == true) {
                            
                            echo "<ul>";
                            foreach ($errors as $ErrorMesssage) {
                                echo "<li>$ErrorMesssage</li>";
                            }
                            echo "</ul>";
                            unset($_SESSION['errors']); //destroy session variable errors
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
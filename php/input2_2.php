<?php
session_start();
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
            <div class="card shadow">
            <div class="card-header bg-danger text-white">
                    <h3>Daynemic HTML Generator</h3>
                </div>
                <div class="card-body">
                    <form action="submit/loop.php" method="POST" novalidate>
                        <div class="mb-3">
                            <label for="row" class="form-label">row</label>
                            <input required type="number" name="row" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="loop" id="loop" class="form-label">select loop</label>
                            <select name="loop" id="loop" class="form-select" required>
                                <option value="">select</option>
                                <option value="1">while</option>
                                <option value="2">for</option>
                                <option value="3">do while</option>
                            </select>
                        </div>
                        <div class="float-end">
                            <input type="btnsubmit" type="submit" class="btn btn-danger mt-3" value="Generate table" />
                        </div>
                    </form>
                    <?php
                    if (isset($_SESSION['errors']) == true) {
                        $errors = unserialize($_SESSION['errors']);
                        echo "<ul>";
                        foreach ($errors as $Errormassage) {
                            echo "<li>Errormassage</li>";
                        }
                        echo "</ul>";
                        unset($_SESSION['errors']); //distroy session variable errors
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
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
                    <div class="card-header bg-primary text-white">
                        <h3>Basic Mathmatical Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="submit/calculator.php" method="post">
                            <div class='mb-3'>
                                <label for="txtnum1" class="form-label">First Number</label>
                                <input required type="number" name="txtnum1" id="txtnum1" class="form-control" />
                            </div>
                            <div class='mb-3'>
                                <label for="txtnum2" class="form-label">Second Number</label>
                                <input required type="number" name="txtnum2" id="txtnum2" class="form-control" />
                            </div>
                            <div class="form-check">
                                <input required type="radio" class="form-check-input" name="rdooperation" id="rdoaddition" value='1' >
                                <label class="form-check-label" for="rdoaddition">Addition</label>
                            </div>
                            <div class="form-check">
                                <input required type="radio" class="form-check-input" name="rdooperation" id="rdosubstraction" value='2'>
                                <label class="form-check-label" for="rdosubstraction">Substraction</label>
                            </div>
                            <div class="form-check">
                                <input required type="radio" class="form-check-input" name="rdooperation" id="rdomultiplication" value='3'>
                                <label class="form-check-label" for="rdomultiplication">Multiplication</label>
                            </div>
                            <div class="form-check">
                                <input required type="radio" class="form-check-input" name="rdooperation" id="rdodivision" value='4'>
                                <label class="form-check-label" for="rdodivision">Division</label>
                            </div>
                            <div class='float-end'>
                            <button type="submit" class="btn btn-primary mt-3">Calculate Result</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
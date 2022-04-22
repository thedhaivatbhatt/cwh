<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
                        <div class="mb-3">
                            <label for="txtnum1" class="form-label">First Number></label>
                            <input required type="number" name="txtnum1" id="txtnum1" class="form-control" />
                        </div>

                        <div class='mb-3'>
                                <label for="txtnum2" class="form-label">Second Number</label>
                                <input required type="number" name="txtnum2" id="txtnum2" class="form-control" />
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
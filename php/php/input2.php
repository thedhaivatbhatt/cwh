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
                        <form action="submit/loop.php" method="post">
                            <div class='mb-3'>
                                <label for="row" class="form-label">Rows</label>
                                <input required type="number" name="row" id="row" class="form-control" />
                            </div>
                            <div class='mb-3'>
                                <label for="column" class="form-label">Columns</label>
                                <input required type="number" name="column" id="column" class="form-control" />
                            </div>
                            <div class='mb-3'>
                                <label for="loop" class="form-label">Select loop</label>
                                <select name="loop" id="loop" class="form-select" required>
                                    <option value="">select</option>
                                    <option value="1">while</option>
                                    <option value="2">for</option>
                                    <option value="3">do while</option>
                                </select>
                            </div>
                            <div class='float-end'>
                            <button type="submit" class="btn btn-danger mt-3">Generate Table</button>
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
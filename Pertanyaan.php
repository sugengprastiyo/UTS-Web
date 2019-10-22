<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS GANJIL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <header>
        <nav id="webBrand" class="navbar-dark bg-dark text-center">
            <a href="Pertanyaan.php" class="navbar-brand font-weight-bold">
                <span class="navbar-text mx-2 my-2 "></span> UTS GANJIL
                </span>
            </a>
        </nav>
        <nav class="navbar  navbar-dark bg-secondary"></nav>
    </header>
    <form action="Falidasi.php" method="post">
        <div class="container-fluid mt-3 mb-3">
            <div class="row">
                <div class="col">
                    <div class="card border-dark">
                        <div class="card-header">
                            <h5> Select Category </h5>
                        </div>
                        <div class="card-body text-dark">
                            <h6 class="card-title">Choose one :</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="VIP" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    VIP
                                </label>
                                <br>
                                <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="Premium">
                                <label class="form-check-label" for="exampleRadios1">
                                    Premium
                                </label>
                                <br>
                                <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="Basic">
                                <label class="form-check-label" for="exampleRadios1">
                                    Basic
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-dark">
                        <div class="card-header">
                            <h5> Select : </h5>
                        </div>
                        <div class="card-body text-dark">
                            <h6 class="card-title">Choose one :</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Breakfast" id="defaultCheck1" name="check1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Breakfast
                                </label>
                                <br>
                                <input class="form-check-input" type="checkbox" value="Lunch" id="defaultCheck1" name="check2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Lunch
                                </label>
                                <br>
                                <input class="form-check-input" type="checkbox" value="Dinner" id="defaultCheck1" name="check3">
                                <label class="form-check-label" for="defaultCheck3">
                                    Dinner
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-dark">
                        <div class="card-header">
                            <h5> Lengkapi Form </h5>
                        </div>
                        <div class="card-body text-dark">
                            <h6 class="card-title">Please insert :</h6>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Date : </label>
                                <div class="col-sm">
                                    <input type="date" class="form-control form-control-sm" id="date" placeholder="dd/mm/yyyy" name="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Name : </label>
                                <div class="col-sm">
                                    <input type="text" class="form-control form-control-sm" id="name" placeholder="Insert your name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhone" class="col-sm-3 col-form-label">Phone : </label>
                                <div class="col-sm">
                                    <input type="text" class="form-control form-control-sm" id="phone" placeholder="insert your number" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Message : </label> <br>
                                <textarea class="form-control" id="validationTextarea" placeholder="Insert your message" required name="message"></textarea>    
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Send to email :</label> <br>
                                <input type="email" class="form-control form-control-sm" id="email" placeholder="insert an email" name="email">
                            </div>
                            <button type="submit" class="btn btn-success btn-sm" name="submit">Send</button>
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <footer>
        <nav id="foot" class="navbar-dark bg-dark text-center fixed-bottom">
            <span class = "navbar-text mx-2 ">Sugeng Prastiyo</span>

        </nav>
    </footer>
</body>

</html>
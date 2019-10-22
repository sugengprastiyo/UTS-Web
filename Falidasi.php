<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS GANJIL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <!DOCTYPE html>
<html>

<body>
    <?php
    $radio = $_POST['radio'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    ?>
    <header>
        <nav id="webBrand" class="navbar-dark bg-dark text-center">
            <a href="Pertanyaan.php" class="navbar-brand font-weight-bold">
                <span class="navbar-text mx-2 my-2"></span>UTS GANJIL
                </span>
            </a>
        </nav>
        <nav class="navbar  navbar-dark bg-secondary"></nav>
    </header>

    <form action="Falidasi.php" method="post">
        <div class="container-fluid mt-3 mb-3">
            <div class="row">
                <div class="col">
                    <h5 class=>Result : </h5>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Category : </h5>
                                    <p class="card-text">
                                        <?php echo '<b>' . $radio . '</b>' ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Select : </h5>
                                    <p class="card-text">
                                        <?php
                                        if (isset($_POST['submit'])) {
                                            if (isset($_POST['check1'])) {
                                                echo '<b> - ' . $_POST['check1'] . '</b> <br>';
                                            }
                                            if (isset($_POST['check2'])) {
                                                echo '<b> - ' . $_POST['check2'] . '</b> <br>';
                                            }
                                            if (isset($_POST['check3'])) {
                                                echo '<b> - ' . $_POST['check3'] . '</b>';
                                            }
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Data : </h5>
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-text">
                                                Date <br>
                                                Name <br>
                                                Phone <br>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="card-text">
                                                <?php
                                                echo '<b>' . $date . '</b><br>';
                                                echo '<b>' . $name . '</b><br>';
                                                echo '<b>' . $phone . '</b><br>';
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-3">
                                        <div class="col">
                                            Message : <br>
                                            <?php
                                                echo '<b>'.$message.'</b>';
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Send to : 
                                        </div>
                                        <div class="col">
                                            <?php
                                                echo '<b>'. $email .'</b>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>
</body>
</html>
<?php
 include_once "./function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Advance Currency Convert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-5">
                    <div class="form-container">
                        <div class="form-icon"><i class="fa fa-money"></i></div>
                        <h3 class="title"> Advance Currency Converter</h3>
                        <form action="" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control mt-3" type="number" name="amount" placeholder="Enter Amount">
                            </div>
                            <div class="form-group">
                            <label>Convert From</label>
                                <select class="form-select currency mt-3" name="currency1" aria-label="Default select example">
                                    <option selected>Select Your Desired Currency</option>
                                    <option value="usd">USD</option>
                                    <option value="cad">CAD</option>
                                    <option value="pound">POUND</option>
                                    <option value="euro">EURO</option>
                                    <option value="won">WON</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Convert To</label>
                                <select class="form-select currency mt-3" name="currency2" aria-label="Default select example">
                                    <option selected>Select Your Current Currency</option>
                                    <option value="usd">USD</option>
                                    <option value="cad">CAD</option>
                                    <option value="pound">POUND</option>
                                    <option value="euro">EURO</option>
                                    <option value="won">WON</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Convert</button>
                            <div class="mt-5 text-center">
                                <?php

                                    if(isset($_POST['submit']))
                                    {
                                        $amount=$_POST['amount'];
                                        $currency1=$_POST['currency1'];
                                        $currency2=$_POST['currency2'];
                                        
                                        if(empty($amount) || empty($currency1) || empty($currency2)){
                                            echo "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }else if($currency1==$currency2){
                                            echo "<p class=\"alert alert-warning d-flex justify-content-between\">Please Select Different Currency. <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                        else{
                                            $final= currencyConverter($amount,$currency1,$currency2);
                                            echo "<p class=\"alert alert-success d-flex justify-content-between\">$final <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                    }
                                
                                ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
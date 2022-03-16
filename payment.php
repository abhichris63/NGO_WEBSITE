<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="payment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@100;300;500;700;900&display=swap" rel="stylesheet">
    <title>Payment Page</title>
    <script type="text/javascript">

    function validate()
    {
        var username = document.getElementById("uname");

        if(username.value.trim() == "")
        {
            alert("No blanks allowed");
            return false;
        }
        else{
            return true;
        }
    }
    </script>

</head>
<body>
    <form onsubmit="validate()" action="userinfo.php" method="post">
        <h1>PAYMENT CONFIRMATION</h1>
        <label for="name">DONOR NAME</label><br>
        <input class="box1" id="uname" type="text" name="user" placeholder="Your full name" required><br>

        <label for="email">EMAIL ID</label><br>
        <input class="box1" id="emailId" type="email" name="email" placeholder="Enter your email id" required><br>

        <label for="mobile">MOBILE NUMBER</label><br>
        <input class="box1" id="mobile" type="number" name="mobile" placeholder="MOBILE NUMBER" required><br>

        <label for="ADDRESS">ADDRESS</label><br>
        <input class="box1" id="address" type="text" name="address" placeholder="ADDRESS" required><br>
    
        <label for="cardnum">CARD NUMBER</label><br>
        <input class="box1" id="cardNumber" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" name="number" placeholder="xxxx-xxxx-xxxx-xxxx" required><br>
    

        <div class="div1">
            <label for="cardex">CARD EXPIRY MONTH</label> <br>
            <input class="box2" id="cardMonth" type="number" name="exp_month" placeholder="MM" required><BR>
        </div>

        <div class="div1">
            <label for="cardye">CARD EXPIRY YEAR</label><br>
            <input class="box2" id="cardYear" type="number" name="exp_year" id="year" placeholder="yyyy" required><br>    
        </div>

        <div class="div1">
            <label for="cardcvv"> CARD CVV </label><br>
            <input class="box2" id="cvv" type="number" name="cvv" id="cvv" placeholder="CVV" required><br>
        </div>

        <div class="div1">
            <label for="amount">AMOUNT</label> <BR>
            <input class="box2" id="amount" type="TEL"  name="amount" id="amount" placeholder="AMOUNT" required><BR>    
        </div> <br>
        <button class="btn" type="submit">PAY NOW</button>



    </form>


</body>
</html>





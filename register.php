<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" id="form1">
            <h3>Create account</h3>
            <input type="text" name="pseudo" placeholder="Pseudo" required>
            <input type="email" name="email" placeholder="Email"  required>
            <input type="password" name="password" placeholder="Password" class="mdpPass"  required><i class="fa-solid fa-eye" id="oeilPass"></i>
            <input type="password" name="cPassword" placeholder="Confirm Password" class="mdpCpass" required><i class="fa-solid fa-eye" id="oeilCpass"></i>
            
            <div class="btn-box">
                <button type="button" id="next"> Next </button>
            </div>
        </form>

        <form action="" method="POST" id="form2">
            <h3> Personal Information</h3>
            <input type="text" name="name" placeholder="First name" required>
            <input type="text" name="surname" placeholder="Last name" required>
            <input type="number" name="telephone" placeholder="Number telephone" required>
            <input type="city" name="adresse" placeholder="Adresse" required>
            <input type="number" name="codePostal" placeholder="Postal Code" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="country" placeholder="Country" required>

            <div class="btn-box">
                <button type="button" id="back"> Back </button>
                <button type="submit"> Submit </button>
            </div>
        </form>

        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
        </div>
    </div>
    <script src="./js/register.js"></script>
</body>
</html>
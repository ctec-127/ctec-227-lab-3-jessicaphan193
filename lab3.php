<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 3</title>
</head>
<body>                                                                                                                                                                                                                                                                                         
    <?php
    $country = '';
    $state = '';

    if(isset($_POST['country'])){
        setcookie("country", $_POST['country'], time() + 86400 * 30);
        $country = $_POST['country'];
    }

    if(isset($_POST['state'])){
        setcookie("state", $_POST['state'], time() + 86400 * 30);
        $state = $_POST['state'];
    }
    ?>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <select name="country">
            <option value="option" <?php if($country == "option") echo 'selected'; ?>>Choose a country</option>
                <option value="usa" <?php if($country == "usa") echo 'selected'; ?>>U.S.A</option>
                <option value="canada" <?php if($country == "canada") echo 'selected'; ?>>Canada</option>
                <option value="italy" <?php if($country == "italy") echo 'selected'; ?>>Italy</option>
                <option value="skorea" <?php if($country == "skorea") echo 'selected'; ?>>South Korea</option>
            </select>
            <br><br>
            <select name="state">
                <option value="option" <?php if($state == "option") echo 'selected'; ?>>Choose a state</option>
                <option value="washington" <?php if($state == "washington") echo 'selected'; ?>>Washington</option>
                <option value="idaho" <?php if($state == "idaho") echo 'selected'; ?>>Idaho</option>
                <option value="alaska" <?php if($state == "alaska") echo 'selected'; ?>>Alaska</option>
                <option value="other" <?php if($state == "other") echo 'selected'; ?>>Other</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
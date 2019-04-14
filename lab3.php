<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>                                                                                                                                                                                                                                                                                         
    <?php
    $country = '';
    $state = '';

    if(isset($_POST['country'])){
        setcookie("country",$_POST['country'], time() + 86400 * 30);
        $country = $_POST['country'];
    }
    ?>

<div>
        <form>
            <select name="Country">
                <option>U.S.A</option>
                <option>Canada</option>
                <option>Italy</option>
                <option>South Korea</option>
            </select>
            <br><br>
            <select name="State">
                <option>--Select--</option>
                <option>Washington</option>
                <option>Oregon</option>
                <option>California</option>
                <option>Other</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

</body>
</html>
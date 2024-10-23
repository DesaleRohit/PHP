<html>
    <body>
        <form>
            <label>Enter the Country</label><br>
            <input type="text" id="country" name="country"><br>
            <input type="submit" value="Find">
        </form>
    </body>
</html>
<?php

    $capitals = array( "India" => "Delhi", "USA" => "Washington", "Japan" => "Tokyo");

    if(isset($_GET['country']))
    {
        $country = $_GET['country'];

        if(array_key_exists($country, $capitals))
        {
            echo "Capital of $country is $capitals[$country]";
        }
        else
        {
            echo "Capital of $country is not found";
        }
    }   

    ?>

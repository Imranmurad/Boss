<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action="Practicee.html" method="Post">
            <p> Name: <input type="text" name="name"></p>
            <p> Email: <input type="text" name="email"></p>
            <input type="submit" name="submit">
        </form>
        <?php
            echo $_Post["name"];
        
        
        ?>
    </body>
    
</html>
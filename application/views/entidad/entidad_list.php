<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Main Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css"/>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>

    </head>
    <body>


        <div class="ui container">
        
            <div>        
                <?php 
                foreach($result as $entidad) {
                    echo "<h2>" . $entidad->nombre . "<h2>";   
                    echo "<p>" . $entidad->mision . "</p>";
                }
                ?>
            </div>
        </div>
        
        
    </body>
</html>
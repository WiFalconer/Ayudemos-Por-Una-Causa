<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackea por una Causa</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css" type="text/css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/header.css"); ?>" type="text/css" />
</head>

<body>
    <style type="text/css">
        main .ui.container {
            background-color: white;
        }
    </style>
    <header style="margin-bottom: ">
        <div class="ui container" style="padding-top: 1em; padding-bottom: 0.5em;">
            <h2 class="ui header">
                <a href="/" style="color: inherit">
                     <img src='<?=base_url("assets/img/");?>logo.png' width="320px">
                </a>
            </h2>
            <div>
                <a href="/home/sign_in/<?php echo $result->id; ?>" style="margin-right: 1em;">Sign In</a>
                <a href="/home/sign_up">Sign Up</a>
            </div>
        </div>
    </header>
    <main>
        <div class="ui container">
            <img style="width: 100%; height: 50vh;" src="https://images.pexels.com/photos/42157/pexels-photo-42157.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></img>
            <div style="padding:2em;">
                <h1><?php echo $result->nombre; ?></h1>
                <p><?php echo $result->mision; ?></p>
                <div>
                    <button class="ui facebook button">
                      <i class="facebook icon"></i>
                      Facebook
                    </button>
                    <button class="ui twitter button">
                      <i class="twitter icon"></i>
                      Twitter
                    </button>
                </div>
                <div class="ui divider"></div>
                <h2 id="donate">Donate</h2>
                <form action="your-server-side-code" method="POST">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_Zag98SJmC6jRxR9meHJPbEWm"
                        data-amount="999" data-name="Organization" data-description="Donation" data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto"></script>
                </form>
                <div class="ui divider"></div>
                <h2>Actividades</h2>
                <div>
                    <?php

                        if ( count($activities) < 1) {
                            echo "<h3 class='large label'>&nbsp;&nbsp;&nbsp;&nbsp;NO DATA FOUND</h3>";
                        }
                        else {
                             echo '<div class="ui three cards">';
                            foreach($activities as $row) {
                                echo '<div class="ui card">';
                                echo '<div class="content">';
                                echo '<div class="header">' . $row->nombre  . '</div>';
                                echo '</div>';
                                echo '<div class="content">';
                                echo '<div class="ui grey sub description">'. $row->descripcion . '</div>';
                                echo '</div>';
                                echo '<div class="content">';
                                echo '<div class="ui grey small description">Date:&nbsp;'. $row->fecha . '</div>';
                                echo '</div>';
                                if($row->tipo_actividad != 'Private')
                                {
                                echo '<div class="extra content">';
                                echo '<button class="ui button">Join Project</button>';
                                echo '</div>';
                                }
                                else 
                                {
                                echo '<div class="extra content">';
                                echo '&nbsp;';
                                echo '</div>';                                    
                                    echo '<div class="ui red bottom left attached label">Private</div>';    
                                }
                                echo '</div>';
                    
                            }
                            echo '</div>';
                        }
                    
                    ?>
                </div>
                <div class="ui divider"></div>
                <div style="height: 300vh"></div>
            </div>
        </div>
    </main>
</body>

</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Dashboard</title>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css" type="text/css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
        
        
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        
        
    </head>
    <body>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/header.css"); ?>" type="text/css" />
    <header style="margin-bottom: ">
        <div class="ui container" style="padding-top: 1em; padding-bottom: 0.5em;">
            <h2 class="ui header">
                <a href="/" style="color: inherit">
                     <img src='<?=base_url("assets/img/");?>logo.png' width="320px">
                    <!--<span class="accent">accent</span>&nbsp;<sub>logo</sub>-->
                </a>
            </h2>
            <div>
                <!--<a href="/home/sign_in" style="margin-right: 1em;">Sign In</a>-->
                <a href="/">Sign Out</a>
            </div>
        </div>
    </header>
    <main style='background: whitesmoke;'>
    <div class="ui container">
        <div class='ui grid'>
            <div class="four wide column">
                <div class="ui vertical menu">
                
                    <a class="item" href='<?=base_url("dashboard/profile/");?><?=$id;?>'>NGO Profile</a>
                    <a class="item" href='<?=base_url("dashboard/recursos/");?><?=$id;?>'>Resources</a>
                    <a class="item">Groups</a>              
                    <a class="item" href='<?=base_url("dashboard/calendar/");?><?=$id;?>'>Calendar</a>
                    <a class="item">Meetings</a>
                    <a class="item" href='<?=base_url("dashboard/proyectos/");?><?=$id;?>'>Projects</a>
                    <a class="item" href='<?=base_url("dashboard/tiempos/");?><?=$id;?>'>Time Sheet</a>                    
                    <a class="item">Campaigns</a>
                    <a class="item" href='<?=base_url("dashboard/reports/");?><?=$id;?>'>Reports</a>              
                </div>
            </div>
            <div class="twelve wide column">
                <div id='target'>
                    <?php
                
                        $data['rec'] = $result;
                        $this->load->view($second_page, $data);
                    
                    ?>
                </div>
            </div>
            </div>
        </div>
        
    </main>        
        <script type="text/javascript" src='<?=base_url("assets/js/serialize.js");?>'></script>
        <!--<script type="text/javascript" src='< ?=base_url("assets/js/getJSON.js");?>'></script>-->


    </body>
</html>            







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
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <link rel="stylesheet" href="/assets/css/header.css"/>

</head>

<body>
    <header class="mb-2 shadow">
        <div class="ui container" style="padding-top: 1em; padding-bottom: 0.5em;">
            <h2 class="ui header">
                <a href="/" style="color: inherit">
                    <!--<span class="accent  ">accent</span>&nbsp;<sub>logo</sub>-->
                    <img src='<?=base_url("assets/img/");?>logo.png' width="320px">
                </a>
            </h2>
            <div>
                <a style="margin-right: 1em;" href="/home/sign_in">Sign In</a>
                <a href="/home/sign_up">Sign Up</a>
            </div>
        </div>
    </header>
    <div>
        <div class="ui container">
            <form id="search">
                <div class="ui action fluid input">
                    <input id="name-input" type="text" placeholder="Busca...">

                    <select id="category-select"class="ui compact selection dropdown">
                        <option value="">Escoge una Categoria</option>
                        <?php
                            foreach($categories as $category)
                             {
                                echo '<option value="' . $category->id . '">' . $category->nombre . '</option>';
                             }
                        ?>
                    </select>

                    <button type="submit" class="ui button bg-accent">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="ui divider"></div>
    <main>
        <div class="ui container">
            <div id="card_container" class="ui three stackable link cards centered">
                <i id="spinner" class="notched circle loading big icon" style="margin-top: 1em;"></i>
                <div id="error_message" class="ui placeholder segment hidden" style="display:none;">
                    <div class="ui icon header">
                        <i class="dont icon"></i>
                        Couldn't find any organizations.
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="/assets/js/getJSON.js"></script>
    <script type="text/javascript" src="/assets/js/card_animation.js"></script>
    <script type="text/javascript" src="/assets/js/get_organizations.js"></script>
    <script type="text/javascript" src="/assets/js/search.js"></script>
</body>

</html>
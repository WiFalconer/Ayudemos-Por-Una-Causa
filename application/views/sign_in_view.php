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
        <div class="ui container" style="padding-top: 2em; padding-bottom: 2em;">
            <h2 class="ui header">
                <a href="/" style="color: inherit">
                    <span class="accent">accent</span>&nbsp;<sub>logo</sub>
                </a>
            </h2>
            <div>
                <a href="/home/sign_up">Sign Up</a>
            </div>
        </div>
    </header>
    <main>
        <div class="ui container">
            <div class="ui placeholder segment">
              <div class="ui two column very relaxed stackable grid">
                <div class="column">
                  <div class="ui form">
                    <div class="field">
                      <label>Username</label>
                      <div class="ui left icon input">
                        <input type="text" placeholder="Username">
                        <i class="user icon"></i>
                      </div>
                    </div>
                    <div class="field">
                      <label>Password</label>
                      <div class="ui left icon input">
                        <input type="password">
                        <i class="lock icon"></i>
                      </div>
                    </div>
                    <a href="/dashboard/profile/<?=$id;?>" class="ui blue submit button" style="color: white;">Sign In</a>
                  </div>
                </div>
                <div class="column">
                  <a href="/home/sign_up" class="ui big button" style="margin:auto;">
                    <i class="signup icon"></i>
                    Sign Up
                  </a>
                </div>
              </div>
              <div class="ui vertical divider">
                Or
              </div>
            </div>
        </div>
    </main>
</body>

</html>
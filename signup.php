<?php
   session_start();
   if(isset($_SESSION["username"])) {
       header("Location: index.php");
       exit();
   }
   ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
   <head>
      <title>REGISTER | SPAMTOOLZ.NET | Spam Tools Shop</title>
      <meta name="title" content="REGISTER | SPAMTOOLZ.NET | Spam Tools Shop">
      <meta name="description" content="Buy Spamming Tools Fresh SMTP Shop Buy Inbox Mailer Buy Spam Tools Buy Paid Account Rdp Shop Fresh Spam Shop buy Fresh Smtp Fresh Shell">
      <meta name="keywords" content="Buy Spamming Tools, Fresh SMTP Shop, Buy Inbox Mailer, Buy Spam Tools, Buy Paid Account, Buy Fresh RDP, Rdp Shop, Fresh Spam Shop, buy Fresh Smtp, Fresh Shell, Fresh Smtp, Fresh Office365 smtp, Paid Date Account| Spam Tools, SMTP, SHELL, MAILER, cPanel, FTP, Combo List, Fresh RDP, Fresh Tools, Valid shod, spammer shop, Fresh Cpanel , Fresh Shell, Hacking RDP , Hacking shop , Buy Spamming Tools, Spammer Tools, Inbox Mailer, Buy Tools Spam, Spamming Tools, Rdp Shop, Site To Buy Spamming Tools, Buy Spamm Equipments, Buy Carding Accounts, FreshTools, Spam Tools, SMTP, SHELL, MAILER, cPanel, FTP, Combo List, Fresh RDP, Fresh Tools, Valid shop, spammer shop, Fresh Cpanel">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English">
      <meta name="author" content="SPAMTOOLZ.NET">
      <link rel="apple-touch-icon" type="image/png"href="assets/media/favicons/favicon.png">
      <meta name="apple-mobile-web-app-title" content="SPAMTOOLZ.NET">
      <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
      <link rel="mask-icon" type="" href="assets/media/favicons/favicon.png" color="#111">
      <style media="" data-href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0} menu,article,aside,details,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{}button,select{text-transform:none}[type=submit], [type=reset],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}/*# sourceMappingURL=normalize.min.css.map */</style>
      <style>
         @import url(https://fonts.googleapis.com/css?family=Open+Sans);
         .btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
         .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
         .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
         .btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
         .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
         .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
         .btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
         .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
         .btn-block { width: 100%; display:block; }
         * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }
         html { width: 100%; height:100%; overflow:hidden; }
         body { 
         width: 100%;
         height:100%;
         font-family: 'Open Sans', sans-serif;
         background: #092756;
         background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
         background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
         background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
         background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
         background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
         }
         .login { 
         position: absolute;
         top: 50%;
         left: 50%;
         margin: -150px 0 0 -150px;
         width:300px;
         height:300px;
         }
         .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }
         input { 
         width: 100%; 
         margin-bottom: 10px; 
         background: rgba(0,0,0,0.3);
         border: none;
         outline: none;
         padding: 10px;
         font-size: 13px;
         color: #fff;
         text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
         border: 1px solid rgba(0,0,0,0.3);
         border-radius: 4px;
         box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
         -webkit-transition: box-shadow .5s ease;
         -moz-transition: box-shadow .5s ease;
         -o-transition: box-shadow .5s ease;
         -ms-transition: box-shadow .5s ease;
         transition: box-shadow .5s ease;
         }
         input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
      </style>
      <script>
         window.console = window.console || function(t) {};
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
      <script>
         if (document.location.search.match(/type=embed/gi)) {
           window.parent.postMessage("resize", "*");
         }
      </script>
   </head>
   <body>
      <div class="login">
         <h1>Create An Account</h1>
         <form method="post" action="signup.php">
            <?php include('errors.php'); ?>
            <input type="text" name="username" placeholder="Username" required="required" value="<?php echo $username; ?>" />
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required="required" />
            <input type="password" name="password_1" placeholder="Password" required="required"  />
            <input type="password" name="password_2" placeholder="Confirm password" required="required"  />
            <center><img src="captcha.php" alt="Captcha"></center>
            <input type="text" name="captcha" placeholder="Captcha Code" required="required"  />
            <button type="submit" class="btn btn-primary btn-block btn-large" name="reg_user">Register</button>
            <font color="white">
               <h4>Already Have an Account ? <a style="color: #dc3545;text-decoration: underline;" href="login.php">Sign In</a></h4>
               <font></font>
            </font>
         </form>
      </div>
   </body>
</html>
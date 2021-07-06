<!DOCTYPE html>
<html>
	<head>
        <?php
            if(!isset($_GET['mobile']))
            {
        ?>
            <!--<script type="text/javascript">
                const isMobile = /Mobi/.test(window.navigator.userAgent);
                
                if(isMobile == false)
                    location.href="https://latin-chain.com/weblatin";
            </script>-->
        <?php
            }
        ?>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LatinChain Platform</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        
        <!-- ios support -->
        <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
        <meta name="theme-color" content="#db4938" />
        
        <meta name="application-name" content="LatinChain Platform"/>
        
        <link href="https://latin-chain.com/latin-chain-logo.jpeg" rel="shortcut icon" />
        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script type="text/javascript">
            $( document ).ready(function() {
                const shareData = {
                    title: 'LatinChain Platform',
                    text: 'Hi. Check it out this Pi App: LatinChain Platform',
                    url: 'https://latin-chain.com/',
                }
                
                if (!navigator.share) {
                    $("#social_div").html("");
                }else
                {
                    const btn = document.querySelector('#button1');
                    //const resultPara = document.querySelector('.result');
                    
                    // Must be triggered some kind of "user activation"
                    btn.addEventListener('click', async () => {
                      try {
                        await navigator.share(shareData);
                        //resultPara.textContent = 'MDN shared successfully'
                      } catch(err) {
                        //alert('Error: ' + err);
                      }
                    });

                }
            });

        </script>
	</head>
    
	<body>
 		<div class="container" style="text-align:center;">
            Welcome to Pi Apps from LatinChain. Choose your app:<br/><br/>
            <a href="https://latin-chain.com/sudoku/main.html" class="btn btn-primary">SUDOKU</a><br/><br/>
            <a href="https://latin-chain.com/snake/main.html" class="btn btn-primary">SNAKE</a><br/><br/>
            <a href="https://latin-chain.com/piapp-example/main.html" class="btn btn-primary">PIAPP EXAMPLE</a><br/><br/>
            Other developments:<br/><br/>
            <a href="https://apps.odoo.com/apps/modules/14.0/website_pinetwork_odoo/" class="btn btn-primary">WATCH OUR ODOO APP</a><br/><br/>
            <a href="https://apps.odoo.com/apps/modules/14.0/website_pinetwork_games_odoo/" class="btn btn-primary">PIAPP GAMES PLATFORM IN ODOO</a><br/><br/>
            <div id="social_div">Share in Social Networks:<br/><br/>
            <button id="button1"class="btn btn-primary">Share</button><br/><br/>
            </div>
            INFO:<br/><br/>
            <a href="https://latin-chain.com/weblatin" class="btn btn-link"> <img src="https://latin-chain.com/latin-chain-logo.jpeg" alt="LatinChain" class="img-fluid" style="width: 100px; height: 100px;" /></a><br/><br/>
            <a href="https://latin-chain.com/weblatin" class="btn btn-link">MAIN PAGE OF LATINCHAIN</a><br/><br/>
            <a href="https://dev-rockcesar.blogspot.com/2021/05/pi-apps-published.html" class="btn btn-link" >MORE INFO</a><br/><br/>
		</div>
	</body>
</html>

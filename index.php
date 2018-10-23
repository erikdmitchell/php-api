<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        
        <?php include_once('api.php'); ?>
    </head>

    <?php
    $api = new PHP_API();
    $basic = $api->get();
    $planets = $api->get('planets');
    $planet_1 = $api->get('planets/1');  
    ?>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>SWAPI</h1>
                    </div>
                </div>        
            </div>
        </header>
    
        <div class="content container">
            <div class="row">
                <div class="col-12">
                    <div class="search-form">
                        <h3>Search People</h3>
                        <input type="text" name="search" id="search" class="searchbox" value="r2" />
                        <button class="button" id="search-btn">Search</button>    
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="search-results">  
                    </div>
                </div>
            </div>            
            
            <div class="row">
                <div class="col-12">
                    <h2>SWAPI</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <pre>
                        <?php print_r($basic); ?>
                    </pre> 
                </div>
            </div>

            <div class="panets">
                <?php foreach ($planets['results'] as $planet) : ?>
                    <div class="row">
                        <div class="col-12">
                            <?php echo $planet['name']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>                
            
            <div class="row">
                <div class="col-12">
                    <pre>
                        <?php print_r($planet_1); ?>
                    </pre> 
                </div>
            </div>                       
        </div>
    
        <footer>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/main.js"></script> 
        </footer>
    
    </body>

</html>
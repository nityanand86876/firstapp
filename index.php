<?php




?>
<!---------------------------------------------------Hello Hacker!------------------------------------------------------------------------->
<!---------------------------------------------Please dont hack my website! --------------------------------------------------------------->
<!---------------------------------------------------Hello Hacker!------------------------------------------------------------------------->
<!---------------------------------------------------~!@#$%^&*()_+`1234567890-=------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="xGEfl-41357PS6G3QIu3x5AtpLeSVexJLz-clNKYlu4" />
    <title>Converter</title>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <link rel="manifest" href="manifest.json"> -->
    <!-- <link rel="alternate" href="atom.xml" type="application/atom+xml" title="Atom"> -->
    <!-- <link rel="manifest" href="manifest.json"> -->
    <!-- <link rel="stylesheet" href="print.css" media="print"> -->
    <!-- <link rel="alternate" href="rss.xml" type="application/rss+xml" title="RSS"> -->
    <link rel="apple-touch-icon" href="favicon.png">
    <!-- <link rel="stylesheet" href=""> -->
    <!-- <link rel="import" href="component.html"> -->
    <!-- <link rel="import" href=""> -->
    <link rel="preload" href="cdn/fonts/nnt.ttf">
    <!-- <link rel="description" href=""> -->

</head>

<body id="body1" style="overflow: unset;padding: 0 !important;
margin: 0 !important;">
    <div style="display: block !important; height: 0px !important;"></div>
    <header id="header">
        <nav>
            <a href="/home" target="_blank" rel="noopener noreferrer">Home</a> &nbsp;
            <a href="/paint" target="_blank" rel="noopener noreferrer">Paintings</a> &nbsp;
            <a href="mailto:nityanandthakurdss@gmail.com">Mail us</a>
            <!-- <a href="https://github.com/nityanand86876/" target="_blank" rel="noopener noreferrer" class="Git">
                <img src="img/github.png" alt="Github_Logo" width="20px" height="20px" class="ljlkjkjk">
            </a> -->
            <!--<a href="signup.php" class="signup">signup</a>
            <!-- <a href="https://www.google.com" target="_blank" rel="noopener noreferrer" id="google">
                <img src="google.png" alt="google logo" width="30" height="30" id="google1">
            </a> -->
        </nav>
    </header>
    <br>
    <br>
    <br>
    <button onclick="nohead1()" id="nohead">Don't Show Header</button> &nbsp;
    &nbsp; <button onclick="nohead2()" id="head3">Show Header</button><br>
    <button id="red-bg" onclick="doc1()"></button>
    <button id="gr-bg" onclick="doc2()"></button>
    <button id="bl-bg" onclick="doc3()"></button>
    <button id="blu-bg" onclick="blbg()" style="background-color: rgba(0, 0, 0, 0.748);"></button>
    <button id="wh-bg" style="background-color: blanchedalmond;" onclick="whbg()"></button>
    <button id="whi-bg" style="background-color: white;" onclick="whibg()"></button>
    <hr>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    
    <span>Farenheit: <input type="float" name="ftoc" required></span>
    <button type="submit">Change to &deg; C</button>
    <div style="display: none;">
    <?php
    function ftoc11($x) {
        return ($x-32) * 5/9;
    }
    function ctof11($y) {
        return ($y*9/5) +32;
    }
    $y1 = $_POST['ftoc'];
    $y2 = ftoc11($y1);
    

    
    ?>
    </div>
    <?php
        echo "<br>";
        echo $y1 . "&deg;F = " . $y2 . "&deg; C";
    ?>
    
    
    
    </form>
    <hr>
    <form action="<?php 
    htmlspecialchars($_SERVER['PHP_SELF'])
    
    ?>" method="post">
    
    <span>
    Celsius:-->
    <input type="float" name="ctof12">
    </span>
    <div style="display: none;">
    <?php 
    $s1 = $_POST['ctof12'];
    $s2 = ($s1 * 9/5) + 32;
    ?>
    </div>
    <button type="submit">Convert &deg; C to &deg; F</button>
    <?php 
    echo "<br>";
    echo $s1 . "&deg; C = " . $s2 . "&deg; F." ;
    ?>

    </form>
    <hr>
    <form action="<?php           
    
    htmlspecialchars($_SERVER['PHP_SELF']);
    
    
    
    ?>" method="post">
    
    <span>Input an angle to see its cos &theta;
    <input type="float" name="cos11" required>
    <button type="submit">change to cos!</button>
    </span>
    <div style="display: none;">
    <?php
    function cosine($z) {
        return cos($z);
    }
    $cos12 = $_POST['cos11'];
    $cos11 = cos($cos12);
    echo "<br>";
    
    ?>
    </div>
    <?php 
    echo "<br>";
    echo "The cos &theta; of " . $cos12 . "&deg; = " . $cos11 . "&deg;.";

    
    ?>
    </form>
    <hr>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
    <button type="submit">see rand no between 1 and 6 to play ludo.</button>
    <?php 
    $y6 = random_int(1,6);
    echo "<br>";
    echo $y6;
    ?>
    </form>
    <hr>
    <form action="<?php   
    htmlspecialchars($_SERVER['PHP_SELF']);
    
    
    ?>" method="post">
    <span>input angle to see its sin &theta;<input type="float" name="sin1212" ></span>
    <button type="submit">change to sin</button>
    <div style="display: none;">
    <?php 
    $z4 = $_POST['sin1212'];
    $z5 = $z4 * 0.017453;
    // $z7 = $z5 * 0.017453;
    // $z8 = floor($z7);
    $z6 = sin($z5);



    ?>
    </div>
    <?php
    echo "<br>";
    echo "The sin &theta; of" . $z4 . "&deg; = " . $z6 . "&deg;.";
    
    
    ?>
    </form>
    <hr>
    <button onclick="showDate()" class="dclass1"><i>Show Date and Time.</i></button>
    <p>Date: <span id="date_and_time"></span></p>
    <hr>
    <div><!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->
    <!--<iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14383.827423523202!2d85.82743802256878!3d25.672724878380638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed896fa24b03b3%3A0x4c443ddba9d565f8!2sDalsinghsarai%2C%20Bihar%20848114!5e0!3m2!1sen!2sin!4v1623766943979!5m2!1sen!2sin"
        width="30%" height="70%" style="border:0;" allowfullscreen=""></iframe>-->
    <div class="clockside">
        <div class="h"></div>
        <div class="m"></div>
        <div class="s"></div>
    </div>
    <div class="box">
        <svg xmlns="http://www.w3.org/2000/svg" width="207" height="200" viewBox="0 0 207 200">
            <g fill="none" fill-rule="evenodd">
                <path fill="#FF5C62"
                    d="M125.305 39.338S147.631-.955 162.457 2.114c14.826 3.069 3.053 59.835 3.053 59.835" />
                <path fill="#32454C"
                    d="M165.511 63.546a1.596 1.596 0 0 1-1.56-1.92c.09-.438 8.98-43.885 1.312-55.586-.875-1.336-1.899-2.109-3.128-2.363-11.24-2.325-29.386 25.513-35.438 36.435a1.59 1.59 0 0 1-2.165.62 1.598 1.598 0 0 1-.62-2.17c.058-.1 5.726-10.288 13.147-19.96C147.33 5.218 155.987-.856 162.78.552c2.07.428 3.802 1.685 5.146 3.737 8.388 12.8-.474 56.147-.856 57.985a1.594 1.594 0 0 1-1.558 1.272" />
                <path fill="#FFC2C4"
                    d="M142.041 48.75c.976-1.299 3.421-4.093 6.906-4.865 0 0-5.295-3.695-9.542-.217 0 0 5.998-34.368 25.136-40.658 10.239 6.989 3.094 47.867 1.333 57.09-.938.08-2.095.146-3.383.152l-14.173-7.972a3.405 3.405 0 0 1 1.342-1.823l-5.928-.755-1.69-.951" />
                <path fill="#32454C"
                    d="M150.608 51.74l12.292 6.912a41.32 41.32 0 0 0 1.637-.058c4.023-21.6 6.2-47.785-.294-53.786-14.156 5.382-20.64 27.683-22.598 35.996a8.391 8.391 0 0 1 1.95-.223c3.364 0 6.145 1.913 6.262 1.995a1.598 1.598 0 0 1-.566 2.868c-1.959.433-3.566 1.664-4.668 2.762l5.238.668a1.593 1.593 0 0 1 1.348 1.21 1.599 1.599 0 0 1-.6 1.655zm11.883 10.107c-.273 0-.542-.07-.78-.204l-14.173-7.971a1.597 1.597 0 0 1-.736-1.88l.028-.087-3.298-.42a1.594 1.594 0 0 1-.58-.192l-1.69-.951a1.596 1.596 0 0 1-.493-2.35c.803-1.07 2.194-2.658 4.113-3.888a6.603 6.603 0 0 0-1.286-.132c-1.213 0-2.254.37-3.183 1.131a1.59 1.59 0 0 1-1.812.142 1.597 1.597 0 0 1-.764-1.652c.251-1.442 6.39-35.386 26.208-41.899.469-.154.984-.08 1.392.197 10.548 7.2 4.913 43.455 2 58.708a1.592 1.592 0 0 1-1.428 1.29c-1.17.1-2.352.154-3.512.158h-.006z" />
                <path fill="#FF5C62"
                    d="M175.95 63.865s-14.888-54.99-70.57-34.327c-51.75 19.203-57.636 88.261-57.636 88.261l83.904 7.714 40.97-4.334 3.333-57.314" />
                <path fill="#FFFFFE"
                    d="M175.95 63.865s-.179-.661-.57-1.81l-4.978-1.61s-14.332 6.71-22.778-13.859c-8.446-20.57-15.902-13.486-3.75 2.919 0 0 14.164 12.729 1.319 22.12-8.331 6.091-7.93 23.188-5.026 37.018 1.086 5.171-11.696 11.21-9.456 16.775l.937.095 40.97-4.334 3.333-57.314" />
                <path fill="#32454C"
                    d="M49.504 116.359l82.133 7.55 39.47-4.174 3.238-55.69c-.458-1.537-3.222-10.233-9.582-18.798-9.243-12.446-21.328-18.757-35.922-18.757-7.075 0-14.782 1.529-22.908 4.544-26.187 9.718-40.177 32.79-47.301 50.435-6.396 15.84-8.558 30.227-9.128 34.89zm82.144 10.75c-.049 0-.097-.003-.146-.007l-83.904-7.713a1.595 1.595 0 0 1-1.44-1.725c.06-.715 1.583-17.73 9.522-37.393 10.562-26.157 27.557-44.218 49.147-52.23 8.482-3.147 16.56-4.743 24.014-4.743 15.47 0 28.797 6.962 38.541 20.131 7.303 9.872 9.994 19.608 10.105 20.018.045.166.063.339.053.511l-3.332 57.314a1.594 1.594 0 0 1-1.423 1.494l-40.97 4.334c-.056.005-.111.009-.167.009z" />
                <path fill="#FF5C62"
                    d="M109.141 39.228s-41.1-26.263-53.372-15.905c-12.272 10.36 27.287 57.314 27.287 57.314" />
                <path fill="#32454C"
                    d="M83.057 82.232a1.59 1.59 0 0 1-1.218-.566c-1.28-1.52-31.345-37.409-29.976-53.542.217-2.565 1.186-4.592 2.88-6.02 5.595-4.724 16.686-3.435 32.962 3.829 11.78 5.258 22.188 11.882 22.293 11.949.74.474.958 1.46.486 2.203a1.59 1.59 0 0 1-2.199.488c-11.158-7.128-42.16-23.903-51.49-16.029-1.038.876-1.614 2.136-1.76 3.85-1.257 14.824 28.933 50.851 29.238 51.213.567.674.482 1.68-.19 2.25a1.584 1.584 0 0 1-1.026.375" />
                <path fill="#FFC2C4"
                    d="M98.283 56.465c-1.564-.718-5.25-2.085-8.887-1.042 0 0 3.075-6.122 8.784-5.028 0 0-22.897-29-43.902-25.182C48.254 36.905 75.5 71.39 81.785 79.096c-.15.066 1.286.094 1.637.559C94.276 74.002 94.21 62.929 94.21 62.929c-.549-.526-1.254-.925-2.17-1.02l5.145-3.702 1.098-1.742" />
                <path fill="#32454C"
                    d="M82.662 77.649c.254.047.511.107.76.19 7.698-4.41 8.953-11.751 9.157-14.141a1.966 1.966 0 0 0-.701-.201 1.598 1.598 0 0 1-.766-2.884l4.705-3.386c-1.027-.318-2.289-.587-3.623-.587a8.57 8.57 0 0 0-2.36.317 1.588 1.588 0 0 1-1.664-.516 1.599 1.599 0 0 1-.197-1.735c.11-.216 2.408-4.693 6.851-5.795-5.59-6.3-21.405-22.449-36.64-22.449-.944 0-1.881.064-2.794.19-3.15 8.975 12.462 32.77 27.272 50.997zm.761 3.602a1.59 1.59 0 0 1-1.056-.401 5.46 5.46 0 0 0-.572-.11c-.786-.12-1.2-.463-1.412-.84C77 75.74 68.807 65.377 62.063 54.49c-9.06-14.623-12.07-24.44-9.2-30.01.227-.44.644-.75 1.13-.838a23.498 23.498 0 0 1 4.192-.372c19.857 0 39.384 23.81 41.142 26.007a1.594 1.594 0 0 1-1.447 2.684 5.648 5.648 0 0 0-1.052-.102c-1.598 0-2.908.743-3.892 1.61 2.598.145 4.845 1.01 6.01 1.544a1.599 1.599 0 0 1 .683 2.303l-1.098 1.742c-.109.173-.25.324-.417.444l-2.959 2.129c.053.047.105.095.156.144.312.299.49.712.492 1.144.002.492-.062 12.118-11.647 18.151-.233.122-.484.18-.733.18z" />
                <path fill="#FFFFFE"
                    d="M122.222 61.804s12.965-7.878 16.45-.789c3.483 7.09 1.018 13.918-9.194 17.101l-7.256-16.312M158.55 49.153s7.107-3.095 9.902 1.909c1.705 3.05 2.773 7.618-4.636 9.928l-5.266-11.837" />
                <path fill="#32454C"
                    d="M130.372 67.94c2.004 4.505 1.604 9.06-.894 10.176-2.497 1.116-6.145-1.631-8.149-6.136-2.004-4.504-1.604-9.06.893-10.176 2.498-1.116 6.146 1.632 8.15 6.136" />
                <path fill="#FFFFFE"
                    d="M165.765 61.437s25.82-6.699 29.625 3.248c3.806 9.947 12.59 38.48-38.68 48.649" />
                <path fill="#32454C"
                    d="M156.707 114.93a1.596 1.596 0 0 1-.307-3.162c19.484-3.864 32.093-10.775 37.476-20.544 5.881-10.67 1.475-22.184.028-25.968-2.702-7.06-20.941-4.035-27.74-2.274a1.595 1.595 0 0 1-.799-3.09c2.784-.722 27.32-6.74 31.512 4.222 1.58 4.126 6.384 16.684-.213 28.654-5.858 10.63-19.197 18.076-39.646 22.131a1.63 1.63 0 0 1-.31.031" />
                <path fill="#32454C"
                    d="M197.17 63.913c2.34 5.261 2.474 10.806-1.947 12.78-4.42 1.976-11.723-.366-14.063-5.628-2.34-5.26 1.08-9.44 5.5-11.415 4.42-1.975 8.17-.998 10.51 4.263M164.464 53.606c1.454 3.268 1.164 6.575-.648 7.384-1.812.81-4.46-1.184-5.914-4.453-1.454-3.268-1.164-6.574.648-7.384 1.812-.81 4.46 1.184 5.914 4.453" />
                <path fill="#FF5C62"
                    d="M170.402 187.319s23.071 19.081 32.024 2.29c8.953-16.792-7.575-30.53-9.641-36.637-2.066-6.106-21.35-67.93-90.563-64.495-69.212 3.435-73.344 42.743-87.807 70.22-14.462 27.477-14.807 30.53-8.608 36.254 6.197 5.725 21.965 3.967 34.361-9.008 0 0 51.724 22.747 130.234 1.376" />
                <path fill="#FFFFFE"
                    d="M29.844 178.323c-1.436-3.17-6.849-14.051-16.782-17.047C-.062 186.372-.192 189.41 5.807 194.95c6.197 5.725 21.965 3.967 34.361-9.008 0 0-8.638-3.896-10.324-7.62M160.072 147.702c.689-42.815-52.34-36.709-61.293-29.84 0 0-47.864-15.646-57.16 23.661-6.598 27.894 8.48 44.639 28.376 52.286 14.576 2.218 33.356 3.52 55.247 1.612 18.99-5.59 34.37-19.106 34.83-47.719M202.426 189.609c7.117-13.349-1.867-24.768-6.89-31.957-5.308 2.317-8.252 6.847-11.957 13.49-5.934 10.639-13.177 16.177-13.177 16.177s23.071 19.081 32.024 2.29" />
                <path fill="#32454C"
                    d="M107.719 89.936c-1.778 0-3.6.045-5.417.135-57.087 2.833-69.224 30.694-79.932 55.275-2.156 4.947-4.191 9.62-6.547 14.095-14.622 27.781-14.11 29.56-8.938 34.337 1.87 1.727 4.87 2.678 8.448 2.678 7.881 0 16.736-4.343 23.685-11.617a1.59 1.59 0 0 1 1.79-.358c.236.104 24.157 10.395 63.339 10.396h.005c21.505 0 43.654-3.061 65.833-9.099a1.589 1.589 0 0 1 1.43.31c.108.088 10.81 8.836 19.911 8.836 4.347 0 7.519-1.984 9.696-6.068 6.276-11.771-.794-21.79-5.957-29.104-1.79-2.536-3.203-4.539-3.788-6.267l-.139-.414c-4.947-14.81-25.586-63.135-83.42-63.135zM15.333 199.647c-4.38 0-8.146-1.25-10.606-3.523-7.131-6.586-6.28-10.51 8.28-38.171 2.3-4.372 4.313-8.992 6.444-13.884 11.078-25.43 23.635-54.255 82.693-57.185 1.87-.093 3.745-.14 5.575-.14 27.148 0 49.52 10.006 66.496 29.74 6.011 6.989 14.35 18.834 19.944 35.575l.134.4c.436 1.29 1.797 3.218 3.372 5.45 5 7.085 13.369 18.942 6.166 32.452-2.744 5.146-6.951 7.755-12.505 7.755-8.974 0-18.687-7.034-21.284-9.047-22.19 5.971-44.356 9-65.89 9h-.006c-35.79-.001-58.561-8.229-63.593-10.24-7.423 7.419-16.78 11.818-25.22 11.818zM181.475 98.305c-1.367 0-2.731-.176-4.04-.597a1.596 1.596 0 0 1 .974-3.039c6.38 2.054 15.264-3.572 15.354-3.63a1.591 1.591 0 0 1 2.199.483c.474.742.26 1.727-.48 2.204-.344.222-7.206 4.58-14.007 4.58" />
                <path fill="#FF5C62" d="M88.793 113.535s-.344 15.53 7.576 15.53 17.217-9.663 17.906-17.6" />
                <path fill="#32454C"
                    d="M96.369 130.66c-1.94 0-3.63-.722-5.02-2.147-4.332-4.44-4.157-14.583-4.148-15.013.02-.88.742-1.603 1.626-1.559a1.594 1.594 0 0 1 1.558 1.63c-.054 2.557.424 9.827 3.243 12.713.78.797 1.676 1.185 2.74 1.185 6.833 0 15.679-8.75 16.32-16.142a1.598 1.598 0 0 1 1.725-1.451c.875.076 1.524.85 1.448 1.727-.789 9.083-10.99 19.057-19.492 19.057" />
                <path fill="#FFC2C4"
                    d="M20.632 187.3c-1.46 1.897-3.45 1.302-5.344-.161-1.894-1.463-2.975-3.24-1.515-5.138a4.323 4.323 0 0 1 6.072-.787 4.346 4.346 0 0 1 .787 6.085M11.174 186.606a2.087 2.087 0 0 1-2.932.38 2.098 2.098 0 0 1-.38-2.938 2.087 2.087 0 0 1 2.933-.38 2.098 2.098 0 0 1 .379 2.938M14.391 191.736a2.087 2.087 0 0 1-2.931.38 2.097 2.097 0 0 1-.38-2.938 2.087 2.087 0 0 1 2.932-.38 2.097 2.097 0 0 1 .38 2.938M20.24 193.609a2.087 2.087 0 0 1-2.932.38 2.097 2.097 0 0 1-.38-2.938 2.087 2.087 0 0 1 2.932-.38 2.097 2.097 0 0 1 .38 2.938M186.89 185.704c1.46 1.898 3.45 1.302 5.344-.16 1.894-1.464 2.974-3.24 1.515-5.139a4.323 4.323 0 0 0-6.073-.787 4.346 4.346 0 0 0-.786 6.086M196.348 185.01a2.087 2.087 0 0 0 2.931.38 2.097 2.097 0 0 0 .38-2.938 2.087 2.087 0 0 0-2.932-.38 2.098 2.098 0 0 0-.379 2.938M193.13 190.14a2.087 2.087 0 0 0 2.932.38 2.097 2.097 0 0 0 .38-2.938 2.087 2.087 0 0 0-2.932-.38 2.097 2.097 0 0 0-.38 2.938M187.282 192.013a2.087 2.087 0 0 0 2.932.38 2.097 2.097 0 0 0 .38-2.938 2.087 2.087 0 0 0-2.932-.38 2.097 2.097 0 0 0-.38 2.938" />
            </g>
        </svg>
    </div>
    </div>
    <a href="#nohead" id="TOP1">TOP</a>
    <!-- <div>
            <p class="rotate">Rotation</p>
        </div> -->
    <hr>
    <!--<p>Angle &equals;&nbsp;&colon;<input type="float" name="number66687677" id="no34565" oninput="cot1(this.value)" onchange="cot1(this.value)"></p>
    <p>cot &theta;&nbsp;&equals;<span id="result7890787"></span></p>-->
    <footer>
        <ADDRESS>
            Dalsingsarai,<br>Samastipur, (848114) <br> Bihar, <br>India, <br>Asia, <br>Earth, <br> Solar System, <br>
            MILKY WAY GALAXY, <br> Universe.
        </ADDRESS>
        <code
            style="text-align: center !important;opacity: 90%; font-size: xx-small;font-family: Arial, Helvetica, sans-serif !important; opacity: 50% !important;">code By Nityanand Thakur</code>
        <p style="text-align: center;opacity: 100%;font-size: smaller;">Copyright&nbsp;&copy;nnt.infinityfreeapp
            .com
            2021-2022. under
            <a href="LICENSE" target="_blank" rel="noopener noreferrer" id="mit">MIT LICENCE</a>

        </p>
    </footer>
</body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.6.5/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.6.5/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
    
<script src="js/script.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->

</html>
<!--------------------

</body>
</html>

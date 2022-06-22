<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{ min-height:100vh; margin:0;padding:0; position:relative; }
        header{ min-height:50px; background:lightcyan; }
        footer{ background:PapayaWhip; }

        /* Trick: */
        body {
        position: relative;
        }

        body::after {
        content: '';
        display: block;
        height: 50px; /* Set same as footer's height */
        }

        footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 50px;
        }
    </style>
</head>
<body>

	
    <footer class="bg-light text-center text-lg-start" >  
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2);" >
        Copyright © 2022 <b style="color:blue;">UDA ITS.</b> All Rights Reserved. 
        </div>  
    </footer>

    
</div>

</body>
</html>
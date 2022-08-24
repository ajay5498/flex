<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .banner
        {
            background: url("mountain.jpg");
            width: 100%;
            background-size: cover;
        
        }
        .top-bar
        {
            background-color:green;
            display: flex;
            width: 100%;
            height: auto;
        }
        .logo
        {
            color: #fff;
            flex: 1;
            font-size: 40px;
            padding: 18px;
            text-transform: uppercase;
        }
        .menu
        {
            
            flex: 4px;
            
        }
        .menu ul{
            display: flex;
            list-style: none;
            margin-top: 30px;
            flex-flow: row wrap;
        }
        .menu ul li{
            flex: 1;
            text-align: center;
        }
        .menu ul li a{
            color: #fff;
            font-size: 20px;
            text-decoration: nonet6;
        }
        .banner-text
        {
            display: flex;
            padding: 15% 0;
        }
        .banner-text-items
        {
            color: #fff;
            margin: auto;
            text-align: center;
            width: 50%;
        }
        .banner-text-items h2{
            font-size: 3em;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .main-content
        {
            display: flex;
            flex-flow: row wrap;
            padding: 5% 0;
        }
        .main1
        {
            flex: 1;
            padding: 3%;
            text-align: center;
        }
        .contact
        {
            background: url("mountain.jpg");
            padding: 80px 0;
            position: relative;
            z-index: 1;
        }
        @media  (max-width:700px)
        {
            
           .top-bar
           {
            text-align: center;
           }
           .top-bar .logo
           {
            flex-direction: column;
            text-align: center;
           }
           .menu
           {
            flex-direction: column;
           }
           .menu ul 
           {
            flex-direction: column;
           }
            .main-content
            {
                flex-direction: column;
            }
        }
        @media  (max-width:400px)
        {
            
           .top-bar
           {
            text-align: center;
           }
           .top-bar .logo
           {
            flex-direction: column;
            text-align: center;
           }
           .menu
           {
            flex-direction: column;
           }
           .menu ul 
           {
            flex-direction: column;
           }
            .main-content
            {
                flex-direction: column;
            }
        }

    </style>
</head>
<body>
    <div class="top-bar">
        <div class="logo">logo</div>
            <div class="menu">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
        
    </div>
    <div class="banner">
        <div class="banner-text">
            <div class="banner-text-items">
                <h2>Mountains</h2>
                <p>welcome to  nepal</p>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="main1">
            <h2>main heading one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Soluta veritatis sint libero amet. Nam repellat totam vitae?
                 Unde ullam architecto vel omnis ut dolor praesentium, 
                 </p>
        </div>
        <div class="main1">
            <h2>main heading two</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Soluta veritatis sint libero amet. Nam repellat totam vitae?
                 Unde ullam architecto vel omnis ut dolor praesentium, 
                 </p>
        </div>
        <div class="main1">
            <h2>main heading three</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Soluta veritatis sint libero amet. Nam repellat totam vitae?
                 Unde ullam architecto vel omnis ut dolor praesentium, 
                </p>
        </div>
    </div>
    <div class="contact">
        <div class="contact-text">
            <div class="contact-item">
                <h2>contact us</h2>
            </div>
        </div>
    </div>
</body>
</html>
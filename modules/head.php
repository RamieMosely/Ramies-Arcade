<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RAMIES ARCADE</title>
    <style>
        /*############ Defaults ###########*/
        @font-face {
            font-family: 'arcade'; 
            src: url('fonts/ka1.ttf'); 
        }

        @font-face {
            font-family: 'game';
            src: url('fonts/game.ttf');
        }

        html {
            scroll-behavior: smooth;
        }

        a {
            text-decoration: none;
        }

        nav, header, footer {
            display: block;
        }

        body {
            line-height: 1;
            margin: 0;
            background-color: black;
            font-family: 'arcade', sans-serif;
            font-size: 20px;
        }

        label {
            color: white;
            font-size: 38px;
            font-family: 'arcade', sans-serif;
        }

        h1 {
            text-align: center; 
            color: #1BADD6;
            font-size: 25px;
            font-family: 'arcade', sans-serif;
            text-shadow: 3px 3px 3px black;

        }

        p {
            color: #1BADD6;
            font-size: 25px;
            font-family: 'arcade', sans-serif;
            line-height: 1.2;

        }

        article p {
            font-size: 35px;
            padding: 35px;

        }

        .container {
            width: 100%;
            margin: 0;
        }

        .row {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .row::after {
            display: table;
            clear: both;
            content:"";
        }

        .col-1 {width: 8.33%};
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11{width: 91.66%;}
        .col-12{width: 100%;}

        * {
            box-sizing: border-box;
        }

        #scroll h1 {
            color: white;
        }


        /* ########### NavBar ############## */

        nav {
            width: 100%;
            margin: 0;
            position: sticky;
            top: 0;
            background-color: black;
            border-bottom: 1px solid yellow;
            z-index: 1;
        }

        nav ul {
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        ul.topnav li {
            list-style: none;
            float: left;
        }

        ul.topnav li.topnav-right  {
            float: right;
        }

        ul.topnav li a {
            display: block;
            text-decoration: none;
            min-height: 16px;
            text-align: center;
            padding: 14px;
            text-transform: uppercase;
            font-family: 'arcade', sans-serif;
            color:white;
            font-size: 25px;
        }

        ul.topnav li a:hover {
            color: yellow;
        } 

        ul.topnav li.dropdownIcon {
            display:none;

        }

        /* ############# Custom Styles ########## */


        /*################################### HOME PAGE################################################ */
        #game-back {
            background-image: url("images/homeintroback.gif");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-bottom: yellow solid 2px;
            padding-bottom: 150px;
        }

        .homeLogo {
            text-align: center;

        }

        @keyframes pulse {
            from { transform: scale(1);}
            50% { transform: scale(0.85);}
            to { transform: scale(1)}
        }

        .homeLogo img {
            animation: pulse;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }

        .homeLogo img:hover,
        .homeLogo img:focus {

            cursor: pointer;
        }

        .greeting {
            background-position-y: top;
            color: white;
            font-size: 90px;
            animation: slide;
        }



        .icon {
            width: 100%;

        }


        .box {
            text-align: center;
            margin: 14px;
            padding: 26px 14px 30px 14px;
            background-color: rgba(0, 0, 0, 0.653);
            border-radius: 7px;
            box-shadow: 0 0 0 1px yellow,
                0 1px 3px 0 yellow;
        }

        .desc {
            color: white;
            font-family: 'game', sans-serif;
            font-size: 40px;
            font-weight: 100;
        }

        /* #########################################ABOUT PAGE################################# */
        #section1-background {
            background-image: url("images/homeintroback.gif");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


        .intro-box {
            text-align: center;
            margin: 64px;
            padding: 16px 24px 0px 24px;
            background-color:rgba(0, 0, 0, 0.639);
        }

        .aboutTitle {
            font-size: 40px;
            color: white;
        }

        .aboutLogo img {
            width: 300px;
            height: 300px;
        }


        h1.section2Header {
            padding-top: 10px;
            margin: 0px;
            font-size: 55px;
            text-align: center;
            font-family: 'arcade', sans-serif;
            line-height: 70px;
            color: #ffffff;
            background-color: #1A2833;

        }


        .submit-button input{
            border: 2px solid #1BADD6;
            border-radius: 7px;
            background-color: #1A2833;
            font-family: 'arcade', sans-serif;
            color: #1BADD6;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            padding-top: 3px;
            padding-bottom: 5px;
            padding-left: 15px;
            padding-right: 15px;
            font-size: 20px;
        }


        .submit-button input:hover{
            background-color:#1A2833;
            border: 2px solid rgb(255, 255, 255);
            color: rgb(255, 255, 255);
        }


        .name-field h2 {
            text-align: center;
            font-family: 'arcade', sans-serif;
            color: #1BADD6;
            margin: 0;
            line-height: 70px;
            text-shadow: 3px 3px 3px black;
        }



        form {
            text-align: center;
        }

        input[type=text] {
            font-size: 20px;
            font-family: 'arcade', sans-serif;
        }

        input[type=email] {
            font-size: 20px;
            font-family: 'arcade', sans-serif;
        }

        textarea {
            font-size: 20px;
        }



        /* ###################FOOTER AREA############## */

        .footerTop {
            margin: 0px;
            padding: 0px;
            color: black;
            border: 1px solid yellow;
        }

        #sticky-footer {
            position: fixed;
            left: 0px;
            bottom: 0px;
            height: 50px;
            width: 100%;
            background: black;
        }

        footer .comName {
            padding-top: 8px;
            padding-left: 20px;
            float: left;
        }

        footer h3 {
            font-family: 'game', sans-serif;
            font-size: 25px;
            margin: 0px;
            color: white;
            padding: 5px;
        }



        /* #####################################GLOBAL STYLES#######################3 */
        a { color: inherit; } 


        .defButton {
            text-align: center;
        }

        button.defaultButton {
            border: 1px solid #1BADD6;
            border-radius: 7px;
            background-color: #1A2833;
            font-family: 'arcade', sans-serif;
            color: #1BADD6;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            padding: 10px;
            font-size: 20px;
        }

        button.defaultButton:hover {
            background-color: #1A2833;
            border: 1px solid rgb(255, 255, 255);
            color: rgb(255, 255, 255);
        }

        .gamebutton {
            display: flex;
            justify-content: center;
        }

        p {
            text-shadow: 1px 2px 3px black;
        }




        /* ####### Mobile ############# */

        @media screen and (max-width: 680px) {
            ul.topnav li:not(:nth-child(1)) {
                display: none;
            }

            ul.topnav li.dropdownIcon {
                display: block;
                float: right;
            }

            ul.topnav.responsive li.dropdownIcon {
                position: absolute;
                top: 0;
                right: 0;
            }

            ul.topnav.responive {
                position: relative;
            }

            ul.topnav.responsive li {
                display: inline;
                float: none;
            }

            ul.topnav.responsive li a {
                display: block;
                text-align: left;
            }

            .col-4, .col-7, .col-6, .col-5 {
                width: 100%;
                margin: 0;
            }

            div.logo img {
                width: 100%;
                margin: 90px;
                width: 300px;
                height: 300px;
            }

            article p {
                font-size: 25px;
            }

            #the-projects img{
                float: none;
            }

            input[type="text"] {
                width: 350px;
            }

            input[type="email"] {
                width: 350px;
            }

            textarea {
                width: 350px;
            }
        }
    </style>
    <link rel="icon" href="#">
</head> 
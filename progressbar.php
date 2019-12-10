<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://file.myfontastic.com/mhAQBEMwFowTXqccZ6VfgX/icons.css" rel="stylesheet">
        <style>
            * {
                padding: 0;
                margin: 0;
                font-family: Arial;
                /*border: thin solid red;*/
            }


            .progress-bar-wrapper {
                width: 100%;
                background: #ffffff;
                margin: auto;
                padding: 20px;
                border-radius: 5px;
                
            }

            .progress-bar-1 {
                overflow: hidden;
                text-align: center;
                list-style-type: none!important;
            }

            .progress-bar-1 li {
                float: left;
                font-size: 20px;
                line-height: 30px;
                width: 20%;
                position: relative;
                z-index: 1;
                list-style-type: none!important;
            }

            .progress-bar-1 li:before {
                content: "5";
                font-family: dreamspace;
                display: block;
                font-size: 20px;
                line-height: 24px;
                color: #d5dbdb;
                background: #ffffff;
                width: 90px;
                height: 70px;
                /*padding-top: 10px;*/
                border-radius: 50%;
                margin: 0px auto;
                padding-top: 15px;
                border: 2px #d5dbdb solid;
            }

            .progress-bar-1 li:after {
                content: "";
                width: 100%;
                height: 2px;
                background: #d5dbdb;
                position: absolute;
                margin: auto;
                left: 50%;
                top: 40px;
                z-index: -1;
            }

            .progress-bar-1 li:last-child:after {
                display: none;
            }


            /* SIGNUP PAGE 1 */

            .signup-1 .progress-bar-1 li:first-child:before {
                color: #2f89fc;
                border-color: #2f89fc;
            }
            

            /* SIGNUP PAGE 2 */

            .signup-2 .progress-bar-1 li:nth-child(2):before {
                color: #2f89fc;
                border-color: #2f89fc;
            }

            .signup-2 .progress-bar-1 li:first-child:before {
                content: "1";
            }

            .signup-2 .progress-bar-1 li:first-child:after {
                background: #2f89fc;
            }


            /* SIGNUP PAGE 3 */

            .signup-3 .progress-bar-1 li:nth-child(3):before {
                color: #2f89fc;
                border-color: #2f89fc;
            }

            .signup-3 .progress-bar-1 li:nth-child(2):before {
                content: "2";
            }

            .signup-3 .progress-bar-1 li:nth-child(2):after {
                background: #2f89fc;
            }


            /* SIGNUP PAGE 4 */

            .signup-4 .progress-bar-1 li:nth-child(4):before {
                color: #2f89fc;
                border-color: #2f89fc;
            }

            .signup-4 .progress-bar-1 li:nth-child(3):before {
                content: "3";
            }

            .signup-4 .progress-bar-1 li:nth-child(3):after {
                background: #2f89fc;
            }
            /* SIGNUP PAGE 5 */
            .signup-5 .progress-bar-1 li:nth-child(5):before {
                color: #2f89fc;
                border-color: #2f89fc;
            }

            .signup-5 .progress-bar-1 li:nth-child(4):before {
                content: "4";
            }

            .signup-5 .progress-bar-1 li:nth-child(4):after {
                background: #2f89fc;
            }
            @media screen and (max-width: 600px) {
                
            .progress-bar-1 li:before {
                content: "5";
                font-family: dreamspace;
                display: block;
                font-size: 15px;
                /*line-height: 24px;*/
                color: #d5dbdb;
                background: #ffffff;
                width: 30px;
                height: 30px;
                /*padding-top: 10px;*/
                border-radius: 50%;
                /*margin: 0px auto;*/
                padding-top: 0px;
                /*border: 2px #d5dbdb solid;*/
            }

            .progress-bar-1 li:after {
                content: "";
                width: 100%;
                height: 2px;
                background: #d5dbdb;
                position: absolute;
                margin: auto;
                left: 50%;
                top: 20px;
                z-index: -1;
                
            }
            .progress-bar-1 ul{
                margin: 0px!important;
            }
            .progress-bar-1 li {
                float: left;
                font-size: 12px;
                margin-top: 20px;
                /*line-height: 30px;*/
                width: 19%;
                height: 120px;
                word-wrap: break-word;
                position: relative;
                z-index: 1;
                /*border: thin solid black;*/
            }
            .progress-bar-wrapper {
                width: 100%!important;
                background: #ffffff;
                margin: 0px!important;
                padding: 0px!important;
                border-radius: 5px;
                
            }

            .signup-1{
                /*border: thin solid #00ff00;*/
            }
            }
        </style>

    </head>

    <body class="signup-1 signup-2 signup-3 signup-4 signup-5">
        <div class="progress-bar-wrapper">
            <ul class="progress-bar-1">
                <li>Choose Service</li>
                <li>Book Order</li>
                <li>Upload Documents</li>
                <li>Make Payment</li>
                <li>Relax & Enjoy</li>
            </ul>
        </div>
    </body>
</html>
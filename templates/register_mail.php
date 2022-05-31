<?php
	require("../url.php");
?>
<!doctype html>
<html>
<head>

    <title>Tech Sport Group</title>
    <meta charset="utf-8">

    <style type="text/css">
        CLIENT-SPECIFIC STYLES body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 30px 0px;
            width: 100% !important;
        }

        a {
            text-decoration: none !important;
        }

        @font-face {
            font-family: Product sans bold;
            src: url(fonts/Produc-Sans-Bold.ttf);
        }

        @font-face {
            font-family: Product sans;
            src: url(fonts/Product-Sans-Regular.ttf);
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .mimeStatusWarning {
            background-color: #ffffff !important;
        }

        .spk_card {
            height: 200px;
        }

        p,
        ul li {
            /*font-weight: 500;*/
        }

        p,
        h1 {
            margin-top: 10px !important;
            margin-bottom: 0 !important;
        }

        .mob-row {
            display: none;
        }

        .btn-start:hover {
            background-color: #002032 !important;
            border-color: #002032 !important;
        }

        ul.f-list {
            padding-inline-start: 0px;
            margin-top: 4px;
        }

        ul.f-list li {
            display: inline-block;
            margin-right: 10px;
            font-size: 16px;
            font-weight: 400;
            list-style-type: none;
        }

        ul.f-list li a {
            color: #626262;
            font-size: 14px;
        }

        ul.f-list li a:hover {
            text-decoration: underline !important;
        }


        /* MOBILE STYLES */
        @media screen and (max-width: 600px) {
            .dsk-row {
                display: none;
            }

            .mob-row {
                display: block !important;
            }

            .img-max {
                width: 100 px !important;
                height: auto !important;
            }


            .img-maxx {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
            }

            .img-spk {
                width: 200px !important;
                max-width: 200px !important;
                height: auto !important;
            }

            .max-width {
                max-width: 100% !important;
            }

            .f_left {
                float: left !important
            }

            .mobile-wrapper {
                width: 85% !important;
                max-width: 85% !important;
            }

            .mobile-padding {
                padding-left: 5% !important;
                padding-right: 5% !important;
            }

            .full-width {
                width: 100% !important;
            }

            .half-width {
                width: 50% !important;
            }

            .spk_card {
                height: auto;
                margin-bottom: 20px;
                padding: 20px 10px !important;
            }

            .mobile_h3 {
                font-size: 16px !important;
                margin-bottom: 10px !important;
            }

            .spk_card p {
                font-size: 14px !important;
                line-height: 25px important;
                margin-left: 0px !important;
                -webkit-margin-befor: 0 !important;
            }

            .mobile-p {
                font-size: 15px !important;
                line-height: 20px !important;
                text-align: left !important;
            }

            .small-text {
                font-size: 15px !important;
            }

            .mob_p {
                margin-bottom: 10px !important;
                margin-top: 0px !important;
            }

            .pad-10 {
                padding: 0px 10px !important;
            }

            .pad-20 {
                padding: 0px 10px !important;
            }

            /*==new css ==*/
            .mob-center {
                text-align: center !important;
            }

            .dsk-logo {
                display: none;
            }

            .mob-logo {
                display: inline !important;
            }

            .mob-td {
                width: 100%;
                padding-left: 0px !important;
                padding-right: 0px !important;
                float: left;
                text-align: center !important;
            }

            ul.f-list li {
                margin-bottom: 10px;
                margin-right: 5px;
                margin-left: 5px;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="margin: 0 !important; background-color: #f4f4f4;" bgcolor="#f4f4f4">
    <!--main table -->

    <table border="0" cellpadding="10" cellspacing="0" width="100%">

        <tr>
            <td align="center" valign="top" width="100%" style="padding: 10px 0 10px 0;" class="mobile-padding">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" class="full-width" bgcolor="ffffff" style="border-radius:0px;">
                    <td>

                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="20" class="full-width" bgcolor="#fff" style="border-radius:30px;">
                                    <tr>
                                        <td align="left">
                                            <table width="100%" align="center" cellspacing="0" cellpadding="20" class="full-width">

                                                <tr>

                                                    <td align="left" valign="top" style="padding: 0px 20px 0px 20px; text-align: center; 
												background-color: #fff; overflow: hidden;border-bottom: 1px solid #E2E2E2;">
                                                        <img style="width: 180px; margin-top:20px;margin-bottom:20px;" alt="" 
                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzNTYuNzcgOTQuMTciPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojMTU1NzYzO30uY2xzLTIsLmNscy00e2ZpbGw6I2ZmZjt9LmNscy0ze2ZpbGw6IzlkYzkzODt9LmNscy00e29wYWNpdHk6MC4yO308L3N0eWxlPjwvZGVmcz48ZyBpZD0iTGF5ZXJfMiIgZGF0YS1uYW1lPSJMYXllciAyIj48ZyBpZD0iTGF5ZXJfMS0yIiBkYXRhLW5hbWU9IkxheWVyIDEiPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTEyMC42OSw1OWwuMDYtMzEuMjMtMTEuMjUsMFYyNC45NGEzLjk0LDMuOTQsMCwwLDEsNC00bDI2LjI2LjA1djYuNzNsLTExLjE1LDBMMTI4LjUzLDU5WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTE2MS41Myw1MGw1LjUyLDBhMTIuMTIsMTIuMTIsMCwwLDEtNC42NSw3LDE0LDE0LDAsMCwxLTguNjEsMi41MnEtNi4yOCwwLTkuODEtNC4xdC0zLjUxLTExLjM3cTAtNy4wNiwzLjQ0LTExVDE1My43NCwyOXE2LjYyLDAsMTAuMjUsNHQzLjUxLDExLjM3djEuMjFhMS43MiwxLjcyLDAsMCwxLS4xMi43N2wtMTkuMDgsMGE3LjYxLDcuNjEsMCwwLDAsMS42NCw1LjA4LDUuMjEsNS4yMSwwLDAsMCw0LjMsMS43Nyw2LjE5LDYuMTksMCwwLDAsMy4yLS43NywxLjUyLDEuNTIsMCwwLDAsLjYxLS4zOGwuNjEtLjYxYTIuMzksMi4zOSwwLDAsMSwuODMtLjg4QTMuMzUsMy4zNSwwLDAsMSwxNjEuNTMsNTBabS0xMy4yMi04LjYzLDExLjI1LDBBNy4xNCw3LjE0LDAsMCwwLDE1OCwzN2E1LjI4LDUuMjgsMCwwLDAtNC4wOC0xLjU1LDUuMzcsNS4zNywwLDAsMC00LDEuNTNBNi4zMiw2LjMyLDAsMCwwLDE0OC4zMSw0MS4zNFoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xODkuMTEsNTBoNS41MkExMi4wOSwxMi4wOSwwLDAsMSwxOTAsNTcuMDlhMTQsMTQsMCwwLDEtOC42MSwyLjUycS02LjI4LDAtOS44MS00LjF0LTMuNTEtMTEuMzdxMC03LjA2LDMuNDQtMTF0OS44My00LjA2cTYuNjIsMCwxMC4yNSw0YTE1LjI0LDE1LjI0LDAsMCwxLDIuODYsNS42M2gtNy43MmE2LjY5LDYuNjksMCwwLDAtMS4xLTEuNjYsNiw2LDAsMCwwLTguMDYsMHEtMiwyLjItMiw3LjI3YzAsMy4zOS42NSw1Ljc4LDIsNy4xOGE1LjE5LDUuMTksMCwwLDAsNC4zLDEuNzcsNi4zMiw2LjMyLDAsMCwwLDMuMi0uNzYsMS41MiwxLjUyLDAsMCwwLC42LS4zOWwuNjEtLjYxYTQuODUsNC44NSwwLDAsMSwuODktLjg4QTMsMywwLDAsMSwxODkuMTEsNTBaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjE0LjI5LDM4LjA1YTUuMjYsNS4yNiwwLDAsMC00LjUyLTIuMzMsNS41OSw1LjU5LDAsMCwwLTQuNzUsMi4yQTkuOTEsOS45MSwwLDAsMCwyMDMuMzYsNDRsMCwxNS4xMmgtNy41bC4wNy0zOGgzLjc1YTMuNzcsMy43NywwLDAsMSwzLjc0LDMuNzZ2OC43MUE4Ljc1LDguNzUsMCwwLDEsMjA5LDI5LjQzYTExLjE5LDExLjE5LDAsMCwxLDcsLjQ2LDEyLjM0LDEyLjM0LDAsMCwxLDUuMTgsNC4yYzEuMzksMS45MSwyLjA5LDQuNTYsMi4wOCw3Ljk1bDAsMTcuMS03LjM5LDAsMC0xNS4yMmExNS4wOCwxNS4wOCwwLDAsMC0uMjctM0E3LjQ4LDcuNDgsMCwwLDAsMjE0LjI5LDM4LjA1WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTIzNy4yMiw0Ny4zNmg3LjcyQTYuMDgsNi4wOCwwLDAsMCwyNDcuNDcsNTJhMTAuNSwxMC41LDAsMCwwLDYuMDcsMS41Niw5LjE3LDkuMTcsMCwwLDAsNS4xOS0xLjIxLDQsNCwwLDAsMCwxLjc3LTMuNTNxMC0zLjUzLTkuOTItNS43NWwtLjIyLS4xMS0uODgtLjIycS01LjYyLTEuMjMtNy41LTIuNTZhNi41Nyw2LjU3LDAsMCwxLTMuMDgtMy41MywxMC4zNiwxMC4zNiwwLDAsMS0xLjEtNS4wOCwxMC40MiwxMC40MiwwLDAsMSwzLjc3LTguNDlxMy43NS0zLDEwLjkzLTMsNi43MiwwLDEwLjM2LDMuMTFhMTIuMjQsMTIuMjQsMCwwLDEsNCw5SDI2Mi40YTMuNzYsMy43NiwwLDAsMS0zLjYzLTIuMzNBNS40NSw1LjQ1LDAsMCwwLDI1Ny4yMywyOGE5LjE0LDkuMTQsMCwwLDAtNS40MS0xLjQ1Yy0yLjIsMC0zLjc5LjQtNC43NCwxLjIxYTQsNCwwLDAsMC0xLjY2LDMuNDFxMCwzLDYuMzksNC40M2ExOC43LDE4LjcsMCwwLDAsMi43NS42NmMxLjMzLjQ1LDIuNDguOCwzLjQ4LDEuMDZsMi4zNy42MSwzLjA4LDEuMzNhOS42LDkuNiwwLDAsMSwzLjQyLDMuNDMsMTAuNzQsMTAuNzQsMCwwLDEsMS4yLDUuMDdjMCw0LTEuMzMsNy4wNi00LDkuMjdxLTQsMy4wOC0xMS4yNiwzLjA2LTcuNSwwLTExLjI0LTMuMjJRMjM3LjU0LDUzLjY2LDIzNy4yMiw0Ny4zNloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yNzcuMTIsNjYuM0EzLjc2LDMuNzYsMCwwLDEsMjczLjM3LDcwaC0zLjc1bC4wNS0yNy40N3EwLTcuNzMsNC41NC0xMC41M0ExOC4yLDE4LjIsMCwwLDEsMjg0LDI5LjI0YTE1LjgzLDE1LjgzLDAsMCwxLDUuNTcsMS4wNiwxMC4zMiwxMC4zMiwwLDAsMSw0LjQ3LDNxMy4zLDQuMywzLjI5LDExLDAsNi45NC0zLjM0LDExLjI1YTEwLjMyLDEwLjMyLDAsMCwxLTguNSw0LjE3LDExLjA2LDExLjA2LDAsMCwxLTQuODUtMSw4LjMsOC4zLDAsMCwxLTMuNTItMy40M1ptMTIuNjItMjEuNmExMS4yOCwxMS4yOCwwLDAsMC0xLjY0LTYuNjMsNS40OCw1LjQ4LDAsMCwwLTQuNzQtMi4zMiw1LjM0LDUuMzQsMCwwLDAtNC42NCwyLjMxYy0xLDEuMzktMS41NSwzLjYtMS41NSw2LjYxcTAsNC4yLDEuNjQsNi4yOWE1LjQ2LDUuNDYsMCwwLDAsNC43NCwyLjMzQTUuMjksNS4yOSwwLDAsMCwyODguMDgsNTEsMTAuNjMsMTAuNjMsMCwwLDAsMjg5Ljc0LDQ0LjdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMzAyLjMsNTYuNjNhMTAuOTEsMTAuOTEsMCwwLDEtMy4zLTUuMzUsMjQuMzgsMjQuMzgsMCwwLDEtMS03LDIxLjg4LDIxLjg4LDAsMCwxLC44NC02LDEyLjMsMTIuMywwLDAsMSwyLjYtNSwxMS40NSwxMS40NSwwLDAsMSw3LjQtMy45LDE3LjA3LDE3LjA3LDAsMCwxLDguMTYuNzMsMTEuMjgsMTEuMjgsMCwwLDEsNi4xNyw1Ljc1LDE4LjQ1LDE4LjQ1LDAsMCwxLDEuODYsOC41LDIxLjE0LDIxLjE0LDAsMCwxLS43OSw2LjA3LDE1LjQzLDE1LjQzLDAsMCwxLTIsNC4zLDExLjA4LDExLjA4LDAsMCwxLTYuNzQsNC41MSwxNS4xNSwxNS4xNSwwLDAsMS03LjMzLjE1QTEyLjgzLDEyLjgzLDAsMCwxLDMwMi4zLDU2LjYzWm01LjMzLTE5LjRjLTEuNTUsMS42OS0yLjI1LDQuMi0yLjExLDcuNTVzLjc2LDUuNjgsMS44Niw3YTQuODgsNC44OCwwLDAsMCwyLjMyLDEuNDksNS4yMiw1LjIyLDAsMCwwLDMuMzYuMTIsNS42NCw1LjY0LDAsMCwwLDMtMi40OGMuODgtMS4zMiwxLjM3LTMuNDUsMS40NS02LjM5YTExLjI3LDExLjI3LDAsMCwwLTEuMjYtNkE1Ljc3LDUuNzcsMCwwLDAsMzEzLjM3LDM2YTUuMzUsNS4zNSwwLDAsMC0zLjMxLS4wNkE1LjY4LDUuNjgsMCwwLDAsMzA3LjYzLDM3LjIzWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTMyNi4yMyw1OS4zM2wwLTE0LjI0YTE4LjI2LDE4LjI2LDAsMCwxLDEuMjgtNy4yMkExMS44NywxMS44NywwLDAsMSwzMzEsMzMuMTlhMTMuNiwxMy42LDAsMCwxLDQuOTEtMi40MiwyMS42LDIxLjYsMCwwLDEsNS43OS0uNzZoMS4xMWwwLDcuODNoLTIuNTNhNi40Niw2LjQ2LDAsMCwwLTQuNzUsMS41M1EzMzQsNDAuOTIsMzM0LDQ0LjIzbDAsMTUuMTFaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMzU2LjU3LDU5LjM4YTU4LjUsNTguNSwwLDAsMS03Ljg4LS4xMmMtMi44NC0uMjMtNC4yNS0yLTQuMjQtNS40MmwuMDYtMzIuNDNoNGEzLjc2LDMuNzYsMCwwLDEsMy42MywzLjc2djVoNC41M3YxLjU0YTMuNjIsMy42MiwwLDAsMS0xLjExLDIuNywzLjY3LDMuNjcsMCwwLDEtMi42NSwxaC0uNzdsMCwxNi4zM2MwLDEuMjUuNzMsMS44OCwyLjIsMS44OGgyLjMxWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI2Ni4xNiw4NS4xNWEyLjgyLDIuODIsMCwwLDEtMS4wOSwxLDQuMDYsNC4wNiwwLDAsMS00LjM4LTEsNS41Nyw1LjU3LDAsMCwxLDAtNi42MywzLjgyLDMuODIsMCwwLDEsMy0xLjI1LDQuNCw0LjQsMCwwLDEsMi42Ny43OCwzLjMxLDMuMzEsMCwwLDEsMS4yMywyLjE3aC0xLjIxYS44My44MywwLDAsMS0uNzgtLjQ4LDEuODgsMS44OCwwLDAsMC0uNTEtLjU1LDIuMjMsMi4yMywwLDAsMC0xLjMzLS4zNiwyLjExLDIuMTEsMCwwLDAtMS43Mi43OCwzLjU3LDMuNTcsMCwwLDAtLjYzLDIuMjIsMy40NywzLjQ3LDAsMCwwLC42NSwyLjIyLDIuMTcsMi4xNywwLDAsMCwxLjc5Ljc4LDIuMDgsMi4wOCwwLDAsMCwxLjQxLS40OEEyLjMsMi4zLDAsMCwwLDI2Niw4M0gyNjQuOWEuODcuODcsMCwwLDEtLjY0LS4yNy44Mi44MiwwLDAsMS0uMjYtLjY0di0uNThoMy42djQuNzJoLS40OGEuODQuODQsMCwwLDEtLjg4LS43MVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yNzguMjksODYuMjFsMC03Ljc2YS44OS44OSwwLDAsMSwuOTEtLjkxaC44OFY4NC42aDQuMjN2MS42MVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yOTQuNzgsODEuOWE0LjgyLDQuODIsMCwwLDEsMS4xMS0zLjM1LDQuMTIsNC4xMiwwLDAsMSwzLjEtMS4yMyw0LjIsNC4yLDAsMCwxLDMuMSwxLjI0LDQuODMsNC44MywwLDAsMSwxLjEzLDMuMzYsNC43LDQuNywwLDAsMS0xLjE0LDMuMzIsNC41Niw0LjU2LDAsMCwxLTYuMiwwQTQuNyw0LjcsMCwwLDEsMjk0Ljc4LDgxLjlabTEuNzksMGEzLjM2LDMuMzYsMCwwLDAsLjYyLDIuMjIsMi4xNywyLjE3LDAsMCwwLDEuNzkuNzgsMi4yMywyLjIzLDAsMCwwLDEuNzktLjc4LDMuMzcsMy4zNywwLDAsMCwuNjYtMi4yMSwzLjU4LDMuNTgsMCwwLDAtLjY1LTIuMjUsMi4yMSwyLjIxLDAsMCwwLTEuNzktLjc4LDIuMTQsMi4xNCwwLDAsMC0xLjc5Ljc3QTMuNTEsMy41MSwwLDAsMCwyOTYuNTcsODEuOTFaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMzEzLjk0LDg2LjI3Vjc4LjUxYS45Mi45MiwwLDAsMSwuOTEtLjkxSDMxOGEzLjI0LDMuMjQsMCwwLDEsMiwuNTYsMi4zLDIuMywwLDAsMSwuNDIsMi43NSwyLjA3LDIuMDcsMCwwLDEtLjc4LjY4LDIsMiwwLDAsMSwxLjMzLDIsMi40NCwyLjQ0LDAsMCwxLS44MSwyLDMuNiwzLjYsMCwwLDEtMi4zNS42OFptMS43MS0xLjU2aDIuMTJhMS44MSwxLjgxLDAsMCwwLDEuMDktLjI4LDEsMSwwLDAsMCwuMzUtLjg1LDEuMDgsMS4wOCwwLDAsMC0uMzUtLjg5LDEuODYsMS44NiwwLDAsMC0xLjExLS4yNWgtMi4wOVptMC0zLjc1aDJhMS42MiwxLjYyLDAsMCwwLDEtLjIyQS44My44MywwLDAsMCwzMTksODBhLjgxLjgxLDAsMCwwLS4zLS43LDEuNTksMS41OSwwLDAsMC0xLS4yMWgtMloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zMzUuNDcsNzcuNjRoMS40MUwzNDAsODYuMzJoLTEuODlsLS41Ny0xLjc5aC0zLjM4bC0uNTYsMS43OWgtMS44OWwyLjg5LTguMDlBLjg1Ljg1LDAsMCwxLDMzNS40Nyw3Ny42NFptLjQsMS43NC0xLjIyLDMuNjhoMi40MloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zNTAuNzQsODYuMzRWNzguNThhLjg1Ljg1LDAsMCwxLC4yNy0uNjQuODcuODcsMCwwLDEsLjY0LS4yN2guODh2Ny4wNmg0LjI0djEuNjFaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNOTEuNDMsMjMuNzRsLTQsMzcuNzFBMTMuMDgsMTMuMDgsMCwwLDEsODIsNzAuNzVMNTEuNTcsOTIuNDNhOS40Myw5LjQzLDAsMCwxLTUuOTMsMS43Myw5LjMyLDkuMzIsMCwwLDEtNC45LTEuNjZsLTktNi4yNUw4LjUsNzAuMjJhMTMuMDUsMTMuMDUsMCwwLDEtNS42Mi05Ljc5TDAsMjIuMzJBMTMuMDgsMTMuMDgsMCwwLDEsOS44Myw4LjY2bDMyLTguMjVhMTMuMDksMTMuMDksMCwwLDEsNi43OC4wN0w1NywyLjhsMjUsNi45NEExMy4xLDEzLjEsMCwwLDEsOTEuNDMsMjMuNzRaIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNNDMsNjcuMzlhOC40OSw4LjQ5LDAsMCwxLDcuNzMtOC43NGMyLjg2LS4zMiw1Ljc4LS4xNyw4LjY3LS4yMXM0LjMzLTEuMjMsNC4zOS0zLjMzLTEuNjMtMy41LTQuNDUtMy41MmMtMi40NSwwLTQuOSwwLTcuMzQsMGExMi4zOCwxMi4zOCwwLDAsMS0xMi4wNS0xMmMtLjI4LTYuMzcsNC41MS0xMi4zNCwxMC44OS0xMi43Niw2LjA1LS40LDEyLjE1LS4wOSwxOC4yMS0uMDkuNTgsNC4zNS0zLjIsOC41OC04LDguODUtMi41OS4xNS01LjE5LDAtNy43OS4wNlM0OSwzNyw0OSwzOS4xNHMxLjUzLDMuNDMsNC4yNiwzLjQ2YzIuMzcsMCw0Ljc1LDAsNy4xMiwwQTEyLjM4LDEyLjM4LDAsMCwxLDcyLjc1LDU0LjI0Yy4zNSw2Ljc0LTQuMiwxMi41NS0xMSwxMy4wNUM1NS41OSw2Ny43NSw0OS4zNCw2Ny4zOSw0Myw2Ny4zOVoiLz48cGF0aCBjbGFzcz0iY2xzLTMiIGQ9Ik0yNiw1My42OXYtMThIMTIuNjJhOC41Myw4LjUzLDAsMCwxLDguMDctOC45M2M2LjU4LS4yLDEzLjE2LS4wNSwyMC40NS0uMDVDMzUuNTYsMjkuNDcsMzQuNzYsMzQsMzUsMzguOTRhNDYuNzIsNDYuNzIsMCwwLDEsMCw1LjU1QTkuOCw5LjgsMCwwLDEsMjYsNTMuNjlaIi8+PHBhdGggY2xhc3M9ImNscy00IiBkPSJNOTEuNDMsMjMuNzRsLTQsMzcuNzFBMTMuMDgsMTMuMDgsMCwwLDEsODIsNzAuNzVMNTEuNTcsOTIuNDNhOS40Myw5LjQzLDAsMCwxLTUuOTMsMS43Myw5LjMyLDkuMzIsMCwwLDEtNC45LTEuNjZsLTktNi4yNUw1NywyLjhsMjUsNi45NEExMy4xLDEzLjEsMCwwLDEsOTEuNDMsMjMuNzRaIi8+PC9nPjwvZz48L3N2Zz4=">
                                                    </td>

                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="full-width" bgcolor="#fff" style="margin-bottom:60px;">
                                    <tr>
                                        <td align="left">
                                            <table width="100%" align="center" cellspacing="0" cellpadding="20" class="full-width">

                                                <tr>

                                                    <td class="mobile-p" align="left" style="padding:0px 40px 0px 40px; 
													font-family: 'Product sans bold;line-height: 1.5;">
                                                        <h1 style="text-align:left; font-weight:700; font-size:20px;color: #2AD588;font-family: 'Product sans bold', sans-serif;">
                                                            <span style="font-weight:500;">Registration Request</span>
                                                        </h1>
                                                        <p class="mobile-p" align="left" style="font-weight: 400; margin-top:20px !important;
														margin-bottom: 10px !important;font-size: 16px; color: #000;font-family: 'Product sans', sans-serif;">
                                                            <b>Full Name:</b> {{f_name}} {{l_name}}
                                                        </p>

                                                        <p class="mobile-p" align="left" style="font-weight: 400; margin-top:10px !important;
														margin-bottom: 10px !important;font-size: 16px; color: #000;font-family: 'Product sans', sans-serif;">
                                                            <b>Email:</b> {{email}}
                                                        </p>
                                                        <p class="mobile-p" align="left" style="font-weight: 400; margin-top:15px;
														margin-bottom: 10px !important;font-size: 16px; color: #000;font-family: 'Product sans', sans-serif;">
                                                            <b>Phone:</b> {{phone}}
                                                        </p>
                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="full-width" bgcolor="#fff">
                                    <tr>
                                        <td align="left">
                                            <table width="100%" align="center" cellspacing="0" cellpadding="20" class="full-width">

                                                <tr>

                                                    <td class="mobile-p" align="center" style="padding:20px 40px 40px 40px; 
													font-family: 'Roboto', sans-serif;line-height: 1.5; font-weight:300;">
                                                        <p class="mobile-p" align="center" style="font-weight: 400; margin-top:5px;
														margin-bottom: 10px !important;font-size: 16px; color: #626262;font-family: 'Product sans', sans-serif;">
                                                            Regards, <br>
                                                            Tech Sport Group
                                                        </p>
                                                    </td>

                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="full-width" bgcolor="#fff">
                                    <tr>
                                        <td align="left">
                                            <table width="100%" align="center" cellspacing="0" cellpadding="0" class="full-width">

                                                <tr>

                                                    <td class="mobile-p" align="left" style="padding:0px 40px 0px 40px; 
													font-family: 
													verdana, sans-serif;line-height: 1.5; font-weight:400;">
                                                        <hr style="border-color: #DBDBDB;margin-block-end: 0px;
															margin-block-start: 0px;border:1px solid #dbdbdb;border-bottom: none;">
                                                    </td>

                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!--footer yaha say start ho raha ha ur sara footer new ha-->
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="full-width" bgcolor="#fff" style="border-radius:30px;">
                                    <tr>
                                        <td align="left">
                                            <table width="100%" align="center" cellspacing="0" cellpadding="20" class="full-width">

                                                <tr>

                                                    <td align="center" height="100%" valign="top" width="100%" class="mobile-padding" style="padding:0px;">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" class="full-width">
                                                            <tr>
                                                                <td class="mobile-p mob-td" align="left" style="padding:10px 40px 0px 40px; font-family: 'Product sans', sans-serif;line-height: 1.5; font-weight:400;font-size:14px;">
                                                                    <ul class="f-list">
                                                                        <li>
                                                                            <a style="color: #91288F" href="http://techsport-group.com">
                                                                                www.techsport-group.com
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                                <td class="mobile-p mob-td" align="right" style="padding:10px 40px 0px 40px; font-family: 'Roboto', sans-serif;line-height: 1.5; font-weight:400;">
                                                                    <a href="https://twitter.com/motoindexhq"
                                                                        style="margin-right:5px;">
                                                                        <img src="<?php echo $url ?>templates/twitter.png" alt="twitter">
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="mobile-p mob-td" align="left" style="padding:10px 40px 0px 40px; font-family: 'Roboto', sans-serif;line-height: 1.5; font-weight:400;">
                                                                    <p class="mobile-p" align="left" style="font-weight: 400;
																			margin-bottom: 5px !important;font-size: 14px; color: #626262;font-family: 'Product sans', sans-serif;">
                                                                        See our reviews on
                                                                    </p>
                                                                    <a href="https://www.trustpilot.com/review/moto-index.com" style="margin-right:5px;">
                                                                    <img src="<?php echo $url ?>templates/trustpilot.png" alt="trust pilot">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="mobile-p mob-td" align="left" style="padding:10px 40px 0px 40px; font-family: 'Product sans', sans-serif;line-height: 1.5; font-weight:400;font-size:14px;">
                                                                    <p class="mobile-p" align="left" style="font-weight: 400; margin-top:15px;
																			margin-bottom: 10px !important;font-size: 14px; color: #626262;font-family: 'Product sans', sans-serif;">
                                                                        This email and any attachments to it are confidential and intended solely for the person to whom they are addressed. They may contain legally privileged information. If you have received this in error, please delete this message and let us know by emailing hello@techsport-group.com. The messaging system from which this e-mail was sent is checked regularly for viruses. No liability is accepted for any viruses which may be transmitted in or with this e-mail from Tech Sport Group.
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </td>

                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!--footer yaha pe end ho rha ha-->

                        <tr>
                            <td align="center">

                                <table width="100%" border="0" cellspacing="20" cellpadding="0">
                                    <tr>
                                        <td align="center" style="padding: 10px 20px 10px 20px;">



                                        </td>
                                    </tr>

                                </table>

                            </td>
                        </tr>

                    </td>
                    <!--Main td-->
                </table>
            </td>
        </tr>

    </table>

</body>

</html>
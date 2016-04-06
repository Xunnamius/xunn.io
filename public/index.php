<!DOCTYPE html>
<html>
    <head>
        <title>Divinus Xunnamius</title>
        <style>
            html, body  {
                height: 100%;
                width: 100%;
                margin: 0;
            }

            body {
                background-image: url('bg.png');
                background-size: cover;
                font-family: sans-serif;
                color: #909090;
                font-variant: small-caps;
            }

            img {
                text-align: center;
            }

            #cover1 {
                width: 100%;
                height: 100%;
                background-color: black;
                opacity: 0.7;
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
            }

            h1 {
                text-align: center;
                margin-top: 50vh;
            }

            ul {
                list-style-type: none;
                text-align: center;
            }

            ul li {
                display: inline;
                text-transform: lowercase;
            }

            ul li:after {
                content: ' _ ';
                color: white;
            }

            ul li:last-child:after {
                content: '';
                padding-right: 30px;
            }

            a {
                color: #C0C0C0;
                text-decoration: none;
            }

            a:hover {
                color: #909090;
            }
        </style>
    </head>
    <body>
        <div id="cover1"></div>
        <h1>what you seek is coming soon</h1>
        <ul>
            <li><a href="https://ergodark.com">ErgoDark LLC</a></li>
            <li><a href="https://deepcode.io">Deepcode Blog</a></li>
            <li><a href="https://bernarddickens.com">Portfolio</a></li>
        </ul>
    </body>
</html>

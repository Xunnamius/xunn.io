<!DOCTYPE html>
<html>
    <head>
        <title>The Playground of Xunnamius</title>
        <style>
            html, body  {
                height: 100%;
                width: 100%;
                margin: 0;
            }

            body {
                background-image: url('bg.png');
                background-size: cover;
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
            }

            h1 {
                text-align: center;
                margin-top: 50vh;
                color: #909090;
                position: relative;
                font-family: sans-serif;
                font-variant: small-caps;
            }

            ul {
                list-style-type: none;
            }

            ul li {
                display: inline;
            }

            ul li:not(li:last-child):after {
                content: ' | ';
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

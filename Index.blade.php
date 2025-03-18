<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                background-color:rgb(151, 151, 151);
            }
            .container {
                width: 65%;
                margin: 150px auto;
                overflow: hidden;
                padding: 40px;
                background-color: rgb(172, 172, 172);
                box-shadow: 0 0 500px rgb(0, 0, 0);
                border-radius: 55px;
                position: relative;
            }
            h1, h2, h3, h4, h5, h6{
                color: #646464;
                margin: 20px 0;
                text-align: left;
                font-family: 'Times New Roman', Times, serif;
            }
            p {
                margin: 10px 0;
                color: #666;
            }
            .main {
                font-size: 30px;
                text-align: center;
                padding: 5px;
                border-radius: 5px;
                color:  #646464;
            }
            .clock {
                font-size: 24px;
                text-align: left;
                margin-top: 20px;
                color: rgb(255, 255, 255);
                border: 2px solid rgb(255, 255, 255);
                padding: 10px;
                display: inline-block;
                border-radius: 5px;
            }

        </style>
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body>
        <div class="clock" id="clock"></div>
        <div class="container">
            <p class="main">Box</p>
        <script data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" async defer src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Google AdSense Ad Unit -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-XXXXXXXXXXXXXXXX"
                 data-ad-slot="XXXXXXXXXX"
                 data-ad-format="auto"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js" defer></script>
        <script>
            function updateClock() {
                var now = new Date();
                var hours = now.getHours();
                var minutes = now.getMinutes();
                var seconds = now.getSeconds();
                var ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;
                var strTime = `${hours}:${minutes}:${seconds} ${ampm}`;
                document.getElementById('clock').innerHTML = strTime;
            }
            var clockInterval = setInterval(updateClock, 1000);
            window.addEventListener('beforeunload', function() {
                clearInterval(clockInterval);
            });
            updateClock();
        </script>
    </body>
</html>
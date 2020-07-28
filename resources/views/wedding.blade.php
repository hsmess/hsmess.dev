<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Harry Messenger</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />

        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/hls.js@0.8.2"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <video id="myVideo" controls></video>
            </div>
        </div>
        <!-- Use HLS.js to support the HLS format in browsers. -->
        <script>
            (function(){
                // Replace with your asset's playback ID
                var playbackId = "{{config('env.playback_id')}}";
                var url = "https://stream.mux.com/"+playbackId+".m3u8";
                var video = document.getElementById("myVideo");

                // Let native HLS support handle it if possible
                if (video.canPlayType('application/vnd.apple.mpegurl')) {
                    video.src = url;
                } else if (Hls.isSupported()) {
                    // HLS.js-specific setup code
                    hls = new Hls();
                    hls.loadSource(url);
                    hls.attachMedia(video);
                }
            })();
        </script>
        <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
    </body>
</html>

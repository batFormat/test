<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        </meta>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        </meta>
        <title>
            Тестовое задание Кот
        </title>
        <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" rel="stylesheet"/>
        <link href="public/css/main.css" rel="stylesheet" type="text/css">
        </link>
         <script type="text/javascript">var NREUMQ = NREUMQ || [];
            NREUMQ.push(["mark", "firstbyte", new Date().getTime()]);</script>
    </head>
    <body>
        <div class="container">
            <h1>
                Выбор города:
            </h1>
            <div class="form-group" id="city">
                <select class="form-control" id="selectCity" name="city">
                </select>
            </div>
            <div class="form-group" id="street">
                <select class="form-control" id="selectStreet" name="street">
                </select>
            </div>
            <div id="street_result">
                <img src="/public/images/ajax-loader.gif">
                </img>
            </div>
            <h1>
                Справка о городах:
            </h1>
            <div id="menu">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="city-link" href="#city1" id="1">
                            Вологда
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="city-link" href="#city2" id="2">
                            Череповец
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="city-link" href="#city3" id="3">
                            Великий устюг
                        </a>
                    </li>
                </ul>
            </div>
            <blockquote class="blockquote">
                <p class="m-b-0" id="city_info_result">
                </p>
            </blockquote>
            <div>
            </div>
            <div id="map" style="width: 100%; height: 300px">
            </div>
        </div>
        <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
        </script>
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
        </script>
        <script async="" src="public/js/map.js">
        </script>
        <script async="" src="public/js/main.js">
        </script>
        <script type="text/javascript">if (!NREUMQ.f) {
            NREUMQ.f = function () {
                NREUMQ.push(["load", new Date().getTime()]);
                var e = document.createElement("script");
                e.type = "text/javascript";
                e.src = (("http:" === document.location.protocol) ? "http:" : "https:") + "//" + "js-agent.newrelic.com/nr-100.js";
                document.body.appendChild(e);
                if (NREUMQ.a)NREUMQ.a();
            };
            NREUMQ.a = window.onload;
            window.onload = NREUMQ.f;
        }
        ;
        NREUMQ.push(["nrfj", "bam.nr-data.net", "b2b9e5d9c2", "2779938", "MVMDZRRVWENQVEQPWAgZNEMPG0JVQkMfElIVQgpeEhtfXlVSSEhHDkY=", 0, 0, new Date().getTime(), "", "", "", "", ""]);</script>
        <script type="text/javascript" src="http://js-agent.newrelic.com/nr-100.js"></script>
        <script type="text/javascript"
                src="http://bam.nr-data.net/1/b2b9e5d9c2?a=2779938&amp;be=361&amp;qt=0&amp;ap=0&amp;dc=29&amp;fe=149&amp;to=MVMDZRRVWENQVEQPWAgZNEMPG0JVQkMfElIVQgpeEhtfXlVSSEhHDkY%3D&amp;v=42&amp;jsonp=NREUM.setToken&amp;perf=%7B%22timing%22%3A%7B%22of%22%3A1474116175362%2C%20%22n%22%3A0%2C%20%22dl%22%3A322%2C%20%22di%22%3A390%2C%20%22ds%22%3A390%2C%20%22de%22%3A390%2C%20%22dc%22%3A510%2C%20%22l%22%3A510%2C%20%22le%22%3A511%2C%20%22r%22%3A92%2C%20%22re%22%3A237%2C%20%22f%22%3A237%2C%20%22dn%22%3A237%2C%20%22dne%22%3A237%2C%20%22c%22%3A237%2C%20%22ce%22%3A237%2C%20%22rq%22%3A238%2C%20%22rp%22%3A318%2C%20%22rpe%22%3A320%7D%2C%20%22navigation%22%3A%7B%22rc%22%3A1%7D%7D"></script>
    </body>
</html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Тестовое задание</title>
    <style type="text/css">
        <!--
        select {
            width: 270px;
        }

        #street_result {
            margin: 10px 0;
        }

        #menu ul li {
            float: left;
            display: inline;
            margin-right: 20px;
        }

        -->
    </style>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
            integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
</head>

<body>
<h1>Выбор города:</h1>
<div id="city">
    <select name="city">
        <option value="1">Вологда</option>
        <option value="2">Череповец</option>
        <option value="3">Великий устюг</option>
    </select>
</div>
<div id="street_result"><img src="public/images/ajax-loader.gif"></div>

<h1>Справка о городах:</h1>
<div id="menu">
    <ul>
        <li><a href="#city1">Вологда</a></li>
        <li><a href="#city2">Череповец</a></li>
        <li><a href="#city3">Великий устюг</a></li>
    </ul>
</div>
<div id="city_info_result"></div>
</body>
</html>
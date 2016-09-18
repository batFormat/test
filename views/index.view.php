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
    <select id="selectCity" name="city">
        <option value="">Выберите город</option>
        <?php foreach ($cities as $city): ?>
            <option value="<?=$city->id?>"><?=$city->name?></option>
        <?php endforeach; ?>
    </select>
</div>

<div id="street">
    <select name="street" id="selectStreet"></select>
</div>
</select>

<div id="street_result">
     <img src="/public/images/ajax-loader.gif">
</div>
<h1>Справка о городах:</h1>
<div id="menu">
    <ul>
     <?php foreach ($cities as $city): ?>
            <li><a class="link" href="#city<?=$city->id?>"><?=$city->name?></a></li>
     <?php endforeach; ?>
    </ul>
</div>
<div id="city_info_result"></div>
<script type="text/javascript">
'use strict';
 $(document).ready(function(){

    $('#street').hide();
    $('#street_result').hide();

    $('#selectCity').on('change',function(){

        var cityID = $(this).val();
        if(cityID){
            $.ajax({
                type:'POST',
                url:'/city',
                data:'cityId='+cityID,
                success:function(html){
                    $('#selectStreet').html(html);
                },
                beforeSend: function() {
                  $('#street_result').show();
                },
                complete: function(){
                    $('#street').show();
                    $('#street_result').hide();
                },
            }); 
        }
    });
    
    $('#street').on('change',function(){
        // var streetID = $(this).val();
        if(streetID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'street_id='+streetID
            }); 
        }
    });


    $('a.link').click(function(res){
      console.log('click link');
      var link = res.currentTarget.hash;

       switch(link) {
          case '#city1':
            console.log('Линк 1 ');
            break;

          case '#city2':
            console.log('Линк 2 ');
            break;

            case '#city3': 
                console.log('Линк 3 ');
            break;
        }
        return false;
    });
 
});
</script>
</body>
</html>
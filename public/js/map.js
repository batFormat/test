   var myMap;
   $(document).ready(function() {
       ymaps.ready().done(function(ym) {
           myMap = new ym.Map('map', {
               center: [60.138988, 44.049618],
               zoom: 10
           });
       });
   });
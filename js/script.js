    /*<script>
        var chart = AmCharts.makeChart( "chartdiv", {
            "type": "serial",
            "dataLoader": {
            "url": "testConBD.php"
    },
    "pathToImages": "http://www.amcharts.com/lib/images/",
    "categoryField": "data",
    "dataDateFormat": "YYYY-MM-DD",
    "startDuration": 1,

    "categoryAxis": {
      "parseDates": true
    },

    "graphs": [ {
      "valueField": "summa",
      "bullet": "round",
      "bulletBorderColor": "#FFFFFF",
      "bulletBorderThickness": 2,
      "lineThickness ": 2,
      "lineAlpha": 0.5
    } ]
      } );
    </script>
*/
    // Во-первых, давайте загрузим библиотеку jQuery и запустим функцию, когда документ уже готов (когда DOM уже загружен)
    $(document).ready(function() {

        var hash = window.location.hash.substr(1);
        var href = $('#nav li a').each(function () {
            var href = $(this).attr('href');
            if (hash == href.substr(0, href.length - 5)) {
                var toLoad = hash + '.html #content';
                $('#content').load(toLoad)
            }
        });

        $(function () {
                $('#menu').load('./menu.html')
            })


        $(function  () {
            $('p').css('color','red');
        });

        $.ajax({
            url: "connect_BD.php",
         //     type: 'POST',
         //     data: {"Name":""},
         //     dataType: 'json',
         //    contentType: 'application/json',
         //     json: true
         // }).done(function(data){
         //     console.log(data);
         // }).always(function(dataError){
         //     console.log(dataError);
            success: function(data{ alert("<pre>"+ data+") </pre>"); }
        });


        /*$('#nav li a').click(function () {

            var toLoad = $(this).attr('href') + ' #content';
            $('#content').hide('fast', loadContent);
            $('#load').remove();
            $('#wrapper').append('<span id="load">LOADING...</span>');
            $('#load').fadeIn('normal');
            window.location.hash = $(this).attr('href').substr(0, $(this).attr('href').length - 5);
            function loadContent() {
                $('#content').load(toLoad, '', showNewContent())
            }

            function showNewContent() {
                $('#content').show('normal', hideLoader());
            }

            function hideLoader() {
                $('#load').fadeOut('normal');
            }

            return false;*/


    });


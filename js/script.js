    
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
        // ** Загрузка МЕНЮ**//
        $(function () {
                $('#menu').load('./menu.html')
            return false;
            })




        $.ajax({
            type : 'POST',
            url : 'connect_BD.php',
            success: function(data){
                $('#content').
                console.log(data);
            },
        });

    })
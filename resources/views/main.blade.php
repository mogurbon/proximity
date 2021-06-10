<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH-EmKWcQtwUGHlUSfL9O4PtToZ8qupE&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<div id="app">

    <header>


    </header>
    <content>
        <input type="text" id="search"> <input type="button" value="Search" id="buttonsearch">


        <div id="showstore">

        </div>
    </content>

    <footer></footer>
</div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>

{{--AIzaSyBPH-EmKWcQtwUGHlUSfL9O4PtToZ8qupE--}}

<script>

    $( document ).ready(function() {

        $( "#buttonsearch" ).click(function() {

            $("#showstore").html('');

            if ($("#search").val().length > 1){

                $.ajax({
                    method: "get",
                    url: "stores/"+$("#search").val(),
                   // data: { data: $("#search").val() }
                })
                    .done(function( res ) {
                        let stores = res;
                        let shst ='';

                        if (stores.length > 0){
                            shst += '<table>';
                            shst += '<tr>';
                            shst += '<th>Name</th>';
                            shst += '<th>City</th>';
                            shst += '<th>State</th>';
                            shst += '</tr>';

                            for (var i = 0; i < stores.length; i++) {
                                shst += '<tr>';
                                shst += '<td>' + stores[i].name + '</td>';
                                shst += '<td>' + stores[i].city + '</td>';
                                shst += '<td>' + stores[i].state + '</td>';
                                shst += '</tr>';


                            }
                            shst += '</table>';

                        }
                        else {
                            shst += '<p>No Results </p>';
                        }
                        $("#showstore").html(shst);
                });
            }
            else {
                alert( "Too Short input ");
            }

        });




    });




</script>


</html>

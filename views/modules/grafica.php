<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="views/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"> </script>
    <title>Gráfica</title>
</head>
<body>

<div class="container pb-5">
    <canvas id="myChart" style="width:100%; max-width:1000px; height: 500px;">
    </canvas>
</div>

</body>

    <script>
        $(document).ready(function(){
            $.ajax({
                url: "/models/order_graphic.php",
                dataType: 'json',
                contentType: "application/json; charset=utf-8",
                method: "GET",
                success: function(response) {
                    
                    var data = eval(response);
                    console.log(data);
                    var en = data[0];
                    var fe = data[1];
                    var ma = data[2];
                    var ab = data[3];
                    var my = data[4];
                    var jn = data[5];
                    var jl = data[6];
                    var ag = data[7];
                    var se = data[8];
                    var oc = data[9];
                    var no = data[10];
                    var di = data[11];
                    
                    var ctx=document.getElementById("myChart").getContext("2d");
                    var myChart= new Chart(ctx,{
                        type: "bar",
                        data:{
                        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        datasets: [{
                            label: 'Ventas',
                            data:[en,fe,ma,ab,my,jn,jl,ag,se,oc,no,di],
                            backgroundColor:[
                                    'rgb(0, 0, 255)',
                                    'rgb(128, 0, 255)',
                                    'rgb(255, 0, 255)'
                                ]
                        }]
                    }
                    });

                }
            });
        });
        
    </script>
</html>
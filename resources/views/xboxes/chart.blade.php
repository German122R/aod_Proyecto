@extends('xboxes.create')


@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
   Numero de Xbox
  </p>
</figure>


<figure class="highcharts-figure">
  <div id="container2"></div>
  <p class="highcharts-description">
  Numero de juegos que trae el xbox.
  </p>
</figure>

<figure class="highcharts-figure">
  <div id="container3"></div>
  <p class="highcharts-description">
  Numero de juegos que trae el xbox.
  </p>
</figure>



<script type="text/javascript">

var xboxes= <?php echo json_encode($xboxes)?>;

Highcharts.chart('container', {
  chart: {
    type: 'pie'
  },

  title: {
      text:'xboxes'
  },
  subtitle:{
      name:'Nuevos xboxes'
  },
  xAxis:{
      categories:['Enero', 'febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Nomviembre', 'Diciembre']
  },
  yAxis:{
      title:{
          text: 'cantidad de xboxes'
      }
  },

  legend:{
      layout:'vertical', 
      aling:'right',
      verticalAling:'middle'
  },

  plotOptions:{
      series:{
          allowPointSelect: true
      }
  },
  series: [{
        name:'Xboxes',
        data: xboxes
  }],

  responsive:{

  }

});


</script>


<script type="text/javascript">

var xboxes2= <?php echo json_encode($xboxes2)?>;

Highcharts.chart('container2', {
  chart: {
    type: 'bar'
  },

  title: {
      text:'Xboxes'
  },
  subtitle:{
      name:'Numero de juegos que trae los xbox'
  },
  xAxis:{
      categories:['1juego', '2juego', '3juegos', '4juegos', '5juegos', '6juegos','7juegos', '8juegos', '9juegos', '10juegos']
  },
  yAxis:{
      title:{
          text: 'cantidad de xboxes'
      }
  },

  legend:{
      layout:'vertical', 
      aling:'right',
      verticalAling:'middle'
  },

  plotOptions:{
      series:{
          allowPointSelect: true
      }
  },
  series: [{
        name:'Xboxes',
        data: xboxes2
  }],

  responsive:{

  }

});


</script>




<script type="text/javascript">

var xboxes2= <?php echo json_encode($xboxes2)?>;

Highcharts.chart('container3', {
  chart: {
    type: 'bar'
  },

  title: {
      text:'Xboxes'
  },
  subtitle:{
      name:'Numero de juegos que trae los xbox'
  },
  xAxis:{
      categories:['1juego', '2juego', '3juegos', '4juegos', '5juegos', '6juegos','7juegos', '8juegos', '9juegos', '10juegos']
  },
  yAxis:{
      title:{
          text: 'cantidad de xboxes'
      }
  },

  legend:{
      layout:'vertical', 
      aling:'right',
      verticalAling:'middle'
  },

  plotOptions:{
      series:{
          allowPointSelect: true
      }
  },
  series: [{
        name:'Xboxes',
        data: Xboxes2
  }],

  responsive:{

  }

});


</script>



@endsection
@extends('xboxes.create')


@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
   Numero de Televisiones
  </p>
</figure>


<figure class="highcharts-figure">
  <div id="container2"></div>
  <p class="highcharts-description">
  Numero de controles que trae las televisiones
  </p>
</figure>

<figure class="highcharts-figure">
  <div id="container3"></div>
  <p class="highcharts-description">
  Numero de controles que trae las televisiones
  </p>
</figure>



<script type="text/javascript">

var tvs= <?php echo json_encode($tvs)?>;

Highcharts.chart('container', {
  chart: {
    type: 'area'
  },

  title: {
      text:'tvs'
  },
  subtitle:{
      name:'Nuevos tvs'
  },
  xAxis:{
      categories:['Enero', 'febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Nomviembre', 'Diciembre']
  },
  yAxis:{
      title:{
          text: 'cantidad de tvs'
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
        name:'Tvs',
        data: tvs
  }],

  responsive:{

  }

});


</script>


<script type="text/javascript">

var tvs2= <?php echo json_encode($tvs2)?>;

Highcharts.chart('container2', {
  chart: {
    type: 'bar'
  },

  title: {
      text:'Tvs'
  },
  subtitle:{
      name:'numero de controles que trae las televisiones'
  },
  xAxis:{
      categories:['1control', '2controles', '3controles', '4controles', '5controles', '6controles','7controles', '8controles', '9controles', '10controles']
  },
  yAxis:{
      title:{
          text: 'cantidad de tvs'
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
        name:'Tvs',
        data: tvs2
  }],

  responsive:{

  }

});


</script>



<script type="text/javascript">

var tvs2= <?php echo json_encode($tvs2)?>;

Highcharts.chart('container3', {
  chart: {
    type: 'pie'
  },

  title: {
      text:'Tvs'
  },
  subtitle:{
      name:'numero de controles que trae las televisiones'
  },
  xAxis:{
      categories:['1control', '2controles', '3controles', '4controles', '5controles', '6controles','7controles', '8controles', '9controles', '10controles']
  },
  yAxis:{
      title:{
          text: 'cantidad de tvs'
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
        name:'Tvs',
        data: tvs2
  }],

  responsive:{

  }

});


</script>





@endsection
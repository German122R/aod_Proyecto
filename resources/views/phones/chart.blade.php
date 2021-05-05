@extends('phones.create')


@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
   Celulares registrados. 
  </p>
</figure>


<figure class="highcharts-figure">
  <div id="container2"></div>
  <p class="highcharts-description">
  Entrada de los chips en los celulares.
  </p>
</figure>

<figure class="highcharts-figure">
  <div id="container3"></div>
  <p class="highcharts-description">
  Entrada de los chips en los celulares.
  </p>
</figure>



<script type="text/javascript">

var phones= <?php echo json_encode($phones)?>;

Highcharts.chart('container', {
  chart: {
    type: 'area'
  },

  title: {
      text:'Phones'
  },
  subtitle:{
      name:'Nuevos phones'
  },
  xAxis:{
      categories:['Enero', 'febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Nomviembre', 'Diciembre']
  },
  yAxis:{
      title:{
          text: 'cantidad de phones'
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
        name:'Phones',
        data: phones
  }],

  responsive:{

  }

});


</script>


<script type="text/javascript">

var phones2= <?php echo json_encode($phones2)?>;

Highcharts.chart('container2', {
  chart: {
    type: 'bar'
  },

  title: {
      text:'Phones'
  },
  subtitle:{
      name:'numero de chips de los celulares'
  },
  xAxis:{
      categories:['1chip', '2chip', '3chip', '4chip', '5chip', '6chip', '7chip', '8chip']
  },
  yAxis:{
      title:{
          text: 'cantidad de phones'
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
        name:'Phones',
        data: phones2
  }],

  responsive:{

  }

});


</script>



<script type="text/javascript">

var phones2= <?php echo json_encode($phones2)?>;

Highcharts.chart('container3', {
  chart: {
    type: 'pie'
  },

  title: {
      text:'Phones'
  },
  subtitle:{
      name:'numero de chips de los celulares'
  },
  xAxis:{
      categories:['1chip', '2chip', '3chip', '4chip', '5chip', '6chip', '7chip', '8chip']
  },
  yAxis:{
      title:{
          text: 'cantidad de phones'
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
        name:'Phones',
        data: phones2
  }],

  responsive:{

  }

});


</script>


@endsection
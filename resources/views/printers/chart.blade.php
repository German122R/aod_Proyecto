@extends('printers.create')


@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
   Impresoras registradas. 
  </p>
</figure>


<figure class="highcharts-figure">
  <div id="container2"></div>
  <p class="highcharts-description">
  Numero dehojas por minuto que saca la impresora.
  </p>
</figure>

<figure class="highcharts-figure">
  <div id="container3"></div>
  <p class="highcharts-description">
  Numero dehojas por minuto que saca la impresora.
  </p>
</figure>



<script type="text/javascript">

var printers= <?php echo json_encode($printers)?>;

Highcharts.chart('container', {
  chart: {
    type: 'bar'
  },

  title: {
      text:'Impresoras'
  },
  subtitle:{
      name:'Nuevos Printers'
  },
  xAxis:{
      categories:['Enero', 'febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Nomviembre', 'Diciembre']
  },
  yAxis:{
      title:{
          text: 'cantidad de printers'
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
        name:'Printers',
        data: printers
  }],

  responsive:{

  }

});


</script>


<script type="text/javascript">

var printers2= <?php echo json_encode($printers2)?>;

Highcharts.chart('container2', {
  chart: {
    type: 'bar'
  },

  title: {
      text:'Printers'
  },
  subtitle:{
      name:'numero de chips de los celulares'
  },
  xAxis:{
      categories:['10hojas', '20Hojas', '30Hojas', '40Hojas', '50Hojas', '60Hojas', '70Hojas', '80Hojas']
  },
  yAxis:{
      title:{
          text: 'cantidad de printers'
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
        name:'Printers',
        data: printers2
  }],

  responsive:{

  }

});


</script>



<script type="text/javascript">

var printers2= <?php echo json_encode($printers2)?>;

Highcharts.chart('container3', {
  chart: {
    type: 'pie'
  },

  title: {
      text:'Printers'
  },
  subtitle:{
      name:'numero de chips de los celulares'
  },
  xAxis:{
      categories:['10hojas', '20Hojas', '30Hojas', '40Hojas', '50Hojas', '60Hojas', '70Hojas', '80Hojas']
  },
  yAxis:{
      title:{
          text: 'cantidad de printers'
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
        name:'Printers',
        data: printers2
  }],

  responsive:{

  }

});


</script>





@endsection
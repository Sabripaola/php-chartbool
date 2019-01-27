$(document).ready(function(){
      $.ajax({
        url: 'http://localhost/php-chartbool/data.php',
        method:'GET',
        success: function(valore)
        {
          var database = JSON.parse(valore);
          var ctx = $('#line-chart');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
                    datasets: [{
                        label: 'Andamento vendite',
                        data: database,
                        backgroundColor: [
                         'rgba(255, 99, 132, 0.2)',
                     ],
                     borderColor: [
                         'rgba(54, 162, 235, 1)',
                     ],
                    }]
                },

            });
        },
        error: function()
          {
            alert("errore");
          }

      })
});

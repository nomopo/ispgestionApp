<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
      // Primero, obtén una referencia al elemento canvas
      const canvas = document.getElementById('chart');

      // Luego, especifica los datos y las opciones para el gráfico
      const data = {
        labels: ['Opción 1', 'Opción 2', 'Opción 3'],
        datasets: [{
          data: [50, 25, 25], // valores para cada opción
          backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'] // colores para cada opción
        }]
      };

      const options = {
        cutoutPercentage: 50, // porcentaje de la circunferencia que se debe cortar
        rotation: -0.5 * Math.PI, // rotación inicial del gráfico en radianes
        circumference: Math.PI // longitud de la circunferencia del gráfico en radianes
      };

      // Finalmente, crea el gráfico usando la biblioteca Chart.js
      const chart = new Chart(canvas, {
        type: 'doughnut', // tipo de gráfico (anillo)
        data: data,
        options: options
      });

    </script>
</head>
<body>
    <div id="chart"></div>
</body>
</html>
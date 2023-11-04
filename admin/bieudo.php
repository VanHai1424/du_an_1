<div class="" style="width:100%; display:flex; justify-content:center">
            <div id="piechart"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    const data = google.visualization.arrayToDataTable([
                        ['Contry', 'Mhl'],
                        ['Italy', 54.8],
                        ['France', 48.6],
                        ['Spain', 44.4],
                        ['USA', 23.9],
                        ['Argentina', 14.5]
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {
                        'title': 'Biểu đồ loại hàng',
                        'width': 550,
                        'height': 400
                    };

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }
            </script>
        </div>
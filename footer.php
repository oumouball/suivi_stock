<footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2018</b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>
            </div>
        </footer>
        <script src="http://localhost:8080/suivistock/public/template/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="http://localhost:8080/suivistock/public/template/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="http://localhost:8080/suivistock/public/template/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="http://localhost:8080/suivistock/public/template/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="http://localhost:8080/suivistock/public/template/js/tooplate-scripts.js"></script>
    <script>
     /*    Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready */
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
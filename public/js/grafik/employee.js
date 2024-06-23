import Highcharts from 'highcharts';

document.addEventListener('DOMContentLoaded', function () {
    fetch('/employee-data')
        .then(response => response.json())
        .then(data => {
            const divisions = data.map(item => item.division);
            const totals = data.map(item => item.total);

            Highcharts.chart('employee-chart-container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Employee Distribution by Division'
                },
                xAxis: {
                    categories: divisions,
                    title: {
                        text: 'Division'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Number of Employees',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Employees',
                    data: totals
                }]
            });
        });
});

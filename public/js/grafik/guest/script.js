
$(document).ready(function() {
    getData();

    function getData() {
        $.ajax({
            type: 'POST',
            url: `grafik/get-data`,
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
            },
            dataType: 'json',
            success: function(response) {
                drawDivisionChart(response.data.division);
                drawMaritalStatusChart(response.data.marital_status);
            },
            error: function(xhr, textstatus, message) {
                console.log(xhr.responseJSON);
            },
        });
    }

    function drawDivisionChart(data) {
        Highcharts.chart('container-division', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Pegawai per Divisi'
            },
            xAxis: {
                categories: data.map(item => item.division),
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pegawai'
                }
            },
            series: [{
                name: 'Total Pegawai',
                data: data.map(item => item.total_employees),
                color: 'cyan'
            }],
            accessibility: {
                enabled: false
            }
        });
        }

        function drawMaritalStatusChart(data) {
        Highcharts.chart('container-marital-status', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Jumlah Pegawai per Marital Status'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            series: [{
                name: 'Total Pegawai',
                colorByPoint: true,
                data: data.map(item => ({
                    name: item.status,
                    y: item.total_employees
                }))
            }],
            accessibility: {
                enabled: false
            }
        });
        }
});

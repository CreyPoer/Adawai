
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
                type: 'pie'
            },
            title: {
                text: 'Jumlah Pegawai Setiap Divisi'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            series: [{
                name: 'Total Pegawai',
                colorByPoint: true,
                data: data.map(item => ({
                    name: item.division,
                    y: item.total_employees
                }))
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
                text: 'Jumlah Pegawai Berdasarkan Status Pernikahan'
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

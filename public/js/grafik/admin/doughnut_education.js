var chartDataElement = document.getElementById('myPieChart');
var labels = JSON.parse(chartDataElement.getAttribute('data-labels'));
var total = JSON.parse(chartDataElement.getAttribute('data-total'));

var backgroundColors = [
    '#00FF00', // Green
    '#7FFF00', // Chartreuse
    '#FFFF00', // Yellow
    '#FFA500', // Orange
    '#FF0000'  // Red
];

var hoverBackgroundColors = [
    '#00CC00', // Darker Green
    '#66CC00', // Darker Chartreuse
    '#CCCC00', // Darker Yellow
    '#CC8500', // Darker Orange
    '#CC0000'  // Darker Red
];

function generateLegend(labels, colors) {
    var legendHtml = '';
    labels.forEach(function(label, index) {
        legendHtml += `
            <span class="mr-2">
                <i class="fas fa-circle" style="color:${colors[index]};"></i> <small style="color:#212529" class="fw-bold"><strong>${label}</strong></small>
            </span>
        `;
    });
    document.getElementById('legend').innerHTML = legendHtml;
}

var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: labels,
        datasets: [{
            data: total,
            backgroundColor: backgroundColors,
            hoverBackgroundColor: hoverBackgroundColors,
            hoverBorderColor: "#212529",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "aqua",
            bodyFontColor: "#212529",
            borderColor: '#212529',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false,
        },
        cutoutPercentage: 80,
    },
});

// Call the function to generate legend
generateLegend(labels, backgroundColors);

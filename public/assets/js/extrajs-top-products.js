$(document).ready(function() {
    $('.navbar-brand').html('Sales');
    $('#sales').addClass('active');

    $year = $('#year');
    $month = $('#month');
    $day = $('#day');
    urlPrefix = 'top-products';


    $year.change(function(){
        $month.val(0);
        $day.val(0);
        $day.addClass('hidden');

        yearTopProducts($year.val());
    });

    $month.change(function(){
        setDaysValue($year.val(), $month.val());
        monthTopProducts( $year.val(), $month.val() );

    });

    $day.change(function(){
        dayTopProducts($year.val(), $month.val(), $day.val());
    });

    yearTopProducts($year.val());

});

function setDaysValue(year, month){
    daysVal     = [31,( (year%4 > 0)? 28: 29 ),31,30,31,30,31,31,30,31,30,31];
    $day.find('option').remove();
    $day.append('<option value="0" selected>-- Select Day --</option>')
    for(i = 1; i <= daysVal[month-1]; i++) {
        $day.append('<option value="' + i + '">' + i + '</option>')
    }
}

function emptyGraph(){
    $('#graph').html(' ');
}

function yearTopProducts(year){
    emptyGraph();

    $('#head').html(year);

    $.ajax({
        type: 'GET',
        url: urlPrefix + '/topProductsForYear?year=' + year,
        success: function (response) {

            topProductsOnYear = response['topProductsOnYear'];
            arrayData = [];
            for (i = 0; i < topProductsOnYear[0].length; i++) {
                toBePushed = {
                    'x' : topProductsOnYear[0][i],
                    1   : topProductsOnYear[1][i],
                    2   : topProductsOnYear[2][i],
                    3   : topProductsOnYear[3][i],
                    4   : topProductsOnYear[4][i],
                    5   : topProductsOnYear[5][i],
                    6   : topProductsOnYear[6][i],
                    7   : topProductsOnYear[7][i],
                    8   : topProductsOnYear[8][i],
                    9   : topProductsOnYear[9][i],
                    10  : topProductsOnYear[10][i],
                    11  : topProductsOnYear[11][i],
                    12  : topProductsOnYear[12][i]
                };
                arrayData.push(toBePushed);
            }

            Morris.Bar({
                element: 'graph',
                data: arrayData,
                xkey: 'x',
                ykeys: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11, 12],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                xLabelAngle: 60,
                stacked: true
            });

        },
        error: function () {
        }
    });
}


function monthTopProducts(year, month){
    emptyGraph();
    monthsVal = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

    $('#head').html(year  + ' - ' + monthsVal[month]);


    $.ajax({
        type: 'GET',
        url: urlPrefix + '/topProductsForMonth?year=' + year + '&month=' + month,
        success: function (response) {
            //console.log(response['topProductsOnMonth'][0]);
            topProductsOnMonth = response['topProductsOnMonth'];
            arrayDataMonth = [];
            for (i = 0; i < topProductsOnMonth[0].length; i++) {
                toBePushed = {
                    'x' : topProductsOnMonth[0][i],
                    'm'   : parseFloat(topProductsOnMonth[1][i])
                };
                arrayDataMonth.push(toBePushed);
            }

            if(arrayDataMonth.length > 0){
                $day.val(0);
                $day.removeClass('hidden');

                Morris.Bar({
                    element: 'graph',
                    data: arrayDataMonth,
                    xkey: 'x',
                    ykeys: ['m'],
                    labels: [monthsVal[month]],
                    xLabelAngle: 60,
                    stacked: true
                });
            } else {
                $day.addClass('hidden');
                $('#graph').html('No Sales on ' + year + ' - ' + monthsVal[month]);
            }
        },
        error: function () {
        }
    });


}

function dayTopProducts(year, month, day){
    emptyGraph();
    monthsVal   = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

    $('#head').html(year  + ' - ' + monthsVal[month] + ' - ' + day);

    $.ajax({
        type: 'GET',
        url: urlPrefix + '/topProductsForDay?year=' + year + '&month=' + month + '&day=' + day,
        success: function (response) {
            //console.log(response['topProductsOnMonth'][0]);
            topProductsOnDay = response['topProductsOnDay'];
            arrayDataDay = [];

            for (i = 0; i < topProductsOnDay[0].length; i++) {
                toBePushed = {
                    'x' : topProductsOnDay[0][i],
                    'd'   : parseFloat(topProductsOnDay[1][i])
                };
                arrayDataDay.push(toBePushed);
            }

            if(arrayDataDay.length > 0){
                Morris.Bar({
                    element: 'graph',
                    data: arrayDataDay,
                    xkey: 'x',
                    ykeys: ['d'],
                    labels: [monthsVal[month]],
                    xLabelAngle: 60,
                    stacked: true
                });
            } else {
                $('#graph').html('No Sales on ' + year + ' - ' + monthsVal[month] + ' ' + day);
            }
        },
        error: function () {
        }
    });
}
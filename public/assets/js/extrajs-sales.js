$(document).ready(function() {
    $('.navbar-brand').html('Sales');
    $('#sales').addClass('active');

    urlPrefix = 'sales';

    /** annual starts here!  */

    $.ajax({
        type: 'GET',
        url: urlPrefix + '/getAllYearsData',
        success: function (response) {
            yearsData = response['yearsData'];
            arrayData = Array();
            for(i = 0; i < yearsData.length; i++) {
                arrayData.push({x: yearsData[i][0]['year'] , y: yearsData[i][1]['total']});
            }

            Morris.Bar({
                element: 'annual',
                data: arrayData,
                xkey: 'x',
                ykeys: ['y'],
                labels: ['Y']
            }).on('click', function(i, row){

                /** monthly starts here!  */

                year = row['x'];

                $('#monthlyHead').html('Months on ' + year);
                $('#monthlyHead').removeClass('hidden');
                $('#weeklyHead').addClass('hidden');
                $('#daily').html('');
                $('#monthly').html('');

                $.ajax({
                    type: 'GET',
                    url: urlPrefix + '/getAllMonthsData?year=' + year,
                    success: function (response) {
                        monthsData  = response['monthsData'];
                        months      = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                        arrayData   = Array();
                        for(i = 0; i < monthsData.length; i++) {
                            arrayData.push({x: months[i] , y: monthsData[i][1]['total']});
                        }

                        Morris.Bar({
                            element: 'monthly',
                            data: arrayData,
                            xkey: 'x',
                            ykeys: ['y'],
                            labels: ['Y']
                        }).on('click', function(i, row){

                            /** daily starts here!  */

                            month = row['x'];
                            monthNumber  = { 'Jan' : 1, 'Feb' : 2, 'Mar' : 3, 'Apr' : 4, 'May' : 5, 'Jun' : 6, 'Jul' : 7, 'Aug' : 8, 'Sep' : 9, 'Oct' : 10, 'Nov' : 11, 'Dec' : 12 };

                            $('#weeklyHead').html('Days on ' + month + ', ' + year);
                            $('#weeklyHead').removeClass('hidden');
                            $('#daily').html(' ');

                            $.ajax({
                                type: 'GET',
                                url: urlPrefix + '/getAllDaysData?year=' + year + '&month=' + monthNumber[month],
                                success: function (response) {
                                    daysData    = response['daysData'];
                                    days        = response['days'];
                                    arrayData   = Array();
                                    for(i = 0; i < days; i++) {
                                        arrayData.push({x: 'Day ' + (i+1) , y: daysData[i][1]['total']});
                                    }

                                    Morris.Bar({
                                        element: 'daily',
                                        data: arrayData,
                                        xkey: 'x',
                                        ykeys: ['y'],
                                        labels: ['Y']
                                    });
                                },
                                error: function () {
                                }
                            });

                            // arrayData = Array();
                            // for(i = 1; i <= 30; i++) {
                            //    arrayData.push({x: 'Day ' + i, y: parseInt(Math.random() * 10000)});
                            // }
                            //
                            // Morris.Bar({
                            //    element: 'daily',
                            //    data: arrayData,
                            //    xkey: 'x',
                            //    ykeys: ['y'],
                            //    labels: ['Y']
                            // }).on('click', function(i, row){
                            //    console.log(row['x']);
                            // });
                        });

                    },
                    error: function () {
                    }
                });

            });

        },
        error: function () {
        }
    });


});
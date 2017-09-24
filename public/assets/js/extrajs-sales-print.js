$(document).ready(function(){

    $('.navbar-brand').html('Sales');
    $('#sales').addClass('active');

    $('#fromDate').change(function(){
        clickDate();
    });

    $('#toDate').change(function(){
        clickDate();
    });


});

function clickDate(){
    fromDate        = new Date($('#fromDate').val());
    toDate          = new Date($('#toDate').val());
    $dateError      = $('#dateError');
    $viewPrintReport = $('#viewPrintReport');

    if(fromDate > toDate) {
        $dateError.removeClass('hidden');
        $viewPrintReport.attr('disabled', 'true');
        $dateError.html('*From Date must be older than To Date!');
    } else {
        $viewPrintReport.removeAttr('disabled');
        $dateError.addClass('hidden');
    }
}

function clickPrint(){
    var printContents = document.getElementById('salesPrint').innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
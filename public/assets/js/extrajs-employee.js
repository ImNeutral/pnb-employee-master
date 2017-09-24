$(document).ready(function() {
    $('.navbar-brand').html('Employees');
    $('#employees').addClass('active');
    $('.tooltip-employee').tooltip({trigger: 'hover'});

    clickEvents();

});

function clickEvents(){
    $('#view-details ').click(function(){
        $employeeSelected   = $(this).closest('tr');
        $viewEmployee       = $('#view-employee-details');

        $viewEmployee.find('#name')         .html($employeeSelected.find('#name').html());
        $viewEmployee.find('#sex')          .html($employeeSelected.find('#sex').html());
        $viewEmployee.find('#civil_status') .html($employeeSelected.find('#civil_status').html());
        $viewEmployee.find('#birthdate')    .html($employeeSelected.find('#birthdate').html());
        $viewEmployee.find('#age')          .html($employeeSelected.find('#age').html());
        $viewEmployee.find('#contact_number').html($employeeSelected.find('#contact_number').html());
        $viewEmployee.find('#address')      .html($employeeSelected.find('#address').html());
        $viewEmployee.find('#position')     .html($employeeSelected.find('#position').html());


        $account_active = $employeeSelected.find('#account_active').html();
        $active         = $employeeSelected.find('#active').html();
        if($active == '1') {
            $viewEmployee.find('#active').addClass('glyphicon-ok');
            $viewEmployee.find('#active').css('color', 'forestgreen');
            $viewEmployee.find('#active').html('Active');
        } else {
            $viewEmployee.find('#active').addClass('glyphicon-remove');
            $viewEmployee.find('#active').css('color', 'orangered');
            $viewEmployee.find('#active').html('Inactive');
        }

        if($employeeSelected.find('#have_account').html() == '1') {
            $('#have_account').removeClass('hidden');
            $('#no_account').addClass('hidden');
            $viewEmployee.find('#username').html($employeeSelected.find('#username').html());
            $viewEmployee.find('#account_access').html($employeeSelected.find('#account_access').html());
            if ($account_active == '1') {
                $viewEmployee.find('#account_active').addClass('glyphicon-ok');
                $viewEmployee.find('#account_active').css('color', 'forestgreen');
                $viewEmployee.find('#account_active').html('Active');
            } else {
                $viewEmployee.find('#account_active').addClass('glyphicon-remove');
                $viewEmployee.find('#account_active').css('color', 'orangered');
                $viewEmployee.find('#account_active').html('Inactive');
            }
        } else {
            $('#have_account').addClass('hidden');
            $('#no_account').removeClass('hidden');
        }
    });
}
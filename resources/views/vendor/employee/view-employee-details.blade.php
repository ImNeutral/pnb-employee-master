<!-- View Employee Details -->
<div class="modal fade" id="view-employee-details" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="myModalLabel">Employee Details</h5>
            </div>
            <div class="modal-body" style="font-size: 14px;">
                <dl class="dl-horizontal">
                    <dt>Full Name</dt>
                    <dd id="name"></dd>

                    <dt>Sex</dt>
                    <dd id="sex"></dd>

                    <dt>Civil Status</dt>
                    <dd id="civil_status"></dd>

                    <dt>Birthdate</dt>
                    <dd id="birthdate"></dd>

                    <dt>Age</dt>
                    <dd id="age"></dd>

                    <dt>Contact #</dt>
                    <dd id="contact_number"></dd>

                    <dt>Address</dt>
                    <dd id="address"></dd>

                    <dt>Position</dt>
                    <dd id="position"></dd>

                    <dt>Employee Status</dt>
                    <dd>
                        <p id="active" class="glyphicon "></p>
                    </dd>
                    <br />

                    <div id="have_account">
                        <dt>Account Username</dt>
                        <dd id="username"></dd>

                        <dt>Account Status</dt>
                        <dd>
                            <p id="account_active" class="glyphicon "></p>
                        </dd>

                        <dt>Account Access</dt>
                        <dd id="account_access"></dd>
                    </div>
                    <div id="no_account">
                        <dd><strong>Employee doesn't have ab account!</strong></dd>
                    </div>

                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
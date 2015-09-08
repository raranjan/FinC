<div class="modal fade" id="signup" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
            <form method="post" action="/auth/register">
                {!! csrf_field() !!}

                <div class="modal-body">
                    User Name <input type="text" name="name" value="{{ old('name') }}" >
                </div>
                <div>
                    Email <input type="text" name="email" value="{{ old('email') }}">
                </div>
                <div>
                    Password <input type="password" name="password">
                </div>
                <div>
                    Confirm Password <input type="password" name="password_confirmation">
                </div>
                <div class="modal-footer">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
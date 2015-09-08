<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <form method="post" action="auth/login">
                {!! csrf_field() !!}
                <div class="modal-body">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password" id="password">
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">Forgot Password</a>
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
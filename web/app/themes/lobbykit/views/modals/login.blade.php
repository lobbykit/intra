<!--
### LobbyKit Bladerunner View: views.modals.login
-->
<div class="modal fade" id="login-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title"><i class="fa fa-sign-in"></i> {{ __('Login','intra') }}</h4> 
            </div>
            <div class="modal-body">
                <p class="text-xs-center">{{ papi_get_option('login_message') }}</p>
                <form id="login-form" action="/" method="POST" novalidate="">
                    
                    <div class="form-group">
                        <label for="username">{{ __('Email','intra') }}</label>
                        <input type="email" class="form-control underlined" name="email" id="email" placeholder="Your email address" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">{{ __('Password','intra') }}</label>
                        <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="remember">
                            <input class="checkbox" id="remember" type="checkbox" /> <span>{{ __('Remember me','intra') }}</span>
                        </label> 
                        <a href="#" class="forgot-btn pull-right">{{ __('Forgot password?','intra') }}</a>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> {{ __('Login','intra') }}
                        </button>
                        <a href="#" class="btn btn-warning pull-right">
                            <i class="fa fa-plus"></i> {{ __('New account','intra') }}
                        </a>
                        <span class="pull-right">&nbsp;</span>
                        <button class="btn btn-success pull-right" type="button" data-toggle="collapse" data-target="#slack-login-form" aria-expanded="false" aria-controls="slack-login-form">
                            <i class="fa fa-slack"></i> {{ __('Slack code','intra') }}
                        </button>
                    </div>
                    
                </form>

                <form class="collapse" id="slack-login-form" action="/" method="POST" novalidate="">
                    <div class="form-group">
                        <label for="slack">{{ __('Alternative login via Slack code','intra') }}</label>
                        <input type="text" class="form-control underlined" name="slack" id="slack" placeholder="A generated Slack code" required />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ __('Slack Login','intra') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



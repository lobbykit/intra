<!--
### LobbyKit Bladerunner View: views.modals.login
-->
<div class="modal fade" id="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title"><i class="fa fa-sign-in"></i> {{ __('Login','intra') }}</h4> 
            </div>
            <div class="modal-body">
                <p class="text-xs-center">{{ papi_get_option('login_message') }}</p>

                <?php do_action( 'wordpress_social_login' ); ?>
                    
                <div v-show="success" class="alert alert-success" role="alert">
                    @{{{ success }}}
                </div>

                <div v-show="warning" class="alert alert-warning" role="alert">
                    @{{{ warning }}}
                </div>

                <div v-show="error" class="alert alert-danger" role="alert">
                    @{{{ error }}}
                </div>

                <div class="form-group">
                    <label for="email">{{ __('Email','intra') }}</label>
                    <input v-model="email" v-on:keyup.enter="login" type="email" class="form-control underlined" placeholder="Your email address" required autofocus="autofocus" />
                </div>
                
                <div class="form-group">
                    <label for="password">{{ __('Password','intra') }}</label>
                    <input v-model="password" v-on:keyup.enter="login" type="password" class="form-control underlined" placeholder="Your password" required />
                </div>
                
                <div class="form-group">
                    <label for="remember">
                        <input v-model="remember" class="checkbox" type="checkbox" /> <span>{{ __('Remember me','intra') }}</span>
                    </label> 
                    <a href="#" class="forgot-btn pull-right">{{ __('Forgot password?','intra') }}</a>
                </div>
                
                <div class="form-group">
                    <button v-on:click="login" class="btn btn-primary">
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



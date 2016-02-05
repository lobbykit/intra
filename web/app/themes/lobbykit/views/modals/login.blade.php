<!--
### LobbyKit Bladerunner View: views.modals.login
-->
<div class="modal fade" id="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title"><i class="fa fa-sign-in"></i> <?=__('Login','intra')?></h4> 
            </div>
            <div class="modal-body">
                <p class="text-xs-center">{!! papi_get_option('message_login') !!}</p>

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
                    <label for="email"><?=__('Email','intra')?></label>
                    <input v-model="email" v-on:keyup.enter="login" id="email" type="string" class="form-control underlined" placeholder="<?=__('Your Email address','intra')?>" required autofocus="autofocus" />
                </div>
                
                <div class="form-group">
                    <label for="password"><?=__('Password','intra')?></label>
                    <input v-model="password" v-on:keyup.enter="login" id="password" type="password" class="form-control underlined" placeholder="<?=__('Your secret password','intra')?>" required />
                </div>
                
                <div class="form-group">
                    <label for="remember">
                        <input v-model="remember" class="checkbox" type="checkbox" id="remember" name="remember"> <span> <?=__('Remember me','intra')?></span>
                    </label> 
                    <a href="#" onclick="jQuery('#forgotModal').modal('show'); jQuery('#loginModal').modal('hide');" class="forgot-btn pull-right"><?=__('Forgot password?','intra')?></a>
                </div>
                
                <div class="form-group">
                    <button v-on:click="login" class="btn btn-primary btn-block">
                        <i class="fa fa-sign-in"></i> <?=__('Login','intra')?>
                    </button>
                </div>

            </div>
            <div class="modal-footer">
                <form class="collapse" id="slack-login-form" action="/" method="POST" novalidate="">
                    <div class="form-group">
                        <input type="text" class="form-control underlined" name="slack" id="slack" placeholder="<?=__('Enter Slack generated code here and press enter!','intra')?>" required />
                    </div>
                </form>
                <button class="btn btn-success pull-left" type="button" data-toggle="collapse" data-target="#slack-login-form" aria-expanded="false" aria-controls="slack-login-form">
                    <i class="fa fa-slack"></i> <?=__('Slack account','intra')?>
                </button>
                <a href="#" onclick="jQuery('#registerModal').modal('show'); jQuery('#loginModal').modal('hide');" class="btn btn-warning pull-right">
                    <i class="fa fa-plus"></i> <?=__('New account','intra')?>
                </a>
            </div>
        </div>
    </div>
</div>



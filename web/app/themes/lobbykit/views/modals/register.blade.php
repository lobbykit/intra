<!--
### LobbyKit Bladerunner View: views.modals.register
-->
<div class="modal fade" id="registerModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title"><i class="fa fa-user"></i> <?=__('Register new account','intra')?></h4> 
            </div>
            <div class="modal-body">
                <p class="text-xs-center">{!! papi_get_option('message_register') !!}</p>

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
                    <label for="display_name"><?=__('Name','intra')?></label>
                    <input v-model="display_name" v-on:keyup.enter="register" id="display_name" type="string" class="form-control underlined" placeholder="<?=__('Your first name and last name','intra')?>" required autofocus="autofocus" />
                </div>
                
                <div class="form-group">
                    <label for="workplace"><?=__('Workplace','intra')?></label>
                    <input v-model="workplace" v-on:keyup.enter="register" id="workplace" type="string" class="form-control underlined" placeholder="<?=__('The name of your workspace, not required','intra')?>" />
                </div>
                
                <div class="form-group">
                    <label for="phone"><?=__('Phone','intra')?></label>
                    <input v-model="phone" v-on:keyup.enter="register" id="phone" type="string" class="form-control underlined" placeholder="<?=__('Your phone number for contact, not required','intra')?>" />
                </div>

                <div class="form-group">
                    <label for="email"><?=__('Email','intra')?></label>
                    <input v-model="email" v-on:keyup.enter="register" id="email" type="email" class="form-control underlined" placeholder="<?=__('Your Email address','intra')?>" required />
                </div>
                
                <div class="form-group">
                    <label for="password"><?=__('Password','intra')?></label>
                    <input v-model="password" v-on:keyup.enter="register" id="password" type="password" class="form-control underlined" placeholder="<?=__('Your secret password','intra')?>" required />
                </div>
                
                <div class="form-group">
                    <button v-on:click="register" class="btn btn-primary btn-block" id="registerSendButton">
                        <i class="fa fa-paper-plane-o"></i> <?=__('Register','intra')?>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>



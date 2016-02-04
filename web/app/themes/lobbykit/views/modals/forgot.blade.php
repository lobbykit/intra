<!--
### LobbyKit Bladerunner View: views.modals.forgot
-->
<div class="modal fade" id="forgotModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title"><i class="fa fa-question"></i> <?=__('Forgotten password','intra')?></h4> 
            </div>
            <div class="modal-body">
                <p class="text-xs-center">{{ papi_get_option('forgot_message') }}</p>

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
                    <input v-model="email" v-on:keyup.enter="forgot" id="email" type="string" class="form-control underlined" placeholder="<?=__('Your Email address','intra')?>" required autofocus="autofocus" />
                </div>
                
                <div class="form-group">
                    <button v-on:click="forgot" class="btn btn-primary btn-block">
                        <i class="fa fa-paper-plane-o"></i> <?=__('Send login link','intra')?>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>



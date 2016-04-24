/* ========================================================================
 * Unauthenticated LobbyKit
 * ======================================================================== */
 function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

(function($) {

    /*************************************
    * Login
    **************************************/
    var loginVue = new Vue({
      el: '#loginModal',
      data: {
        error: '',
        success: '',
        warning: '',
        email: '',
        password: '',
        remember: false,
        nonce: wpdata.nonce,
        ajax: wpdata.ajax_url
      },
      methods: {
        login: function (e) {

          e.preventDefault();

          this.error = '';
          this.success = '';
          this.warning = wpdata.waiting_message;

          $.ajax({
            method: "POST",
            url: this.ajax,
            data: {
              'action': 'login',
              'email': this.email,
              'password': this.password,
              'remember': this.remember,
              'nonce': this.nonce
            },
            dataType: 'json',
            success:function(data) {
              loginVue.warning='';
              if( data.status=='success' ) {
                loginVue.success = data.message;
                location.reload(); 
              }
              else {
                loginVue.error = data.message;
              }
            },
            error:function(err) {
              loginVue.warning='';
              loginVue.error = 'Error! ' + err.responseText;
              console.log(err);
            }
          });

        }
      }
    });

    if( getParameterByName('login') ) {
      $('#loginModal').modal('show');
    }

    /*************************************
    * Forgot
    **************************************/
    var forgotVue = new Vue({
      el: '#forgotModal',
      data: {
        error: '',
        success: '',
        warning: '',
        email: '',
        nonce: wpdata.nonce,
        ajax: wpdata.ajax_url
      },
      methods: {
        forgot: function (e) {

          e.preventDefault();

          this.error = '';
          this.success = '';
          this.warning = wpdata.waiting_message;

          $.ajax({
            method: "POST",
            url: this.ajax,
            data: {
              'action': 'forgot',
              'email': this.email,
              'nonce': this.nonce
            },
            dataType: 'json',
            success:function(data) {
              forgotVue.warning='';
              if( data.status=='success' ) {
                forgotVue.success = data.message;
              }
              else {
                forgotVue.error = data.message;
              }
            },
            error:function(err) {
              forgotVue.warning='';
              forgotVue.error = 'Error! ' + err.responseText;
              console.log(err);
            }
          });

        }
      }
    });



    /*************************************
    * Register
    **************************************/
    var registerVue = new Vue({
      el: '#registerModal',
      data: {
        error: '',
        success: '',
        warning: '',
        email: '',
        display_name: '',
        workplace: '',
        phone: '',
        password: '',
        nonce: wpdata.nonce,
        ajax: wpdata.ajax_url
      },
      methods: {
        register: function (e) {

          e.preventDefault();

          this.error = '';
          this.success = '';
          this.warning = wpdata.waiting_message;

          $.ajax({
            method: "POST",
            url: this.ajax,
            data: {
              'action': 'register',
              'email': this.email,
              'password': this.password,
              'display_name': this.display_name,
              'meta': {
                'phone': this.phone,
                'workplace': this.workplace,
              },
              'nonce': this.nonce
            },
            dataType: 'json',
            success:function(data) {
              registerVue.warning='';
              if( data.status=='success' ) {
                registerVue.success = data.message;
                jQuery('#registerSendButton').hide();
              }
              else {
                registerVue.error = data.message;
              }
            },
            error:function(err) {
              registerVue.warning='';
              registerVue.error = 'Error! ' + err.responseText;
              console.log(err);
            }
          });

        }
      }
    });


})(jQuery); // Fully reference jQuery after this point.

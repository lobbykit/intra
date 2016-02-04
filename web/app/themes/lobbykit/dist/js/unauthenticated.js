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
              if( data.success ) {
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

})(jQuery); // Fully reference jQuery after this point.

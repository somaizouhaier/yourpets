(function($) {
  $.fn.facebook_login = function(options) {
    var defaults = {
      endpoint: '/sessions/new',
      permissions: 'email,user_likes,public_profile,user_friends,user_birthday,user_photos,read_friendlists,user_location,publish_actions',
      onSuccess: function(data) { console.log([200,'OK']); },
      onError: function(data) { console.log([500,'Error']); }
    };

    var settings = $.extend({}, defaults, options);

    if(settings.appId === 'undefined') {
      alert('Vous devez préciser votre appId');
      return false;
    }
    //Insertion de fichier javascript pour accéder à l'API facebook
    (function(document, script, idFacebookScript){
    var firstJavascriptFile, facebookJavascriptFile = document.getElementsByTagName(script)[0];
    if (document.getElementById(idFacebookScript)) {return;}
    firstJavascriptFile = document.createElement(script); firstJavascriptFile.id = idFacebookScript;
      firstJavascriptFile.src = "https://connect.facebook.net/en_US/all.js";
      facebookJavascriptFile.parentNode.insertBefore(firstJavascriptFile, facebookJavascriptFile);
    }(document, 'script', 'facebook-jssdk'));

    window.fbAsyncInit = function() {
      FB.init({
        appId: settings.appId,
        status: true,
        xfbml: true
      });
    };
  
    this.bind('click', function() {
        console.log(settings.appId);
      FB.login(function(r) {
        var response;
        if(response = r.authResponse) {
          var user_id = response.userID;
          var token   = response.accessToken;
          FB.api('/me?access_token='+token, function(user) {   
            var email;
            if(email = user.email) {
                    $.ajax({
                    type: 'POST',
                    url: settings.endpoint,
                    data: {'user':user, 'access_token': token},
                    success: settings.onSuccess,
                    error: settings.onError
                  
                });

            }
          });
        } else {
          settings.onError;
        }
      }, {scope: settings.permissions});
      
    });
  }
})(jQuery);


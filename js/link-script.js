    $(function(){
        
        $('#loading').ajaxStart(function(){
             $(this).fadeIn();
          }).ajaxStop(function(){
             $(this).fadeOut();
          });
      
        $('#nav a').click(function() {
            var url = $(this).attr('href');
            $('#main').load(url);
            return false;
        });     
              
        $('#galleryLink a').click(function() {
            var url = $(this).attr('href');
            $('#main').load(url);
            return false;
        });            

        $('#aboutLink a').click(function() {
            var url = $(this).attr('href');
            $('#main').load(url);
            return false;
        });             

        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

    });
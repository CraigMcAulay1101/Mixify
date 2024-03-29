<!DOCTYPE html>
<html>
    <head>
        <title>Mixify</title>
        <link href="/css/app.css" rel="stylesheet">
        <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'/>
        <meta name="description" content="Discover new music">
        <meta name="keywords" content="Spotify, Music, Discover, Mix">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body>
      <div id="splash-container" class="container">
          <div class="image-area">
              <releases></releases>

              <template id="release-template">
                  <div class="new-releases">
                    <ul transition="fade" class="release-group" v-for="album in list" >
                        <img class="new-release b-lazy" src="images/2.gif" data-src ="@{{ album.images[0].url }}"/>
                    </ul>
                 </div>
              </template>

              <div class="jumbotron">
                  <div class="title"><b>Mix</b>ify</div>

                  <form method="POST" id="auth" action="/auth">
                    {{ csrf_field() }}
                    <button class="start" type="submit">Get Started</button>
                  </form>
              </div>
          </div>
      </div>
        <div class="footer">&copy; <?php echo date("Y"); ?> Mixify</div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-91744558-1', 'auto');
          ga('send', 'pageview');

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.13/vue-resource.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>

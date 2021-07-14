<!DOCTYPE html>
<html>
    <head>
        <title>practice</title>
    </head>
    <body>
        <h1>
            Number & Arithmetic Operation
        </h1>
        <h2>1+1</h2>
        <?php echo 1+1;?>
        <hr>
        <h1>
            String & String Operation
        </h1>
        <?php echo "Hello 'w'orld";?>
        <br>
        <?php echo strlen("Hello 'w'orld");?>
        <hr>
        안녕하세요.<?php $name="doi"; echo $name;?> 님
        <hr>
        <!-- 안녕하세요.?php echo $_GET['name'];? 님 //http://127.0.0.1/site_homepage.php?name=doi -->
        <ol>
            <li><a href ="site_homepage.php?id=HTML">HTML</a></li>
            <li><a href ="site_homepage.php?id=CSS">CSS</a></li>
            <li><a href ="site_homepage.php?id=JavaScript">JavaScript</a></li>
	        <li><a href ="site_homepage.php?id=WEB">WEB</a></li>
        </ol>
        <h2><a href="https://ko.wikipedia.org/wiki/html" target="_blank"><?php echo $_GET['id'];?></a></h2>
        <p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tZooW6PritE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </p>
        <h3>
        <?php echo file_get_contents ("data/".$_GET["id"]);
          ?></h3>
         <div id="disqus_thread"></div>
        <!-- ?php echo nl2br? --> <!--줄 띄움-->
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://https-ldi2676-github-io-my-test-page-home-html.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </body>
    
</html>
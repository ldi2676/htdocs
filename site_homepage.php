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
        안녕하세요.<?php echo $_GET['name'];?> 님 <!--http://127.0.0.1/site_homepage.php?name=doi-->
        <ol>
            <li><a href ="index.php?id=HTML">HTML</a></li>
            <li><a href ="index.php?id=CSS">CSS</a></li>
            <li><a href ="index.php?id=JavaScript">JavaScript</a></li>
	        <li><a href ="index.php?id=WEB">WEB</a></li>
        </ol>
        <h2><a href="https://ko.wikipedia.org/wiki/HTML" target="_blank">html</a></h2>
        <p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tZooW6PritE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </p>
        HTML은 하이퍼텍스트 마크업 언어(HyperText Markup Language, 문화어: 초본문표식달기언어, 하이퍼본문표식달기언어)라는 의미의 웹 페이지를 위한 지배적인 마크업 언어다. HTML은 제목, 단락, 목록 등과 같은 본문을 위한 구조적 의미를 나타내는 것뿐만 아니라 링크, 인용과 그 밖의 항목으로 구조적 문서를 만들 수 있는 방법을 제공한다. 그리고 이미지와 객체를 내장하고 대화형 양식을 생성하는 데 사용될 수 있다. HTML은 웹 페이지 콘텐츠 안의 꺾쇠 괄호에 둘러싸인 "태그"로 되어있는 HTML 요소 형태로 작성한다. HTML은 웹 브라우저와 같은 HTML 처리 장치의 행동에 영향을 주는 자바스크립트와 본문과 그 밖의 항목의 외관과 배치를 정의하는 CSS 같은 스크립트를 포함하거나 불러올 수 있다. HTML과 CSS 표준의 공동 책임자인 W3C는 명확하고 표상적인 마크업을 위하여 CSS의 사용을 권장한다.[1]
        <div id="disqus_thread"></div>
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
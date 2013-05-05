<?php
/* @var SiteController $this */
$this->pageTitle = param('pageTitle');
?>
<div class="jumbotron masthead">
    <div class="container">
        <h1>Yiistrap</h1>

        <p>Twitter Bootstrap for Yii</p>

        <p><a href="https://github.com/Crisu83/yiistrap/archive/master.zip" class="btn btn-inverse btn-large"
              onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download 1.0.0']);">Download
                Yiistrap</a></p>
        <ul class="masthead-links">
            <li><a href="http://github.com/Crisu83/yiistrap"
                   onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'GitHub project']);">GitHub
                    project</a></li>
            <li>Version 1.0.0</li>
        </ul>
    </div>
</div>

<div class="bs-docs-social">
    <div class="container">
        <ul class="bs-docs-social-buttons">
			<li>
				<iframe width="85" height="20" src="http://ghbtns.com/github-btn.html?user=Crisu83&repo=yiistrap&type=watch&count=true" frameborder="0" scrolling="0" allowtransparency="true"></iframe>
			</li>
			<li>
				<iframe width="95" height="20" src="http://ghbtns.com/github-btn.html?user=Crisu83&repo=yiistrap&type=fork&count=true" frameborder="0" scrolling="0" allowtransparency="true"></iframe>
			</li>
            <li>
                <a href="https://twitter.com/Crisu83" class="twitter-follow-button" data-align="right" data-width="242px" data-show-count="true">Follow @Crisu83</a>
            </li>
            <li>
                <a href="https://twitter.com/tonydspaniard" class="twitter-follow-button" data-align="right" data-width="242px" data-show-count="true">Follow @tonydspaniard</a>
            </li>
			<li>
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.getyiistrap.com" data-count="horizontal" data-via="Crisu83" data-related="Crisu83:Yiistrap">Tweet</a>
			</li>
        </ul>
    </div>
</div>
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;

            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>
<div class="container">

    <div class="marketing">

        <h1>Introducing Yiistrap</h1>

        <p class="marketing-byline">Yiistrap is the new generation of the Yii-Bootstrap extension.</p>

        <div class="row-fluid">
            <div class="span4">
                <h2>Faster</h2>
                <p style="text-align:justify">
                    <a href="http://www.cniska.net/yii-bootstrap/" target="_blank">Yii-Bootstrap</a> was an awesome extension library, but it was too widget hierarchical, thus slow compared to this new approach. We though that we could replace all that with a robust html helper, and to tell you truth, we are very happy with the results.
                </p>
            </div>
            <div class="span4">
                <h2>Easier</h2>
                <p style="text-align:justify">
                    The decision of removing the hierarchy of widgets made the codebase of the extension cleaner, easier to understand, to improve and to extend from. We expect that this new version is for you the ultimate tool to include <a href="twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap</a> in your Yii projects.
                </p>
            </div>
            <div class="span4">
                <h2>Better</h2>
                <p style="text-align:justify">
                    In the past other libraries extended from the old <a href="http://www.cniska.net/yii-bootstrap/" target="_blank">Yii-Bootstrap</a> and confused the community as there was two versions of nearly the same extension. Yiistrap has combined forces with <a href="http://2amigos.us" target="_blank">2amigOS!</a> to have its own enhanced library: <a href="http://yiiwheels.2amigos.us" target="_blank">YiiWheels</a>.
                </p>
            </div>
        </div>
    </div>
</div>
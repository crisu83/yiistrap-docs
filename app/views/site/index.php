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
            <li>Version 1.2.0</li>
        </ul>
    </div>
</div>

<div class="bs-docs-social">
    <div class="container">
        <ul class="bs-docs-social-buttons">
			<li>
				<iframe width="85" height="20" src="http://ghbtns.com/github-btn.html?user=Crisu83&repo=yiistrap&type=watch&count=true" frameborder="0" scrolling="0" allowtransparency="true"></iframe>
				<iframe width="95" height="20" src="http://ghbtns.com/github-btn.html?user=Crisu83&repo=yiistrap&type=fork&count=true" frameborder="0" scrolling="0" allowtransparency="true"></iframe>
			</li>
            <li>
                <a href="https://twitter.com/Crisu83" class="twitter-follow-button" data-align="right" data-width="196px" data-show-count="true">Follow @Crisu83</a>
			</li>
			<li>
                <a href="https://twitter.com/tonydspaniard" class="twitter-follow-button" data-align="right" data-width="233px" data-show-count="true">Follow @tonydspaniard</a>
            </li>
			<li class="add-this">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_google"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
				</div>
				<!-- AddThis Button END -->
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
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f362fc83fc39768"></script>
<div class="container">

    <div class="marketing">

        <h1>Introducing Yiistrap</h1>
        <p class="marketing-byline">The ultimate Twitter Bootstrap extension for Yii.</p>

        <div class="row-fluid">
            <div class="col-md-4">
                <h2>More robust.</h2>
                <p style="text-align:justify">
                    Yiistrap is a complete rewrite of the popular <a href="http://www.cniska.net/yii-bootstrap/" target="_blank">yii-bootstrap</a> extension.
                    Yii-Bootstrap was more or less a collection of widget which made it almost possible to extend.
                    We have learned from our mistakes built Yiistrap on robust helper classes to make it easy to work with.
                </p>
            </div>
            <div class="col-md-4">
                <h2>Easy to use.</h2>
                <p style="text-align:justify">
                    You can <?php echo l('get started', array('/site/started')); ?> with Yiistrap in no time,
                    even without any prior knowledge in <a href="http://getbootstrap.com/2.3.2/" target="_blank">Twitter Bootstrap</a> itself.
                    Yiistrap provides helper methods for all Bootstrap components as well as widgets for the more complex components.
                    You can also use the helpers to build your own widgets.
                </p>
            </div>
            <div class="col-md-4">
                <h2>More widgets.</h2>
                <p style="text-align:justify">
                    Yiistrap has its own extension library <a href="http://github.com/Crisu83/yiistrap-widgets" target="_blank">yiistrap-widgets</a>,
                    which already includes some useful widgets for <a href="http://ivaynberg.github.io/select2/select2-latest.html" target="_blank">Select2</a>, <a href="http://www.malot.fr/bootstrap-datetimepicker/" target="_blank">DateTime Picker</a>, <a href="http://jhollingworth.github.io/bootstrap-wysihtml5/" target="_blank">Wysihtml5</a> and <a href="http://blueimp.github.io/jQuery-File-Upload/" target="_blank">jQuery File Upload</a>.
                    <a href="http://2amigos.us" target="_blank">2amigOS!</a> also maintain their own extension library called <a href="http://yiiwheels.2amigos.us" target="_blank">YiiWheels</a> that includes many more widgets.
                </p>
            </div>
        </div>
    </div>
</div>
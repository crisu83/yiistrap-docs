<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Getting started</h1>

        <p class="lead">How to configure the library on your Yii Applications</p>
    </div>
</header>


<div class="container">

    <!-- Docs nav
   ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#download-booster"><i class="icon-chevron-right"></i> Download</a></li>
                <li><a href="#configuration"><i class="icon-chevron-right"></i> Configure</a></li>
                <li><a href="#contents"><i class="icon-chevron-right"></i> What's included</a></li>
                <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
            </ul>
        </div>
        <div class="span9">


            <!-- Download
		   ================================================== -->
            <section id="download-booster">
                <div class="page-header">
                    <h1>1. Download</h1>
                </div>
                <p class="lead">Download the package and unzip its contents on your extensions folder. We highly
                    recommend
                    the use of <a href="http://getcomposer.org" target="_blank">Composer</a> to manage your
                    dependencies.
                    If you have problems to install it, you can check the preconfigured project boilerplates at
                    <a href="http://yiinitializr.2amigos.us" target="_blank">Yiinitializr</a> or
                    <a href="http://www.yiiframework.com/wiki/446/kickstart-development-with-yii-app/" target="_blank">Yii-app</a>
                </p>
            </section>


            <!-- File structure
		   ================================================== -->
            <section id="configuration">
                <div class="page-header">
                    <h1>2. Edit your application configuration</h1>
                </div>
                <p class="lead">Unzip the extension under <strong>protected/extensions/bootstrap</strong>, the structure
                    of your (Yii's default) application should look like this:</p>
<pre class="prettyprint">
  protected/
  └── extensions
        └── bootstrap
            ├── assets
            │   ├── css
            │	├── img
            │	├── js
            │	└── less
            ├── components
            │		TbApi.php
            ├── helpers
            └── widgets
                └── *
</pre>
                <p>Now, that we have placed the library where it belongs, lets configure the component. On your <strong>main.php</strong>
                    config file:</p>
<pre class="prettyprint">
...
// according to the above structure (Yii's default)
'aliases' => array(
    ...
    'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'),
    ...
),
'components' => array(
	...
	'bootstrap' => array(
	    'class' => 'bootstrap.components.TbApi',   
	),
	...
),
...
</pre>
                <p>You are done now</p>
            </section>
            <!-- Next
		   ================================================== -->
            <section id="what-next">
                <div class="page-header">
                    <h1>What next?</h1>
                </div>
                <p class="lead">Head to the docs for information, code snippets, and/or the API.</p>

                <p class="lead">
                    <a class="btn btn-large btn-primary" href="<?php echo $this->createUrl('site/docs'); ?>"
                       onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Visit docs']);">Yiistrap
                        docs</a>
                    <a class="btn btn-large btn-warning" href="<?php echo $this->createUrl('site/api'); ?>"
                       onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Visit API']);">Yiistrap
                        API</a>
                </p>
            </section>
        </div>
    </div>

</div>
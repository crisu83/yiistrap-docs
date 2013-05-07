<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <meta name="keywords" content="yii framework, yii application, yii application development, php framework, yii bootstrap, yii framework tutorial, yii php framework, yii bootstrap, yiistrap"/>
	<?php css('css/styles.css'); ?>
	<?php css('js/google-code-prettify/prettify.css'); ?>
    <?php js('js/google-code-prettify/prettify.js'); ?>
    <?php js('js/google-code-prettify/prettify.js'); ?>
    <?php js('js/holder.js'); ?>
	<?php js('js/app.js', CClientScript::POS_END); ?>
    <title><?php echo e($this->pageTitle); ?></title>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo baseUrl('favicon.ico'); ?>">
    <style id="holderjs-style" type="text/css">
        .holderjs-fluid {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            font-family: sans-serif;
            margin: 0
        }
    </style>
</head>
<body class="layout-main" data-spy="scroll" data-target=".bs-docs-sidebar">
<!-- Navbar -->
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'brandLabel' => img('images/logo-navbar.png') . ' ' . e(Yii::app()->name) . ' <small>BETA</small>',
	'brandUrl' => baseUrl('site/index'),
	//'collapse' => true,
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbNav',
			'items' => array(
				array('label' => 'Home', 'url' => array('site/index')),
				array('label' => 'Get started', 'url' => array('site/started')),
				array('label' => 'Basics', 'url' => array('site/basics')),
				array('label' => 'Components', 'url' => array('site/components')),
				array('label' => 'Widgets', 'url' => array('site/widgets')),
				array('label' => 'API', 'url' => $this->createUrl('/api'))
			),
		),
	),
));
?>
<!-- Content -->
<?php echo $content; ?>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="text-center">
            <p class="credits">
                Developed by <a href="http://www.cniska.net" target="_blank">Christoffer Niska</a> and <a href="http://www.ramirezcobos.com/" target="_blank">Antonio Ramirez</a>, Graphics by <a href="http://www.kevinvanderven.com" target="_blank">Kevin van der Ven</a>.
            </p>
            <p class="license">
                Code licensed under <a href="http://opensource.org/licenses/BSD-3-Clause">BSD-3-Clause License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.
            </p>
        </div>
    </div>
</footer>
</body>
</html>

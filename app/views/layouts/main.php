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
	<?php js('/js/app.js', CClientScript::POS_END); ?>
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
	'brandLabel' => e(Yii::app()->name),
	'brandUrl' => baseUrl('site/index'),
	'collapse' => true,
	'position' => TbHtml::NAVBAR_TOP,
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
        <p class="powered">
            Powered by <a target="_blank" href="http://www.yiiframework.com">Yii PHP framework</a> /
			<a target="_blank" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> /
			<a target="_blank" href="http://www.jquery.com">jQuery</a>
		</p>
        <p class="copy">
			Copyright &copy; <?php echo date('Y'); ?> by Christoffer Niska
		</p>
    </div>
</footer>
</body>
</html>

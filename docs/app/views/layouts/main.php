<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <meta name="keywords"
          content="yii framework, yii application, yii application development, php framework, yii bootstrap, yii framework tutorial, yii php framework, yii bootstrap, yiistrap"/>
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo $this->baseUrl('/css/screen.css'); // using $this->baseUrl() shortcut @see global.php ?>"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseUrl('/css/print.css'); ?>" media="print"/>
    <link href="<?php echo $this->baseUrl('/js/google-code-prettify/prettify.css'); ?>" rel="stylesheet">
    <script src="<?php echo $this->baseUrl('/js/google-code-prettify/prettify.js'); ?>"></script>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseUrl('/css/ie.css');?>"
          media="screen, projection"/>
    <![endif]-->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link href="<?php echo $this->baseUrl('/css/styles.css'); ?>" rel="stylesheet"/>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $this->baseUrl('images/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo $this->baseUrl('images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo $this->baseUrl('images/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo $this->baseUrl('images/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo $this->baseUrl('images/ico/apple-touch-icon-57-precomposed.png'); ?>">

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-4350274-1']);
        _gaq.push(['_setDomainName', 'clevertech.biz']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
<!-- Navbar -->
<?php $this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'brandLabel' => CHtml::encode(Yii::app()->name),
        'brandUrl'   => $this->baseUrl('site/index'),
        'collapse'   => true, // requires bootstrap-responsive.css
        'items'      => array(
            array(
                'class' => 'bootstrap.widgets.TbNav',
                'items' => array(
                    array('label' => 'Home', 'url' => array('site/index')),
                    array('label' => 'Get started', 'url' => array('site/started')),
                    array('label' => 'Docs', 'url' => array('site/docs')),
                    array('label' => 'API', 'url' => array('site/api'))
                ),
            ),

        ),
    )
);
?>
<?php echo $content; ?>
<footer class="footer">
    <div class="container">
        <p class="powered">
            Powered by <a target="_blank" href="http://www.yiiframework.com">Yii PHP framework</a> /
            <a target="_blank" href="http://www.jquery.com">jQuery</a> /
            <a target="_blank" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> /

        <p class="copy">Copyright &copy; <?php echo date('Y'); ?> by Christoffer Niska </p>
    </div>
</footer>
<!-- footer -->
<script src="<?php echo $this->baseUrl('/js/app.js'); ?>"></script>
</body>
</html>

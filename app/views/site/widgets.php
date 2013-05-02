<?php
/* @var SiteController $this */
?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead">
	<div class="container">
		<h1>Widgets <small>bootstrap.widgets</small></h1>
	</div>
</header>

<div class="container">

	<!-- Docs nav
	================================================== -->
	<div class="row">
	<div class="span3 bs-docs-sidebar">
		<ul class="nav nav-list bs-docs-sidenav">
			<li><a href="#navs"><i class="icon-chevron-right"></i> Navs</a></li>
			<li><a href="#navbar"><i class="icon-chevron-right"></i> Navbar</a></li>
			<li><a href="#breadcrumbs"><i class="icon-chevron-right"></i> Breadcrumbs</a></li>
			<li><a href="#herounit"><i class="icon-chevron-right"></i> Hero unit</a></li>
			<li><a href="#gridview"><i class="icon-chevron-right"></i> Grid view</a></li>
			<li><a href="#detailview"><i class="icon-chevron-right"></i> Detail view</a></li>
			<li><a href="#forms"><i class="icon-chevron-right"></i> Forms</a></li>
			<li><a href="#modals"><i class="icon-chevron-right"></i> Modal</a></li>
			<li><a href="#scrollspy"><i class="icon-chevron-right"></i> Scrollspy</a></li>
			<li><a href="#tabs"><i class="icon-chevron-right"></i> Tab</a></li>
			<li><a href="#tooltips"><i class="icon-chevron-right"></i> Tooltip</a></li>
			<li><a href="#popovers"><i class="icon-chevron-right"></i> Popover</a></li>
			<li><a href="#alert"><i class="icon-chevron-right"></i> Alert</a></li>
			<li><a href="#collapse"><i class="icon-chevron-right"></i> Collapse</a></li>
			<li><a href="#carousel"><i class="icon-chevron-right"></i> Carousel</a></li>
			<li><a href="#typeahead"><i class="icon-chevron-right"></i> Typeahead</a></li>
			<li><a href="#affix"><i class="icon-chevron-right"></i> Affix</a></li>
		</ul>
	</div>
	<div class="span9">

<!-- Navigation
================================================== -->
<section id="navs">

	<?php $dropdownConfig = array(
		array('label' => 'Action', 'url' => '#'),
		array('label' => 'Another action', 'url' => '#'),
		array('label' => 'Something else here', 'url' => '#'),
		TbHtml::menuDivider(),
		array('label' => 'Separate link', 'url' => '#'),
	); ?>

	<div class="page-header">
		<h1>Navigation <small><a href="#">TbNav</a></small></h1>
	</div>

	<h3>Basic tabs</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNav', array(
			'style' => TbHtml::NAV_TABS,
			'items' => array(
				array('label' => 'Home', 'url' => '#', 'active' => true),
				array('label' => 'Profile', 'url' => '#',),
				array('label' => 'Messages', 'url' => '#',),
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_TABS,
    'items' => array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Profile', 'url' => '#',),
        array('label' => 'Messages', 'url' => '#',),
    ),
)); ?></pre>

	<h3>Basic pills</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNav', array(
			'style' => TbHtml::NAV_PILLS,
			'items' => array(
				array('label' => 'Home', 'url' => '#', 'active' => true),
				array('label' => 'Profile', 'url' => '#',),
				array('label' => 'Messages', 'url' => '#',),
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_PILLS,
    'items' => array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Profile', 'url' => '#',),
        array('label' => 'Messages', 'url' => '#',),
    ),
)); ?></pre>

	<h3>Disabled state</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNav', array(
			'style' => TbHtml::NAV_PILLS,
			'items' => array(
				array('label' => 'Clickable link', 'url' => '#'),
				array('label' => 'Clickable link', 'url' => '#'),
				array('label' => 'Disabled link', 'url' => '#', 'disabled' => true),
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_PILLS,
    'items' => array(
        array('label' => 'Clickable link', 'url' => '#'),
        array('label' => 'Clickable link', 'url' => '#'),
        array('label' => 'Disabled link', 'url' => '#', 'disabled' => true),
    ),
)); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Stackable</h2>

	<h3>Stacked tabs</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNav', array(
			'style' => TbHtml::NAV_TABS,
			'stacked' => true,
			'items' => array(
				array('label' => 'Home', 'url' => '#', 'active' => true),
				array('label' => 'Profile', 'url' => '#',),
				array('label' => 'Messages', 'url' => '#',),
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_TABS,
    'stacked' => true,
    ...
)); ?></pre>

	<h3>Stacked pills</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNav', array(
			'style' => TbHtml::NAV_PILLS,
			'stacked' => true,
			'items' => array(
				array('label' => 'Home', 'url' => '#', 'active' => true),
				array('label' => 'Profile', 'url' => '#',),
				array('label' => 'Messages', 'url' => '#',),
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_PILLS,
    'stacked' => true,
    ...
)); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Dropdowns</h2>

	<h3>Tabs with dropdowns</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNav', array(
			'style' => TbHtml::NAV_TABS,
			'items' => array(
				array('label' => 'Home', 'url' => '#', 'active' => true),
				array('label' => 'Help', 'url' => '#'),
				array('label' => 'Dropdown', 'items' => $dropdownConfig),
			)
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_TABS,
    'items' => array(
        ...
        array('label' => 'Dropdown', 'items' => array(
            array('label' => 'Action', 'url' => '#'),
            array('label' => 'Another action', 'url' => '#'),
            array('label' => 'Something else here', 'url' => '#'),
            TbHtml::menuDivider(),
            array('label' => 'Separate link', 'url' => '#'),
        ),
    ),
)); ?></pre>

	<h3>Pills with dropdowns</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNav', array(
			'style' => TbHtml::NAV_PILLS,
			'items' => array(
				array('label' => 'Home', 'url' => '#', 'active' => true),
				array('label' => 'Help', 'url' => '#'),
				array('label' => 'Dropdown', 'items' => $dropdownConfig),
			)
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_PILLS,
    'items' => array(
        ...
        array('label' => 'Dropdown', 'items' => array(
            array('label' => 'Action', 'url' => '#'),
            array('label' => 'Another action', 'url' => '#'),
            array('label' => 'Something else here', 'url' => '#'),
            TbHtml::menuDivider(),
            array('label' => 'Separate link', 'url' => '#'),
        ),
    ),
)); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Nav lists</h2>

	<div class="bs-docs-example">
		<div class="well" style="max-width: 340px; padding: 8px 0;">
			<?php $this->widget('bootstrap.widgets.TbNav', array(
				'style' => TbHtml::NAV_LIST,
				'items' => array(
					array('label' => 'List header'),
					array('label' => 'Home', 'url' => '#', 'active' => true),
					array('label' => 'Library', 'url' => '#'),
					array('label' => 'Applications', 'url' => '#'),
					array('label' => 'Another list header'),
					array('label' => 'Profile', 'url' => '#'),
					array('label' => 'Settings', 'url' => '#'),
					TbHtml::menuDivider(),
					array('label' => 'Help', 'url' => '#'),
				)
			)); ?>
		</div>
	</div>

	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_LIST,
    'items' => array(
        array('label' => 'List header'),
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Library', 'url' => '#'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Another list header'),
        array('label' => 'Profile', 'url' => '#'),
        array('label' => 'Settings', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Help', 'url' => '#'),
    )
));
	</pre>

</section>

<!-- Navbar
	================================================== -->
<section id="navbar">

	<?php $navbarNav = array(
		'class' => 'bootstrap.widgets.TbNav',
		'items' => array(
			array('label' => 'Home', 'url' => '#', 'active' => true),
			array('label' => 'Link', 'url' => '#'),
			array('label' => 'Link', 'url' => '#'),
		),
	); ?>

	<?php $navbarItems = array(
		array(
			'class' => 'bootstrap.widgets.TbNav',
			'items' => array(
				array('label' => 'Home', 'url' => '#', 'active' => true),
				array('label' => 'Link', 'url' => '#'),
				array('label' => 'Link', 'url' => '#'),
				array('label' => 'Dropdown', 'items' => array(
					array('label' => 'Action', 'url' => '#'),
					array('label' => 'Another action', 'url' => '#'),
					array('label' => 'Something else here', 'url' => '#'),
					TbHtml::menuDivider(),
					array('label' => 'Nav header'),
					array('label' => 'Separated link', 'url' => '#'),
					array('label' => 'One more separated link', 'url' => '#'),
				)),
			),
		),
		TbHtml::navbarSearchForm('#'),
		array(
			'class' => 'bootstrap.widgets.TbNav',
			'htmlOptions' => array('class' => 'pull-right'),
			'items' => array(
				array('label' => 'Link', 'url' => '#'),
				array('label' => 'Dropdown', 'items' => $dropdownConfig),
			),
		),
	); ?>

	<div class="page-header">
		<h1>Navbar <small><a href="#">TbNavbar</a></small></h1>
	</div>

	<h2>Basic navbar</h2>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
			'brandLabel' => 'Title',
			'items' => array($navbarNav),
		));	?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Title',
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Link', 'url' => '#'),
            ),
        ),
    ),
)); ?></pre>

	<hr class="bs-docs-separator">

	<h3>Search form</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
			'brandLabel' => 'Title',
			'items' => array(
				TbHtml::navbarSearchForm('#'),
			),
		));
		?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Title',
    'items' => array(
        TbHtml::navbarSearchForm('#'),
    ),
));</pre>

		<hr class="bs-docs-separator">

		<h2>Optional display variations</h2>

		<h3>Fixed to top</h3>

		<p class="muted">Coming soon!</p>

		<h3>Fixed to bottom</h3>

		<p class="muted">Coming soon!</p>

		<h3>Static top navbar</h3>

		<p class="muted">Coming soon!</p>

		<hr class="bs-docs-separator">

		<h2>Responsive navbar</h2>

		<div class="bs-docs-example">
			<?php $this->widget('bootstrap.widgets.TbNavbar', array(
				'brandLabel' => 'Title',
				'collapse' => true,
				'items' => $navbarItems
			));	?>
		</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Title',
    'collapse' => true,
    'items' => array(...),
)); ?></pre>

		<hr class="bs-docs-separator">

		<h2>Inverted variation</h2>

		<div class="bs-docs-example">
			<?php $this->widget('bootstrap.widgets.TbNavbar', array(
				'style' => TbHtml::STYLE_INVERSE,
				'brandLabel' => 'Title',
				'collapse' => true,
				'items' => $navbarItems,
			));	?>
		</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'style' => TbHtml::STYLE_INVERSE,
    'brandLabel' => 'Title',
    'collapse' => true,
    'items' => array(...),
)); ?></pre>

</section>

<!-- Breadcrumbs
================================================== -->
<section id="breadcrumbs">

	<div class="page-header">
		<h1>Breadcrumbs <small><a href="#">TbBreadcrumb</a></small></h1>
	</div>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
			'homeLabel' => 'Home',
			'links' => array('Library'),
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
			'homeLabel' => 'Home',
			'links' => array(
				'Library' => '#',
				'Data',
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        'Library' => '#',
        'Data',
    ),
)); ?>
</pre>

<!-- Hero unit
	================================================== -->
<section id="herounit">

	<div class="page-header">
		<h1>Hero unit <small><a href="#">TbHeroUnit</a></small></h1>
	</div>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
			'heading' => 'Hello, world!',
			'content' => '<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>' . TbHtml::button('Learn more', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Hello, world!',
    'content' => '&lt;p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p>' . TbHtml::button('Learn more', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)),
)); ?></pre>

	<h4>Using a view</h4>

	<p><?php echo TbHtml::labelTb('Head up!', array('style' => TbHtml::STYLE_INFO)); ?> You can also use a view instead of a string as content by passing the path or alias to that view as the content attribute.</p>

</section>

<!-- Alerts
	================================================== -->
<section id="alerts">

	<div class="page-header">
		<h1>Alerts <small><a href="#">TbAlert</a></small></h1>
	</div>

	<h2>Default alert</h2>

	<div class="bs-docs-example">
		<?php Yii::app()->user->setFlash(TbHtml::STYLE_WARNING, '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.'); ?>
		<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	</div>

	<pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::STYLE_WARNING,
    '&lt;strong>Warning!&lt;/strong> Best check yo self, you\'re not looking too good.');

&lt;?php $this->widget('bootstrap.widgets.TbAlert'); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Block</h2>

	<div class="bs-docs-example">
		<?php Yii::app()->user->setFlash(TbHtml::STYLE_WARNING, '<h4>Warning!</h4> Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'); ?>
		<?php $this->widget('bootstrap.widgets.TbAlert', array(
			'block' => true,
		)); ?>
	</div>

	<pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::STYLE_WARNING,
    '&lt;h4>Warning!&lt;/h4> Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.');

&lt;?php $this->widget('bootstrap.widgets.TbAlert', array(
    'block'=>true,
)); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Contextual alternatives</h2>

	<h3>Error or danger</h3>

	<div class="bs-docs-example">
		<?php Yii::app()->user->setFlash(TbHtml::STYLE_ERROR, '<strong>Oh snap!</strong> Change a few things up and try submitting again.'); ?>
		<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	</div>

	<pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::STYLE_ERROR,
    '&lt;strong>Oh snap!&lt;/strong> Change a few things up and try submitting again.');</pre>

		<h3>Success</h3>

		<div class="bs-docs-example">
			<?php Yii::app()->user->setFlash(TbHtml::STYLE_SUCCESS, '<strong>Well done!</strong> You successfully read this important alert message.'); ?>
			<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
		</div>
	<pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::STYLE_SUCCESS,
    '&lt;strong>Well done!&lt;/strong> You successfully read this important alert message.');</pre>

	<h3>Information</h3>

	<div class="bs-docs-example">
		<?php Yii::app()->user->setFlash(TbHtml::STYLE_INFO, '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.'); ?>
		<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	</div>

	<pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::STYLE_INFO,
    '&lt;strong>Heads up!&lt;/strong> This alert needs your attention, but it\'s not super important.');</pre>

</section>

<!-- Grid view
================================================== -->
<section id="gridview">

	<?php
	$gridDataProvider = new CArrayDataProvider(array(
		array('id' => 1, 'firstName' => 'Mark', 'lastName' => 'Otto', 'username' => '@mdo'),
		array('id' => 2, 'firstName' => 'Jacob', 'lastName' => 'Thornton', 'username' => '@fat'),
		array('id' => 3, 'firstName' => 'Larry', 'lastName' => 'the Bird', 'username' => '@twitter'),
	));

	$gridColumns = array(
		array('name' => 'id', 'header' => '#', 'htmlOptions' => array('style' => 'width: 60px')),
		array('name' => 'firstName', 'header' => 'First name'),
		array('name' => 'lastName', 'header' => 'Last name'),
		array('name' => 'username', 'header' => 'Username'),
	);
	?>

	<div class="page-header">
		<h1>Grid view <small><a href="#">TbGridView</a></small></h1>
	</div>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbGridView', array(
			'dataProvider' => $gridDataProvider,
			'template' => "{items}",
			'columns' => $gridColumns,
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
   'dataProvider' => $gridDataProvider,
   'template' => "{items}",
   'columns' => array(
        array('name' => 'id', 'header' => '#', 'htmlOptions' => array('style' => 'width: 60px')),
        array('name' => 'firstName', 'header' => 'First name'),
        array('name' => 'lastName', 'header' => 'Last name'),
        array('name' => 'username', 'header' => 'Username'),
    ),
)); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Optional styles</h2>

	<h3>Striped</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbGridView', array(
			'style' => TbHtml::GRID_STRIPED,
			'dataProvider' => $gridDataProvider,
			'template' => "{items}",
			'columns' => $gridColumns,
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'style' => TbHtml::GRID_STRIPED,
    ...
)); ?></pre>

	<h3>Bordered</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbGridView', array(
			'style' => TbHtml::GRID_BORDERED,
			'dataProvider' => $gridDataProvider,
			'template' => "{items}",
			'columns' => $gridColumns,
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'style' => TbHtml::GRID_BORDERED,
    ...
)); ?></pre>

	<h3>Hover</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbGridView', array(
			'style' => TbHtml::GRID_HOVER,
			'dataProvider' => $gridDataProvider,
			'template' => "{items}",
			'columns' => $gridColumns,
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'style' => TbHtml::GRID_HOVER,
    ...
)); ?></pre>

	<h3>Condensed</h3>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbGridView', array(
			'style' => TbHtml::GRID_CONDENSED,
			'dataProvider' => $gridDataProvider,
			'template' => "{items}",
			'columns' => $gridColumns,
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'style' => TbHtml::GRID_CONDENSED,
    ...
)); ?></pre>

	<p><?php echo TbHtml::labelTb('Heads up!', array('style' => TbHtml::STYLE_INFO)); ?> You can also combine table styles by providing multiple values.</p>

</section>

<!-- Detail view
	================================================== -->
<section id="detailview">

	<h1>Detail view <small><a href="#">TbDetailView</a></small></h1>

	<p class="muted">Coming soon!</p>

</section>

<!-- Forms
	================================================== -->
<section id="forms">

	<div class="page-header">
		<h1>Forms <small><a href="#">TbActiveForm</a></small></h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>

	<!-- Modal
	================================================== -->
	<section id="modals">

		<div class="page-header">
			<h1>Modals <small><a href="#">TbModal</a></small></h1>
		</div>

		<div class="bs-docs-example" style="background-color: #f5f5f5;">
			<?php
			// we just want the scripts
			$this->widget(
				'bootstrap.widgets.TbModal',
				array(
					'id' => 'myModal',
					'header' => '<h4>Modal header</h4>',
					'content' => '<p>One fine body...</p>',
					'footer' =>
					TbHtml::button(
						'Save Changes',
						array('data-dismiss' => 'modal', 'style' => TbHtml::STYLE_PRIMARY)
					) . '&nbsp;' .
						TbHtml::button('Close', array('data-dismiss' => 'modal'))

				)
			);
			?>
			<?php
			echo TbHtml::button('Click me to open modal', array('data-toggle' => 'modal', 'data-target' => '#myModal'));
			?>
		</div>
<pre class="prettyprint linenums">
&lt;?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>

    &lt;div class="modal-header"&gt;
        &lt;a class="close" data-dismiss="modal">&times;&lt;/a&gt;
    &lt;h4>Modal header&lt;/h4&gt;
    &lt;/div&gt;

&lt;div class="modal-body"&gt;
    &lt;p>One fine body...&lt;/p&gt;
&lt;/div>

&lt;div class="modal-footer"&gt;
	&lt;?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'label'=>'Save changes',
	'url'=>'#',
	'htmlOptions'=>array('data-dismiss'=>'modal'),
)); ?&gt;
	&lt;?php $this->widget('bootstrap.widgets.TbButton', array(
	'label'=>'Close',
	'url'=>'#',
	'htmlOptions'=>array('data-dismiss'=>'modal'),
)); ?&gt;
&lt;/div&gt;
&lt;?php $this->endWidget(); ?&gt;
	&lt;?php $this->widget('bootstrap.widgets.TbButton', array(
	'label'=>'Click me',
	'type'=>'primary',
	'htmlOptions'=>array(
		'data-toggle'=>'modal',
		'data-target'=>'#myModal',
	),
)); ?&gt;
</pre>

		<hr class="bs-docs-separator">

	</section>

	<!-- Scrollspy
	================================================== -->
	<section id="scrollspy">

		<div class="page-header">
			<h1>Scrollspy <small><a href="#">TbScrollspy</a></small></h1>
		</div>

		<p class="muted">Coming soon!</p>

	</section>

	<!-- Tabs
	================================================== -->
	<section id="tabs">
		<div class="page-header">
			<h1>Togglable tabs <small><a href="#">TbTabs</a></small></h1>
		</div>

		<h2>Example tabs</h2>

		<p>We didn't play with the <a href="components.html#navs">placement property </a>. Let's do it now.</p>

		<div class="bs-docs-example">
	      <span class="span4">
		  <h3>Top Placement</h3>
			  <?php $this->widget(
				  'bootstrap.widgets.TbTabs',
				  array(
					  'type' => 'tabs',
					  'tabs' => array(
						  array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
						  array('label' => 'Profile', 'content' => 'Profile Content'),
						  array('label' => 'Messages', 'content' => 'Messages Content'),
					  ),
				  )
			  ); ?>
		  </span>
	      <span class="span4">
		      <h3>Bottom Placement</h3>
			  <?php $this->widget(
				  'bootstrap.widgets.TbTabs',
				  array(
					  'type' => 'tabs',
					  'placement' => 'below',
					  'tabs' => array(
						  array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
						  array('label' => 'Profile', 'content' => 'Profile Content'),
						  array('label' => 'Messages', 'content' => 'Messages Content'),
					  ),
				  )
			  ); ?>
	      </span>

			<div style="clear:both"></div>
	      <span class="span4">
		      <h3>Left Placement</h3>
			  <?php $this->widget(
				  'bootstrap.widgets.TbTabs',
				  array(
					  'type' => 'tabs',
					  'placement' => 'left',
					  'tabs' => array(
						  array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
						  array('label' => 'Profile', 'content' => 'Profile Content'),
						  array('label' => 'Messages', 'content' => 'Messages Content'),
					  ),
				  )
			  ); ?>
		  </span>
	      <span class="span4">
		      <h3>Right Placement</h3>
			  <?php $this->widget(
				  'bootstrap.widgets.TbTabs',
				  array(
					  'type' => 'tabs',
					  'placement' => 'right',
					  'tabs' => array(
						  array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
						  array('label' => 'Profile', 'content' => 'Profile Content'),
						  array('label' => 'Messages', 'content' => 'Messages Content'),
					  ),
				  )
			  ); ?>
	      </span>

			<div style="clear:both"></div>
		</div>
	</section>


	<!-- Tooltips
	================================================== -->
	<section id="tooltips">

		<div class="page-header">
			<h1>Tooltips <small><a href="#">TbTooltip</a></small></h1>
		</div>

		<h2>Examples
			<small>from Twitter Booster docs -no need to rewrite same info</small>
		</h2>
		<p>Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which
			don't rely on images, use CSS3 for animations, and data-attributes for local title storage.</p>

		<p>Hover over the links below to see tooltips:</p>

		<div class="bs-docs-example tooltip-demo">
			<p class="muted" style="margin-bottom: 0;">
				Tight pants next level keffiyeh <a href="#" rel="tooltip" title="Default tooltip">you probably</a>
				haven't
				heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table
				seitan,
				mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel="tooltip"
																			   title="Another tooltip">have a</a> terry
				richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel
				williamsburg
				marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" rel="tooltip"
																								title="Another one here too">whatever
					keytar</a>, scenester farm-to-table banksy Austin twitter handle freegan cred raw denim
				single-origin
				coffee
				viral.
			</p>
		</div>

		<h3>Four directions</h3>

		<div class="bs-docs-example tooltip-demo">
			<ul class="bs-docs-tooltip-examples">
				<li><a href="#" rel="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a></li>
				<li><a href="#" rel="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
				<li><a href="#" rel="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a>
				</li>
				<li><a href="#" rel="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
			</ul>
		</div>
		<hr class="bs-docs-separator">

		<h2>Usage</h2>

		<p>Trigger the tooltip via JavaScript:</p>
		<pre class="prettyprint linenums">$('#example').tooltip(options)</pre>

		<h3>Options</h3>

		<p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
			<code>data-</code>,
			as in <code>data-animation=""</code>.</p>
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th style="width: 100px;">Name</th>
				<th style="width: 100px;">type</th>
				<th style="width: 50px;">default</th>
				<th>description</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>animation</td>
				<td>boolean</td>
				<td>true</td>
				<td>apply a css fade transition to the tooltip</td>
			</tr>
			<tr>
				<td>html</td>
				<td>boolean</td>
				<td>true</td>
				<td>Insert html into the tooltip. If false, jquery's <code>text</code> method will be used to insert
					content
					into the dom. Use text if you're worried about XSS attacks.
				</td>
			</tr>
			<tr>
				<td>placement</td>
				<td>string|function</td>
				<td>'top'</td>
				<td>how to position the tooltip - top | bottom | left | right</td>
			</tr>
			<tr>
				<td>selector</td>
				<td>string</td>
				<td>false</td>
				<td>If a selector is provided, tooltip objects will be delegated to the specified targets.</td>
			</tr>
			<tr>
				<td>title</td>
				<td>string | function</td>
				<td>''</td>
				<td>default title value if `title` tag isn't present</td>
			</tr>
			<tr>
				<td>trigger</td>
				<td>string</td>
				<td>'hover'</td>
				<td>how tooltip is triggered - click | hover | focus | manual</td>
			</tr>
			<tr>
				<td>delay</td>
				<td>number | object</td>
				<td>0</td>
				<td>
					<p>delay showing and hiding the tooltip (ms) - does not apply to manual trigger type</p>

					<p>If a number is supplied, delay is applied to both hide/show</p>

					<p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
				</td>
			</tr>
			</tbody>
		</table>
		<div class="alert alert-info">
			<strong>Heads up!</strong>
			Options for individual tooltips can alternatively be specified through the use of data attributes.
		</div>

		<h3>Markup</h3>

		<p>For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just
			specify
			a selector option.</p>
    <pre
		class="prettyprint linenums">&lt;a href="#" rel="tooltip" title="first tooltip"&gt;hover over me&lt;/a&gt;</pre>

		<h3>Methods</h3>
		<h4>$().tooltip(options)</h4>

		<p>Attaches a tooltip handler to an element collection.</p>
		<h4>.tooltip('show')</h4>

		<p>Reveals an element's tooltip.</p>
		<pre class="prettyprint linenums">$('#element').tooltip('show')</pre>
		<h4>.tooltip('hide')</h4>

		<p>Hides an element's tooltip.</p>
		<pre class="prettyprint linenums">$('#element').tooltip('hide')</pre>
		<h4>.tooltip('toggle')</h4>

		<p>Toggles an element's tooltip.</p>
		<pre class="prettyprint linenums">$('#element').tooltip('toggle')</pre>
		<h4>.tooltip('destroy')</h4>

		<p>Hides and destroys an element's tooltip.</p>
		<pre class="prettyprint linenums">$('#element').tooltip('destroy')</pre>
	</section>

	<!-- Popovers
	================================================== -->
	<section id="popovers">

		<div class="page-header">
			<h1>Popovers <small><a href="#">TbPopover</a></small></h1>
		</div>

		<h2>Examples</h2>

		<h3>Static popover</h3>

		<p>Four options are available: top, right, bottom, and left aligned.</p>

		<div class="bs-docs-example bs-docs-example-popover">
			<div class="popover bottom">
				<div class="arrow"></div>
				<h3 class="popover-title">Popover bottom</h3>

				<div class="popover-content">
					<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
						venenatis vestibulum.</p>
				</div>
			</div>

			<div class="popover right">
				<div class="arrow"></div>
				<h3 class="popover-title">Popover right</h3>

				<div class="popover-content">
					<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
						venenatis vestibulum.</p>
				</div>
			</div>

			<div class="popover top">
				<div class="arrow"></div>
				<h3 class="popover-title">Popover top</h3>

				<div class="popover-content">
					<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
						venenatis vestibulum.</p>
				</div>
			</div>

			<div class="popover left">
				<div class="arrow"></div>
				<h3 class="popover-title">Popover left</h3>

				<div class="popover-content">
					<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
						venenatis vestibulum.</p>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
		<p>Use the following statement for your custom [selectors default to <code>a[rel=popover]</code>.</p>
<pre class="prettyprint linenums">
Yii::app()->bootstrap->registerPopover('body', array('selector'=>'button[rel=popover]'));
</pre>

		<span class="label label-info">Note</span> Please, check
		<a target="_blank" href="http://twitter.github.com/bootstrap/javascript.html#popovers">Twitter popover
			documentation</a> for more information about all the options related to popovers.
	</section>

	<!-- Collapse
	================================================== -->
	<section id="collapse">

		<div class="page-header">
			<h1>Collapse <small><a href="#">TbCollapse</a></small></h1>
		</div>

		<h2>Example accordion</h2>

		<p>Using the TbCollapse widget, we built a simple accordion style widget:</p>

		<div class="bs-docs-example">
			<?php $collapse = $this->beginWidget('bootstrap.widgets.TbCollapse'); ?>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						Collapsible Group Item #1
					</a>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
					<div class="accordion-inner">
						Anim pariatur cliche...
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						Collapsible Group Item #2
					</a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						Anim pariatur cliche...
					</div>
				</div>
			</div>
			<?php $this->endWidget(); ?>
			<div style="clear:both"></div>
		</div>
<pre class="prettyprint linenums">
&lt;div class="accordion" id="accordion2"&gt;
&lt;?php $collapse = $this->beginWidget('bootstrap.widgets.TbCollapse');?&gt;
&lt;div class="accordion-group"&gt;
    &lt;div class="accordion-heading"&gt;
        &lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"&gt;
            Collapsible Group Item #1
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="collapseOne" class="accordion-body collapse in"&gt;
        &lt;div class="accordion-inner"&gt;
            Anim pariatur cliche...
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="accordion-group"&gt;
  &lt;div class="accordion-heading"&gt;
      &lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"&gt;
          Collapsible Group Item #2
      &lt;/a&gt;
  &lt;/div&gt;
  &lt;div id="collapseTwo" class="accordion-body collapse"&gt;
      &lt;div class="accordion-inner"&gt;
          Anim pariatur cliche...
      &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;?php $this->endWidget();?&gt;
...
</pre>
	</section>


	<!-- Carousel
	================================================== -->
	<section id="carousel">

		<div class="page-header">
			<h1>Carousel <small><a href="#">TbCarousel</a></small></h1>
		</div>

		<h2>Example carousel</h2>

		<p>The slideshow below shows a generic plugin and component for cycling through elements like a carousel.</p>

		<div class="bs-docs-example">
			<?php echo TbHtml::carousel(
				array(
					array(
						'content' => '<img src="holder.js/660x380" />',
						'label' => 'First Thumbnail label',
						'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
					),
					array(
						'content' => '<img src="holder.js/660x380" />',
						'label' => 'Second Thumbnail label',
						'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
					),
					array(
						'content' => '<img src="holder.js/660x380" />',
						'label' => 'Third Thumbnail label',
						'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
					),
				),
				array('style' => 'width: 660px;')
			); ?>
		</div>
<pre class="prettyprint linenums">
&lt;?php echo TbHtml::carousel(
    array(
        array(
            'content' =&gt; '&lt;img src=&quot;holder.js/660x380&quot; /&gt;',
            'label'   =&gt; 'First Thumbnail label',
            'caption' =&gt; 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ...',
        ),
        array(
            'content' =&gt; '&lt;img src=&quot;holder.js/660x380&quot; /&gt;',
            'label'   =&gt; 'Second Thumbnail label',
            'caption' =&gt; 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ...',
        ),
        array(
            'content' =&gt; '&lt;img src=&quot;holder.js/660x380&quot; /&gt;',
            'label'   =&gt; 'Third Thumbnail label',
            'caption' =&gt; 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ...',
        ),
    ),
    array('style' =&gt; 'width: 660px;')
); ?&gt;
</pre>
	</section>

	<!-- Typeahead
	================================================== -->
	<section id="typeahead">

		<div class="page-header">
			<h1>Typeahead <small><a href="#">TbTypeAhead</a></small></h1>
		</div>

		<h2>Example</h2>

		<p>A basic, easily extended plugin for quickly creating elegant typeaheads with any form text input.</p>

		<div class="bs-docs-example" style="background-color: #f5f5f5;">
			<?php
			$this->widget(
				'bootstrap.widgets.TbTypeAhead',
				array(
					'name' => 'typeahead-test',
					'htmlOptions' => array(
						'prepend' => TbHtml::icon(TbIcon::ICON_GLOBE),
						'placeholder' => 'Write an USA state'
					),
					'source' => array(
						"Alabama",
						"Alaska",
						"Arizona",
						"Arkansas",
						"California",
						"Colorado",
						"Connecticut",
						"Delaware",
						"Florida",
						"Georgia",
						"Hawaii",
						"Idaho",
						"Illinois",
						"Indiana",
						"Iowa",
						"Kansas",
						"Kentucky",
						"Louisiana",
						"Maine",
						"Maryland",
						"Massachusetts",
						"Michigan",
						"Minnesota",
						"Mississippi",
						"Missouri",
						"Montana",
						"Nebraska",
						"Nevada",
						"New Hampshire",
						"New Jersey",
						"New Mexico",
						"New York",
						"North Dakota",
						"North Carolina",
						"Ohio",
						"Oklahoma",
						"Oregon",
						"Pennsylvania",
						"Rhode Island",
						"South Carolina",
						"South Dakota",
						"Tennessee",
						"Texas",
						"Utah",
						"Vermont",
						"Virginia",
						"Washington",
						"West Virginia",
						"Wisconsin",
						"Wyoming"
					),

				)
			);
			?>
		</div>
<pre class="prettyprint linenums">
 $this->widget(
    'bootstrap.widgets.TbTypeAhead',
    array(
        'name'        => 'typeahead-test',
        'htmlOptions' => array(
            'prepend'     => TbHtml::icon(TbIcon::ICON_GLOBE),
            'placeholder' => 'Write an USA state'
        ),
        'source'      => array(
            "Alabama",
            "Alaska",
            "Arizona",
            "Arkansas",
            "California",
            "Colorado",
            "Connecticut",
            "Delaware",
            "Florida",
            "Georgia",
            "Hawaii",
            "Idaho",
            "Illinois",
            "Indiana",
            "Iowa",
            "Kansas",
            "Kentucky",
            "Louisiana",
            "Maine",
            "Maryland",
            "Massachusetts",
            "Michigan",
            "Minnesota",
            "Mississippi",
            "Missouri",
            "Montana",
            "Nebraska",
            "Nevada",
            "New Hampshire",
            "New Jersey",
            "New Mexico",
            "New York",
            "North Dakota",
            "North Carolina",
            "Ohio",
            "Oklahoma",
            "Oregon",
            "Pennsylvania",
            "Rhode Island",
            "South Carolina",
            "South Dakota",
            "Tennessee",
            "Texas",
            "Utah",
            "Vermont",
            "Virginia",
            "Washington",
            "West Virginia",
            "Wisconsin",
            "Wyoming"
        ),
    )
);
</pre>
	</section>


	<!-- Affix
	================================================== -->
	<section id="affix">

		<div class="page-header">
			<h1>Affix <small><a href="#">TbAffix</a></small></h1>
		</div>

		<h2>Example
			<small>extracted from Twitter Documentation</small>
		</h2>
		<p>The subnavigation on the left is a live demo of the affix plugin.</p>

		<hr class="bs-docs-separator">

		<h2>Usage</h2>

		<h3>Via data attributes</h3>

		<p>To easily add affix behavior to any element, just add <code>data-spy="affix"</code> to the element you want
			to
			spy on. Then use offsets to define when to toggle the pinning of an element on and off.</p>

		<pre class="prettyprint linenums">&lt;div data-spy="affix" data-offset-top="200"&gt;...&lt;/div&gt;</pre>

		<div class="alert alert-info">
			<strong>Heads up!</strong>
			You must manage the position of a pinned element and the behavior of its immediate parent. Position is
			controlled by <code>affix</code>, <code>affix-top</code>, and <code>affix-bottom</code>. Remember to check
			for a
			potentially collapsed parent when the affix kicks in as it's removing content from the normal flow of the
			page.
		</div>

		<h3>Via JavaScript</h3>

		<p>Call the affix plugin via JavaScript:</p>
		<pre class="prettyprint linenums">$('#navbar').affix()</pre>

		<h3>Methods</h3>
		<h4>.affix('refresh')</h4>

		<p>When using affix in conjunction with adding or removing of elements from the DOM, you'll want to call the
			refresh
			method:</p>
<pre class="prettyprint linenums">
$('[data-spy="affix"]').each(function () {
  $(this).affix('refresh')
});
</pre>
		<h3>Options</h3>

		<p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
			<code>data-</code>,
			as in <code>data-offset-top="200"</code>.</p>
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th style="width: 100px;">Name</th>
				<th style="width: 100px;">type</th>
				<th style="width: 50px;">default</th>
				<th>description</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>offset</td>
				<td>number | function | object</td>
				<td>10</td>
				<td>Pixels to offset from screen when calculating position of scroll. If a single number is provide, the
					offset will be applied in both top and left directions. To listen for a single direction, or
					multiple
					unique offsets, just provided an object <code>offset: { x: 10 }</code>. Use a function when you need
					to
					dynamically provide an offset (useful for some responsive designs).
				</td>
			</tr>
			</tbody>
		</table>
	</section>
	</div>
	</div>
</div>
<?php
// fix twitter bootstrap docs bug: https://github.com/twitter/bootstrap/issues/6832
Yii::app()->clientScript->registerScript('javascript#ReadyJS', <<<EOD
$('.tooltip-demo a').each(function(){\$(this).tooltip();});
EOD
);

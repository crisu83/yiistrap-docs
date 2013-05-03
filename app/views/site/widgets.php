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
			<li><a href="#breadcrumb"><i class="icon-chevron-right"></i> Breadcrumb</a></li>
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
		<h1>Navigation</h1>
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
		<h1>Navbar</h1>
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

		<h2>Display variations</h2>

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

<!-- Breadcrumb
================================================== -->
<section id="breadcrumb">

	<div class="page-header">
		<h1>Breadcrumb</h1>
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
		<h1>Hero unit</h1>
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
<section id="alert">

	<div class="page-header">
		<h1>Alert</h1>
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
		<h1>Grid view</h1>
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

	<h1>Detail view</h1>

	<p class="muted">Coming soon!</p>

</section>

<!-- Forms
	================================================== -->
<section id="forms">

	<div class="page-header">
		<h1>Forms</h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>

	<!-- Modal
	================================================== -->
	<section id="modals">

		<div class="page-header">
			<h1>Modals</h1>
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
		<h1>Scrollspy</h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>

<!-- Tabs
================================================== -->
<section id="tabs">

	<div class="page-header">
		<h1>Togglable tabs</h1>
	</div>

	<div class="bs-docs-example">
		<?php $this->widget('bootstrap.widgets.TbTabs', array(
			'tabs' => array(
				array('label' => 'Home', 'content' => 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.', 'active' => true),
				array('label' => 'Profile', 'content' => 'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
				array('label' => 'Messages', 'items' => array(
					array('label' => '@fat', 'content' => 'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
					array('label' => '@mdo', 'content' => 'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
				)),
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
%lt;?php $this->widget('bootstrap.widgets.TbTabs', array(
    'tabs' => array(
        array('label' => 'Home', 'content' => '...', 'active' => true),
        array('label' => 'Profile', 'content' => '...'),
        array('label' => 'Messages', 'items' => array(
            array('label' => '@fat', 'content' => '...'),
            array('label' => '@mdo', 'content' => '...'),
        )),
    ),
)); ?></pre>

</section>

<!-- Tooltips
================================================== -->
<section id="tooltips">

	<div class="page-header">
		<h1>Tooltips</h1>
	</div>

	<div class="bs-docs-example tooltip-demo">
		<p class="muted" style="margin-bottom: 0;">
			Tight pants next level keffiyeh
			<?php echo TbHtml::tooltip('you probably', '#', 'Default tooltip'); ?>
			haven't	heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan,	mcsweeney's fixie sustainable quinoa 8-bit american apparel
			<?php echo TbHtml::tooltip('have a', '#', 'Another tooltip'); ?>
			richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan
			<?php echo TbHtml::tooltip('whatever keytar', '#', 'Another one here too'); ?>
			, scenester farm-to-table banksy Austin twitter handle freegan cred raw denim single-origin coffee viral.
		</p>
	</div>

	<pre class="prettyprint linenums">
    Tight pants next level keffiyeh &lt;?php echo TbHtml::tooltip('you probably', '#', 'Default tooltip'); ?> haven\'t heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney\'s fixie sustainable quinoa 8-bit american apparel &lt;?php echo TbHtml::tooltip('have a', '#', 'Another tooltip'); ?> richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney\'s cleanse vegan chambray. A really ironic artisan &lt;?php echo TbHtml::tooltip('whatever keytar', '#', 'Another one here too'); ?>, scenester farm-to-table banksy Austin twitter handle freegan cred raw denim single-origin coffee viral.</pre>

	<h3>Four directions</h3>

	<div class="bs-docs-example tooltip-demo">
		<ul class="bs-docs-tooltip-examples">
			<li><?php echo TbHtml::tooltip('Tooltip on top', '#', 'Tooltip on top'); ?></li>
			<li><?php echo TbHtml::tooltip('Tooltip on right', '#', 'Tooltip on right', array('placement' => TbHtml::TOOLTIP_RIGHT)); ?></li>
			<li><?php echo TbHtml::tooltip('Tooltip on bottom', '#', 'Tooltip on bottom', array('placement' => TbHtml::TOOLTIP_BOTTOM)); ?></li>
			<li><?php echo TbHtml::tooltip('Tooltip on left', '#', 'Tooltip on left', array('placement' => TbHtml::TOOLTIP_LEFT)); ?></li>
		</ul>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::tooltip(...); ?>
&lt;?php echo TbHtml::tooltip(..., array('placement' => TbHtml::TOOLTIP_RIGHT)); ?>
&lt;?php echo TbHtml::tooltip(..., array('placement' => TbHtml::TOOLTIP_BOTTOM)); ?>
&lt;?php echo TbHtml::tooltip(..., array('placement' => TbHtml::TOOLTIP_LEFT)); ?></pre>

</section>

<!-- Popovers
================================================== -->
<section id="popovers">

	<div class="page-header">
		<h1>Popovers</h1>
	</div>

	<div class="bs-docs-example">
		<?php echo TbHtml::popover('Click to toggle popover', 'A Title', 'And here\'s some amazing content. It\'s very engaging. right?', array(
			'class' => 'btn btn-large btn-danger',
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt?php echo TbHtml::popover('Click to toggle popover', 'A Title', '...', array(
    'class' => 'btn btn-large btn-danger',
)); ?></pre>

	<h3>Four directions</h3>

	<div class="bs-docs-example tooltip-demo">
		<ul class="bs-docs-tooltip-examples">
			<li><?php echo TbHtml::popover('Popover on top', 'Popover on top', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::TOOLTIP_TOP)); ?></li>
			<li><?php echo TbHtml::popover('Popover on right', 'Popover on right', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::TOOLTIP_RIGHT)); ?></li>
			<li><?php echo TbHtml::popover('Popover on bottom', 'Popover on bottom', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::TOOLTIP_BOTTOM)); ?></li>
			<li><?php echo TbHtml::popover('Popover on left', 'Popover on left', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::TOOLTIP_LEFT)); ?></li>
		</ul>
	</div>

</section>

<!-- Collapse
================================================== -->
<section id="collapse">

	<div class="page-header">
		<h1>Collapse</h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>


<!-- Carousel
================================================== -->
<section id="carousel">

	<div class="page-header">
		<h1>Carousel</h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>

<!-- Typeahead
================================================== -->
<section id="typeahead">

	<div class="page-header">
		<h1>Typeahead</h1>
	</div>

	<div class="bs-docs-example" style="background-color: #f5f5f5;">
		<?php
		$this->widget('bootstrap.widgets.TbTypeAhead', array(
			'name' => 'typeahead-test',
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
			'htmlOptions' => array(
				'prepend' => TbHtml::icon(TbHtml::ICON_GLOBE),
				'placeholder' => 'Write an USA state'
			),
		)); ?>
	</div>

<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbTypeAhead', array(
    'name' => 'typeahead-test',
    'source' => array(...),
    'htmlOptions' => array(
        'prepend' => TbHtml::icon(TbHtml::ICON_GLOBE),
        'placeholder' => 'Write an USA state'
    ),
)); ?></pre>

</section>

<!-- Affix
================================================== -->
<section id="affix">

	<div class="page-header">
		<h1>Affix</h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>

		</div>
	</div>
</div>

<?php
// fix twitter bootstrap docs bug: https://github.com/twitter/bootstrap/issues/6832
Yii::app()->clientScript->registerScript('javascript#ReadyJS', <<<EOD
$('.tooltip-demo a[rel=tooltip]').tooltip();
EOD
);

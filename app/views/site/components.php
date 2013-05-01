<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
	<div class="container">
		<h1>Yiistrap Docs</h1>

		<p class="lead">How to use them...</p>
	</div>
</header>
<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
<div class="span3 bs-docs-sidebar">
	<ul class="nav nav-list bs-docs-sidenav">
		<li><a href="#buttons"><i class="icon-chevron-right"></i> Buttons</a></li>
		<li><a href="#buttonGroups"><i class="icon-chevron-right"></i> Button groups</a></li>
		<li><a href="#buttonDropdowns"><i class="icon-chevron-right"></i> Button dropdowns</a></li>
		<li><a href="#images"><i class="icon-chevron-right"></i> Images</a></li>
		<li><a href="#navs"><i class="icon-chevron-right"></i> Navs</a></li>
		<li><a href="#navbar"><i class="icon-chevron-right"></i> Navbar</a></li>
		<li><a href="#breadcrumbs"><i class="icon-chevron-right"></i> Breadcrumbs</a></li>
		<li><a href="#labels-badges"><i class="icon-chevron-right"></i> Labels and badges</a></li>
		<li><a href="#typography"><i class="icon-chevron-right"></i> Typography</a></li>
		<li><a href="#thumbnails"><i class="icon-chevron-right"></i> Thumbnails</a></li>
		<li><a href="#alerts"><i class="icon-chevron-right"></i> Alerts</a></li>
		<li><a href="#progress"><i class="icon-chevron-right"></i> Progress bars</a></li>
		<li><a href="#tables"><i class="icon-chevron-right"></i> Tables</a></li>
		<li><a href="#forms"><i class="icon-chevron-right"></i> Forms</a></li>
		<li><a href="#media"><i class="icon-chevron-right"></i> Media Objects</a></li>
	</ul>
</div>

<div class="span9">
<!-- Buttons
	================================================== -->
<section id="buttons">

	<div class="page-header">
		<h1>Buttons</h1>
	</div>

	<div class="bs-docs-example">
		<?php echo TbHtml::button('Default'); ?>
		<?php echo TbHtml::button('Primary', array('style' => TbHtml::STYLE_PRIMARY)); ?>
		<?php echo TbHtml::button('Danger', array('style' => TbHtml::STYLE_DANGER)); ?>
		<?php echo TbHtml::button('Warning', array('style' => TbHtml::STYLE_WARNING)); ?>
		<?php echo TbHtml::button('Success', array('style' => TbHtml::STYLE_SUCCESS)); ?>
		<?php echo TbHtml::button('Info', array('style' => TbHtml::STYLE_INFO)); ?>
		<?php echo TbHtml::button('Inverse', array('style' => TbHtml::STYLE_INVERSE)); ?>
		<?php echo TbHtml::button('Link', array('style' => TbHtml::STYLE_LINK)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Default'); ?>
&lt;?php echo TbHtml::button('Primary', array('style' => TbHtml::STYLE_PRIMARY)); ?>
&lt;?php echo TbHtml::button('Danger', array('style' => TbHtml::STYLE_DANGER)); ?>
&lt;?php echo TbHtml::button('Warning', array('style' => TbHtml::STYLE_WARNING)); ?>
&lt;?php echo TbHtml::button('Success', array('style' => TbHtml::STYLE_SUCCESS)); ?>
&lt;?php echo TbHtml::button('Info', array('style' => TbHtml::STYLE_INFO)); ?>
&lt;?php echo TbHtml::button('Inverse', array('style' => TbHtml::STYLE_INVERSE)); ?>
&lt;?php echo TbHtml::button('Link', array('style' => TbHtml::STYLE_LINK)); ?></pre>

	<h2>Sizes</h2>

	<div class="bs-docs-example">
		<p>
			<?php echo TbHtml::button('Large button', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)); ?>
			<?php echo TbHtml::button('Large button', array('size' => TbHtml::SIZE_LARGE)); ?>
		</p>
		<p>
			<?php echo TbHtml::button('Default button', array('style' => TbHtml::STYLE_PRIMARY)); ?>
			<?php echo TbHtml::button('Default button'); ?>
		</p>
		<p>
			<?php echo TbHtml::button('Small button', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_SMALL)); ?>
			<?php echo TbHtml::button('Small button', array('size' => TbHtml::SIZE_SMALL)); ?>
		</p>
		<p>
			<?php echo TbHtml::button('Mini button', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_MINI)); ?>
			<?php echo TbHtml::button('Mini button', array('size' => TbHtml::SIZE_MINI)); ?>
		</p>
	</div>

    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Large button', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)); ?>
&lt;?php echo TbHtml::button('Large button', array('size' => TbHtml::SIZE_LARGE)); ?>
&lt;?php echo TbHtml::button('Default button', array('style' => TbHtml::STYLE_PRIMARY)); ?>
&lt;?php echo TbHtml::button('Default button'); ?>
&lt;?php echo TbHtml::button('Small button', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_SMALL)); ?>
&lt;?php echo TbHtml::button('Small button', array('size' => TbHtml::SIZE_SMALL)); ?>
&lt;?php echo TbHtml::button('Mini button', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_MINI)); ?>
&lt;?php echo TbHtml::button('Mini button', array('size' => TbHtml::SIZE_MINI)); ?></pre>

	<h2>Block Buttons</h2>

	<div class="bs-docs-example">
		<div class="well" style="max-width: 400px; margin: 0 auto 10px;">
			<?php echo TbHtml::button('Block button', array('block' => true, 'style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)); ?>
			<?php echo TbHtml::button('Block button', array('block' => true, 'size' => TbHtml::SIZE_LARGE)); ?>
		</div>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Block button', array('block' => true, 'style' => TbHtml::STYLE_PRIMARY, 'size'=>TbHtml::SIZE_LARGE)); ?>
&lt;?php echo TbHtml::button('Block button', array('block' => true, 'size' => TbHtml::SIZE_LARGE)); ?></pre>

	<h2>Disabled state</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::button('Primary button', array('disabled' => true, 'style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)); ?>
		<?php echo TbHtml::button('Button', array('disabled' => true, 'size' => TbHtml::SIZE_LARGE)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Primary button', array('disabled' => true, 'size'=>TbHtml::SIZE_LARGE, 'style' => TbHtml::STYLE_PRIMARY)); ?>
&lt;?php echo TbHtml::button('Button', array('disabled' => true, 'size' => TbHtml::SIZE_LARGE)); ?></pre>

</section>

<!-- Button Groups
	================================================== -->
<section id="buttonGroups">

	<div class="page-header">
		<h1>Button groups</h1>
	</div>

	<h3>Single button group</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::buttonGroup(array(
			array('label' => 'Left'),
			array('label' => 'Middle'),
			array('label' => 'Right'),
		)); ?>
	</div>
	<pre class="prettyprint linenums">
&lt;?php
echo TbHtml::buttonGroup(array(
    array('label' => 'Left'),
    array('label' => 'Middle'),
    array('label' => 'Right'),
)); ?></pre>

	<h3>Multiple button groups</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::buttonToolbar(array(
			array(
				'items' => array(
					array('label' => '1'),
					array('label' => '2'),
					array('label' => '3'),
					array('label' => '4'),
				),
			),
			array(
				'items' => array(
					array('label' => '5'),
					array('label' => '6'),
					array('label' => '7'),
				)
			),
			array(
				'items' => array(
					array('label' => '8'),
				),
			),
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonToolbar(array(
    array(
        'items' => array(
            array('label' => '1'),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        ),
    ),
    array(
        'items' => array(
            array('label' => '5'),
            array('label' => '6'),
            array('label' => '7'),
        ),
    )),
    array(
        'items' => array(
            array('label' => '8'),
        ),
    )),
)); ?></pre>

	<h3>Vertical button groups</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::buttonGroup(array(
			array('icon' => 'align-left'),
			array('icon' => 'align-center'),
			array('icon' => 'align-right'),
			array('icon' => 'align-justify'),
		), array('vertical' => true)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonGroup(array(
    array('icon' => 'align-left'),
    array('icon' => 'align-center'),
    array('icon' => 'align-right'),
    array('icon' => 'align-justify'),
), array('vertical' => true)); ?></pre>

	<h3>Stateful</h3>

	<p class="muted">@todo</p>

	<h3>Single toggle</h3>

	<p class="muted">@todo</p>

	<h3>Checkbox</h3>

	<p class="muted">@todo</p>

	<h3>Radio</h3>

	<p class="muted">@todo</p>

</section>

<!-- Split button dropdowns
	================================================== -->
<section id="buttonDropdowns">

	<?php $dropdownConfig = array(
		array('label' => 'Action', 'url' => '#'),
		array('label' => 'Another action', 'url' => '#'),
		array('label' => 'Something else here', 'url' => '#'),
		TbHtml::menuDivider(),
		array('label' => 'Separate link', 'url' => '#'),
	); ?>

	<div class="page-header">
		<h1>Button dropdown menus</h1>
	</div>

	<div class="bs-docs-example">

		<div class="btn-toolbar">
			<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig); ?>
			<?php echo TbHtml::buttonDropdown('Primary', $dropdownConfig, array('style' => TbHtml::STYLE_PRIMARY)); ?>
			<?php echo TbHtml::buttonDropdown('Danger', $dropdownConfig, array('style' => TbHtml::STYLE_DANGER)); ?>
			<?php echo TbHtml::buttonDropdown('Warning', $dropdownConfig, array('style' => TbHtml::STYLE_WARNING)); ?>
			<?php echo TbHtml::buttonDropdown('Success', $dropdownConfig, array('style' => TbHtml::STYLE_SUCCESS)); ?>
			<?php echo TbHtml::buttonDropdown('Info', $dropdownConfig, array('style' => TbHtml::STYLE_INFO)); ?>
			<?php echo TbHtml::buttonDropdown('Inverse', $dropdownConfig, array('style' => TbHtml::STYLE_INVERSE)); ?>
		</div>

	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Action', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
)); ?></pre>

	<h3>Works with all button sizes</h3>

	<div class="bs-docs-example">

		<div class="btn-toolbar">
			<?php echo TbHtml::buttonDropdown('Large action', $dropdownConfig, array('size' => TbHtml::SIZE_LARGE)); ?>
		</div>
		<div class="btn-toolbar">
			<?php echo TbHtml::buttonDropdown('Small action', $dropdownConfig, array('size' => TbHtml::SIZE_SMALL)); ?>
		</div>
		<div class="btn-toolbar">
			<?php echo TbHtml::buttonDropdown('Mini action', $dropdownConfig, array('size' => TbHtml::SIZE_MINI)); ?>
		</div>

	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Action', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array('size'=>TbHtml::SIZE_MINI)); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Split button dropdowns</h2>

	<div class="bs-docs-example">
		<div class="btn-toolbar" style="margin: 0;">
			<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('split' => true)); ?>
			<?php echo TbHtml::buttonDropdown('Primary', $dropdownConfig, array('style' => TbHtml::STYLE_PRIMARY, 'split' => true)); ?>
			<?php echo TbHtml::buttonDropdown('Danger', $dropdownConfig, array('style' => TbHtml::STYLE_DANGER, 'split' => true)); ?>
			<?php echo TbHtml::buttonDropdown('Warning',	$dropdownConfig, array('style' => TbHtml::STYLE_WARNING, 'split' => true)); ?>
			<?php echo TbHtml::buttonDropdown('Success', $dropdownConfig, array('style' => TbHtml::STYLE_SUCCESS, 'split' => true)); ?>
			<?php echo TbHtml::buttonDropdown('Info', $dropdownConfig, array('style' => TbHtml::STYLE_INFO, 'split' => true)); ?>
			<?php echo TbHtml::buttonDropdown('Inverse', $dropdownConfig, array('style' => TbHtml::STYLE_INVERSE, 'split' => true)			); ?>
		</div>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Action', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array('split' => true)); ?></pre>

	<h3>Dropup menus</h3>

	<div class="bs-docs-example">
		<div class="btn-toolbar" style="margin: 0;">
			<?php echo TbHtml::buttonDropdown('Dropup', $dropdownConfig, array('split' => true, 'dropup' => true)); ?>
			<?php echo TbHtml::buttonDropdown('Right dropup', $dropdownConfig, array('split' => true, 'dropup' => true, 'menuOptions' => array('align' => TbHtml::ALIGN_RIGHT))); ?>
		</div>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Right dropup', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array('split' => true, 'dropup' => true, 'menuOptions' => array('align' => TbHtml::ALIGN_RIGHT))); ?></pre>

</section>

<section id="images">

	<div class="page-header">
		<a name="images"></a>

		<h1>Images</small></h1>
	</div>

	<div class="bs-docs-example">
		<div class="row-fluid" style="text-align: center; width: 450px;">
			<div class="span4">
				<?php echo TbHtml::imageRounded('holder.js/140x140'); ?>
			</div>
			<div class="span4">
				<?php echo TbHtml::imageCircle('holder.js/140x140'); ?>
			</div>
			<div class="span4">
				<?php echo TbHtml::imagePolaroid('holder.js/140x140'); ?>
			</div>
		</div>
	</div>

    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::imageRounded('...'); ?>
&lt;?php echo TbHtml::imageCircle('...'); ?>
&lt;?php echo TbHtml::imagePolaroid('...'); ?></pre>

</section>

<!-- Nav, Tabs, & Pills
	================================================== -->
<section id="navs">

	<div class="page-header">
		<a name="tabs"></a>
		<h1>Nav: tabs, pills, and lists</h1>
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

	<hr class="bs-docs-separator">

	<h2>Togglable tabs</h2>

	<p class="muted">@todo</p>

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

	<h2>Optional display variations</h2>

	<h3>Fixed to top</h3>

	<p class="muted">@todo</p>

	<h3>Fixed to bottom</h3>

	<p class="muted">@todo</p>

	<h3>Static top navbar</h3>

	<p class="muted">@todo</p>

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

<!-- Breadcrumbs
	================================================== -->
<section id="breadcrumbs">

	<div class="page-header">
		<h1>Breadcrumbs</h1>
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
		));
		?>
	</div>

	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        'Library' => '#',
        'Data',
    ),
));
</pre>

</section>

<!-- Labels and badges
	================================================== -->
<section id="labels-badges">

	<div class="page-header">
		<h1>Labels and badges</h1>
	</div>

	<h3>Labels</h3>

	<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>Labels</th>
			<th>Code</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>
				<span class="label">Default</span>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::labelTb('Default'); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo TbHtml::labelTb('Success', array('style'=>TbHtml::STYLE_SUCCESS)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::labelTb('Success', array('style'=>TbHtml::STYLE_SUCCESS)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo TbHtml::labelTb('Warning', array('style'=>TbHtml::STYLE_WARNING)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::labelTb('Warning', array('style'=>TbHtml::STYLE_WARNING)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo TbHtml::labelTb('Important', array('style'=>TbHtml::STYLE_IMPORTANT)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::labelTb('Important', array('style'=>TbHtml::STYLE_IMPORTANT)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo TbHtml::labelTb('Info', array('style'=>TbHtml::STYLE_INFO)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::labelTb('Info', array('style'=>TbHtml::STYLE_INFO)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo TbHtml::labelTb('Inverse', array('style'=>TbHtml::STYLE_INVERSE)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::labelTb('Inverse', array('style'=>TbHtml::STYLE_INVERSE)); ?></code>
			</td>
		</tr>
		</tbody>
	</table>

	<h3>Badges</h3>

	<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>Name</th>
			<th>Example</th>
			<th>Code</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>
				Default
			</td>
			<td>
				<?php echo TbHtml::badge('1'); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::badge('1'); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				Success
			</td>
			<td>
				<?php echo TbHtml::badge('2', array('style'=>TbHtml::STYLE_SUCCESS)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::badge('2', array('style'=>TbHtml::STYLE_SUCCESS)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				Warning
			</td>
			<td>
				<?php echo TbHtml::badge('4', array('style'=>TbHtml::STYLE_WARNING)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::badge('4', array('style'=>TbHtml::STYLE_WARNING)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				Important
			</td>
			<td>
				<?php echo TbHtml::badge('6', array('style'=>TbHtml::STYLE_IMPORTANT)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::badge('6', array('style'=>TbHtml::STYLE_IMPORTANT)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				Info
			</td>
			<td>
				<?php echo TbHtml::badge('8', array('style'=>TbHtml::STYLE_INFO)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::badge('8', array('style'=>TbHtml::STYLE_INFO)); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				Inverse
			</td>
			<td>
				<?php echo TbHtml::badge('10', array('style'=>TbHtml::STYLE_INVERSE)); ?>
			</td>
			<td>
				<code>&lt;?php echo TbHtml::badge('10', array('style'=>TbHtml::STYLE_INVERSE)); ?></code>
			</td>
		</tr>
		</tbody>
	</table>

</section>

<!-- Typographic components
	================================================== -->
<section id="typography">

	<div class="page-header">
		<h1>Typographic components</h1>
	</div>

	<h2>Hero unit</h2>

	<div class="bs-docs-example">
		<?php
		$this->widget('bootstrap.widgets.TbHeroUnit', array(
			'heading' => 'Hello, world!',
			'content' => '<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>' . TbHtml::button('Learn more', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)),
		));
		?>
	</div>
	<pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Hello, world!',
    'content' => '&lt;p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p>' . TbHtml::button('Learn more', array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)),
)); ?></pre>

	<h4>Using a view</h4>

	<p><?php echo TbHtml::labelTb('Head up!', array('style' => TbHtml::STYLE_INFO)); ?> You can also use a view instead of a string as content by passing the path or alias to that view as the content attribute.</p>

	<hr class="bs-docs-separator">

	<h2>Page header</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::pageHeader('Example page header', 'Subtext for header'); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php TbHtml::pageHeader('Example page header', 'Subtext for header'); ?></pre>

</section>


<!-- Thumbnails
	================================================== -->
<section id="thumbnails">

	<?php $thumbnail = array(
		'image' => 'holder.js/260x180',
		'url' => '#',
	); ?>

	<?php $captionThumbnail = array(
		'image' => 'holder.js/300x200',
		'label' => 'Thumbnail label',
		'caption' => '<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>' . TbHtml::button('Action',	array('style' => 'primary')) . ' ' . TbHtml::button('Action'),
	); ?>

	<div class="page-header">
		<h1>Thumbnails
			<small>Grids of images, videos, text, and more</small>
		</h1>
	</div>

	<h2>Default thumbnails</h2>

	<div class="row-fluid">
		<?php echo TbHtml::thumbnails(array($thumbnail, $thumbnail, $thumbnail, $thumbnail)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::thumbnails(array(
    array('image' => '...', 'url' => '#'),
    array('image' => '...', 'url' => '#'),
    array('image' => '...', 'url' => '#'),
    array('image' => '...', 'url' => '#'),
)); ?></pre>

	<h2>Thumbnails with caption</h2>

	<div class="row-fluid">
		<?php echo TbHtml::thumbnails(array($captionThumbnail, $captionThumbnail, $captionThumbnail), array('span' => 4)); ?>
	</div>

    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::thumbnails(array(
    array('image' => '...', 'label' => 'Thumbnail label', 'caption' => '...'),
    array('image' => '...', 'label' => 'Thumbnail label', 'caption' => '...'),
    array('image' => '...', 'label' => 'Thumbnail label', 'caption' => '...'),
), array('span' => 4)); ?></pre>

	<div>

	<h2>Different sizes</h2>

	<?php echo TbHtml::thumbnails(array(
		array('image' => 'holder.js/360x270', 'url' => '#', 'span' => 4),
		array('image' => 'holder.js/260x120', 'url' => '#', 'span' => 3),
		array('image' => 'holder.js/160x120', 'url' => '#', 'span' => 2),
		array('image' => 'holder.js/260x120', 'url' => '#', 'span' => 3),
		array('image' => 'holder.js/160x120', 'url' => '#', 'span' => 2),
	)); ?>

	</div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::thumbnails(array(
    array('image' => '...', 'url' => '#', 'span' => 4),
    array('image' => '...', 'url' => '#', 'span' => 3),
    array('image' => '...', 'url' => '#', 'span' => 2),
    array('image' => '...', 'url' => '#', 'span' => 3),
    array('image' => '...', 'url' => '#', 'span' => 2),
)); ?>
    </pre>
</section>
<!-- Alerts
	================================================== -->
<section id="alerts">

	<div class="page-header">
		<h1>Alerts <small>Styles for success, warning, and error messages</small></h1>
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

	<hr class="bs-docs-divider">

	<h2>Options</h2>

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

	<hr class="bs-docs-divider">

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


<!-- Progress bars
	================================================== -->
<section id="progress">

	<div class="page-header">
		<h1>Progress bars <small>For loading, redirecting, or action status</small></h1>
	</div>

	<h3>Basic</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::progressBar(60); ?>
	</div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::progressBar(60); ?></pre>

	<h3>Striped</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::stripedProgressBar(20); ?>
	</div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::stripedProgressBar(20); ?></pre>

	<h3>Animated</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::animatedProgressBar(40); ?>
	</div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::animatedProgressBar(40); ?></pre>

	<h3>Stacked</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::stackedProgressBar(array(
			array('style' => TbHtml::STYLE_SUCCESS, 'width' => 35),
			array('style' => TbHtml::STYLE_WARNING, 'width' => 20),
			array('style' => TbHtml::STYLE_DANGER, 'width' => 10),
		)); ?>
	</div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::stackedProgressBar(array(
    array('style' => TbHtml::STYLE_SUCCESS, 'width' => 35),
    array('style' => TbHtml::STYLE_WARNING, 'width' => 20),
    array('style' => TbHtml::STYLE_DANGER, 'width' => 10),
)); ?></pre>

</section>

<!-- Tables
	================================================== -->
<section id="tables">

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
		<h1>Tables</h1>
	</div>

	<h2>Grid views</h2>

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

	<hr class="bs-docs-divider">

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

	<hr class="bs-docs-divider">

	<h2>Detail Views</h2>

	<p class="muted">@todo</p>

</section>

<!-- Forms
	================================================== -->
<section id="forms">

	<div class="page-header">
		<h1>Forms</h1>
	</div>

	<p class="muted">@todo</p>

</section>

<!-- Media Objects
	================================================== -->
<section id="media">

	<div class="page-header">
		<h1>Media Objects</h1>
	</div>

	<div class="bs-docs-example">
		<?php echo TbHtml::mediaObjects(array(
			array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'items' => array(
				array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'items' => array(
						array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'),
				)),
			)),
			array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'),
		));	?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::mediaObjects(array(
    array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...', 'items' => array(
        array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...', 'items' => array(
            array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
        )),
    )),
    array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
)); ?></pre>
</section>
</div>
</div>

</div>
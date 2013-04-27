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
        <li><a href="#navs"><i class="icon-chevron-right"></i> Navs</a></li>
        <li><a href="#navbar"><i class="icon-chevron-right"></i> Navbar</a></li>
        <li><a href="#breadcrumbs"><i class="icon-chevron-right"></i> Breadcrumbs</a></li>
        <li><a href="#labels-badges"><i class="icon-chevron-right"></i> Labels and badges</a></li>
        <li><a href="#typography"><i class="icon-chevron-right"></i> Typography</a></li>
        <li><a href="#thumbnails"><i class="icon-chevron-right"></i> Thumbnails</a></li>
        <li><a href="#alerts"><i class="icon-chevron-right"></i> Alerts</a></li>
        <li><a href="#progress"><i class="icon-chevron-right"></i> Progress bars</a></li>
        <li><a href="#tables"><i class="icon-chevron-right"></i> Tables</a></li>
    </ul>
</div>

<div class="span9">
<!-- Dropdowns
	================================================== -->
<section id="buttons">
    <div class="page-header">
        <h1>Buttons</h1>
    </div>

    <h2>Example</h2>

    <div class="bs-docs-example">
        <?php echo TbHtml::button('Default'); ?>
        <?php echo TbHtml::button(TbHtml::STYLE_PRIMARY, array('style' => TbHtml::STYLE_PRIMARY)); ?>
        <?php echo TbHtml::button(TbHtml::STYLE_DANGER, array('style' => TbHtml::STYLE_DANGER)); ?>
        <?php echo TbHtml::button(TbHtml::STYLE_WARNING, array('style' => TbHtml::STYLE_WARNING)); ?>
        <?php echo TbHtml::button(TbHtml::STYLE_SUCCESS, array('style' => TbHtml::STYLE_SUCCESS)); ?>
        <?php echo TbHtml::button(TbHtml::STYLE_INFO, array('style' => TbHtml::STYLE_INFO)); ?>
        <?php echo TbHtml::button(TbHtml::STYLE_INVERSE, array('style' => TbHtml::STYLE_INVERSE)); ?>
        <?php echo TbHtml::button(TbHtml::STYLE_LINK, array('style' => TbHtml::STYLE_LINK)); ?>
    </div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Default'); ?&gt;
&lt;?php echo TbHtml::button(TbHtml::STYLE_PRIMARY, array('style' =&gt; TbHtml::STYLE_PRIMARY)); ?&gt;
&lt;?php echo TbHtml::button(TbHtml::STYLE_DANGER, array('style' =&gt; TbHtml::STYLE_DANGER)); ?&gt;
&lt;?php echo TbHtml::button(TbHtml::STYLE_WARNING, array('style' =&gt; TbHtml::STYLE_WARNING)); ?&gt;
&lt;?php echo TbHtml::button(TbHtml::STYLE_SUCCESS, array('style' =&gt; TbHtml::STYLE_SUCCESS)); ?&gt;
&lt;?php echo TbHtml::button(TbHtml::STYLE_INFO, array('style' =&gt; TbHtml::STYLE_INFO)); ?&gt;
&lt;?php echo TbHtml::button(TbHtml::STYLE_INVERSE, array('style' =&gt; TbHtml::STYLE_INVERSE)); ?&gt;
&lt;?php echo TbHtml::button(TbHtml::STYLE_LINK, array('style' =&gt; TbHtml::STYLE_LINK)); ?&gt;
	</pre>
    <h2>Sizes</h2>

    <p>You can use different type of sizes by setting its <code>size</code> attribute to <code>large</code>,
        <code>small</code>, or <code>mini</code>.</p>

    <p><?php echo TbHtml::button(
            'Large button',
            array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)
        ); ?>
        <?php echo TbHtml::button('Large button', array('size' => TbHtml::SIZE_LARGE)); ?></p>

    <p><?php echo TbHtml::button('Default button', array('style' => TbHtml::STYLE_PRIMARY)); ?>
        <?php echo TbHtml::button('Default button'); ?></p>

    <p><?php echo TbHtml::button(
            'Small button',
            array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_SMALL)
        ); ?>
        <?php echo TbHtml::button('Small button', array('size' => TbHtml::SIZE_SMALL)); ?></p>

    <p><?php echo TbHtml::button(
            'Mini button',
            array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_MINI)
        ); ?>
        <?php echo TbHtml::button('Mini button', array('size' => TbHtml::SIZE_MINI)); ?></p>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Large button', array(
        'style' =&gt; TbHtml::STYLE_PRIMARY, 'size' =&gt; TbHtml::SIZE_LARGE)); ?&gt;
&lt;?php echo TbHtml::button('Large button', array(
        'size' =&gt; TbHtml::SIZE_LARGE)); ?&gt;
&lt;?php echo TbHtml::button('Default button', array(
        'style' =&gt; TbHtml::STYLE_PRIMARY)); ?&gt;
&lt;?php echo TbHtml::button('Default button'); ?&gt;
&lt;?php echo TbHtml::button('Small button', array(
        'style' =&gt; TbHtml::STYLE_PRIMARY, 'size' =&gt; TbHtml::SIZE_SMALL)); ?&gt;
&lt;?php echo TbHtml::button('Small button', array(
        'size' =&gt; TbHtml::SIZE_SMALL)); ?&gt;
&lt;?php echo TbHtml::button('Mini button', array(
        'style' =&gt; TbHtml::STYLE_PRIMARY, 'size' =&gt; TbHtml::SIZE_MINI)); ?&gt;
&lt;?php echo TbHtml::button('Mini button', array(
        'size' =&gt; TbHtml::SIZE_MINI)); ?&gt;
    </pre>

    <h2>Block Buttons</h2>

    <p>To make your buttons streched to the limits of its container, set the <code>block</code> attribute to
        <code>true</code>.</p>

    <div class="bs-docs-example">
        <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
            <?php echo TbHtml::button(
                'Block button',
                array('block' => true, 'style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)
            ); ?>
            <?php echo TbHtml::button('Block button', array('block' => true, 'size' => TbHtml::SIZE_LARGE)); ?>
        </div>
    </div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Block button', array('block' =&gt; true, 'style' =&gt; TbHtml::STYLE_PRIMARY, 'size'=&gt;TbHtml::SIZE_LARGE)); ?&gt;
&lt;?php echo TbHtml::button('Block button', array('block' =&gt; true, 'size' =&gt; TbHtml::SIZE_LARGE)); ?&gt;
	</pre>
    <h2>Disabled state</h2>

    <p>To have them on disabled state, set the <code>disabled</code> attribute to <code>true</code>.</p>

    <p>
        <span class="label label-info">Heads up!</span>
        We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no
        prefix is required. Also, this class is only for aesthetic; you must use custom JavaScript to disable links
        here.
    </p>

    <div class="bs-docs-example">
        <?php echo TbHtml::button(
            'Block button',
            array('disabled' => true, 'style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)
        ); ?>
        <?php echo TbHtml::button('Block button', array('disabled' => true)); ?>
    </div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::button('Block button', array(
        'disabled' =&gt; true, 'style' =&gt; TbHtml::STYLE_PRIMARY, 'size'=&gt;TbHtml::SIZE_LARGE)); ?&gt;
&lt;?php echo TbHtml::button('Block button', array('disabled' =&gt; true)); ?&gt;
	</pre>
</section>
<!-- Button Groups
	================================================== -->
<section id="buttonGroups">
    <div class="page-header">
        <h1>Button groups</h1>
    </div>

    <h2>Examples</h2>

    <p>Two basic options, along with two more specific variations.</p>

    <h3>Single button group</h3>

    <div class="bs-docs-example">
        <?php
        echo TbHtml::buttonGroup(
            array(
                array('label' => 'Left', 'htmlOptions' => array('style' => '')),
                array('label' => 'Middle'),
                array('label' => 'Right'),
            ),
            array('style' => TbHtml::STYLE_PRIMARY)
        );
        ?>
    </div>
	<pre class="prettyprint linenums">
&lt;?php
echo TbHtml::buttonGroup(
    array(
        array('label' =&gt; 'Left', 'htmlOptions' =&gt; array('style' =&gt; '')),
        array('label' =&gt; 'Middle'),
        array('label' =&gt; 'Right'),
    ),
    array('style' =&gt; TbHtml::STYLE_PRIMARY)
);
?&gt;
	</pre>

    <h3>Multiple button groups</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::buttonToolbar(
            array(
                array(
                    'items' => array(
                        array('label' => '1'),
                        array('label' => '2'),
                        array('label' => '3'),
                        array('label' => '4', 'htmlOptions' => array('style' => TbHtml::STYLE_DANGER)),
                    ),
                    'htmlOptions' => array('style' => TbHtml::STYLE_WARNING)
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
                    )
                ),
            ),
            array('style' => TbHtml::STYLE_INVERSE)
        ); ?>
    </div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonToolbar(array(
    array('items' =&gt; array(
        array('label' =&gt; '1'),
        array('label' =&gt; '2'),
        array('label' =&gt; '3'),
        array('label' =&gt; '4', 'htmlOptions' =&gt; array('style' =&gt; TbHtml::STYLE_DANGER)),
    ), 'htmlOptions' =&gt; array('style' =&gt; TbHtml::STYLE_WARNING)),
    array('items' =&gt; array(
        array('label' =&gt; '5'),
        array('label' =&gt; '6'),
        array('label' =&gt; '7'),
    )),
    array('items' =&gt; array(
        array('label' =&gt; '8'),
    )),
), array('style' =&gt; TbHtml::STYLE_INVERSE)); ?&gt;
	</pre>

    <h3>Vertical button groups</h3>

    <p>Make a set of buttons appear vertically stacked rather than horizontally.</p>

    <div class="bs-docs-example">
        <?php echo TbHtml::buttonGroup(
            array(
                array('icon' => 'align-left'),
                array('icon' => 'align-center'),
                array('icon' => 'align-right'),
                array('icon' => 'align-justify'),
            ),
            array('vertical' => true)
        ); ?>
    </div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonGroup(array(
    array('icon' =&gt; 'align-left'),
    array('icon' =&gt; 'align-center'),
    array('icon' =&gt; 'align-right'),
    array('icon' =&gt; 'align-justify'),
), array('vertical' =&gt; true)); ?&gt;
	</pre>
    <h3>Checkbox or radio button groups</h3>

    <p>
        In order to display one or the other, add <code>'data-toggle'=>'buttons-checkbox'</code> or
        <code>'data-toggle'=>'buttons-radio'</code> - will soon be changed -.
    </p>

    <div class="bs-docs-example">
        <div class="span3"><strong>Radio</strong>
            <?php echo TbHtml::buttonGroup(
                array(
                    array('icon' => 'align-left'),
                    array('icon' => 'align-center'),
                    array('icon' => 'align-right'),
                    array('icon' => 'align-justify'),
                ),
                array('data-toggle' => 'buttons-radio')
            ); ?>
        </div>
        <div class="span3"><strong>Checkbox</strong>
            <?php echo TbHtml::buttonGroup(
                array(
                    array('label' => 'A'),
                    array('label' => 'B'),
                    array('label' => 'C'),
                    array('label' => 'D'),
                ),
                array('data-toggle' => 'buttons-checkbox')
            ); ?>
        </div>
        <div style="clear:both"></div>
    </div>
	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonGroup(
    array(
        array('icon' =&gt; 'align-left'),
        array('icon' =&gt; 'align-center'),
        array('icon' =&gt; 'align-right'),
        array('icon' =&gt; 'align-justify'),
    ),
    array('vertical' =&gt; true, 'data-toggle' =&gt; 'buttons-checkbox')
); ?&gt;
	</pre>
    <hr class="bs-docs-separator">
</section>

<!-- Split button dropdowns
	================================================== -->
<section id="buttonDropdowns">
<div class="page-header">
    <h1>Button dropdown menus</h1>
</div>


<h2>Overview and examples</h2>


<div class="bs-docs-example">
    <div class="btn-toolbar" style="margin: 0;">
        <?php $dropdownConfig = array(
            array('label' => 'Action', 'url' => '#'),
            array('label' => 'Another action', 'url' => '#'),
            array('label' => 'Something else here', 'url' => '#'),
            TbHtml::menuDivider(),
            array('label' => 'Separate link', 'url' => '#'),
        ); ?>

        <h5>Default dropdown</h5>

        <div style="margin-bottom: 20px;">
            <?php echo TbHtml::buttonDropdown('Action', $dropdownConfig); ?>
            <?php echo TbHtml::buttonDropdown(
                'Action',
                $dropdownConfig,
                array('style' => TbHtml::STYLE_PRIMARY)
            ); ?>
            <?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' => TbHtml::STYLE_DANGER)); ?>
            <?php echo TbHtml::buttonDropdown(
                'Action',
                $dropdownConfig,
                array('style' => TbHtml::STYLE_WARNING)
            ); ?>
            <?php echo TbHtml::buttonDropdown(
                'Action',
                $dropdownConfig,
                array('style' => TbHtml::STYLE_SUCCESS)
            ); ?>
            <?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' => TbHtml::STYLE_INFO)); ?>
            <?php echo TbHtml::buttonDropdown(
                'Action',
                $dropdownConfig,
                array('style' => TbHtml::STYLE_INVERSE)
            ); ?>
        </div>

    </div>
    <!-- /btn-toolbar -->
</div>
	<pre class="prettyprint linenums">
&lt;?php $dropdownConfig = array(
    array('label' =&gt; 'Action', 'url' =&gt; '#'),
    array('label' =&gt; 'Another action', 'url' =&gt; '#'),
    array('label' =&gt; 'Something else here', 'url' =&gt; '#'),
    TbHtml::menuDivider(),
    array('label' =&gt; 'Separate link', 'url' =&gt; '#'),
); ?&gt;

&lt;h5&gt;Default dropdown&lt;/h5&gt;

&lt;div style=&quot;margin-bottom: 20px;&quot;&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' =&gt; TbHtml::PRIMARY)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' =&gt; TbHtml::STYLE_DANGER)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' =&gt; TbHtml::STYLE_WARNING)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' =&gt; TbHtml::STYLE_SUCCESS)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' =&gt; TbHtml::STYLE_INFO)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' =&gt; TbHtml::STYLE_INVERSE)); ?&gt;
&lt;/div&gt;
	</pre>

<h3>Works with all button sizes</h3>

<p>Button dropdowns work at any size: <code>'size'=>TbHtml::SIZE_LARGE</code>,
    <code>'size'=>TbHtml::SIZE_SMALL</code>, or <code>'size'=>TbHtml::SIZE_MINI</code>.
</p>

<div class="bs-docs-example">
    <div class="btn-toolbar" style="margin: 0;">
        <div style="margin-bottom: 20px;">
            <?php echo TbHtml::buttonDropdown(
                'Action',
                $dropdownConfig,
                array('style' => TbHtml::STYLE_PRIMARY, 'size' => TbHtml::SIZE_LARGE)
            ); ?>
            <?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style' => TbHtml::STYLE_DANGER)); ?>
            <?php echo TbHtml::buttonDropdown(
                'Action',
                $dropdownConfig,
                array('style' => TbHtml::STYLE_WARNING, 'size' => TbHtml::SIZE_SMALL)
            ); ?>
            <?php echo TbHtml::buttonDropdown(
                'Action',
                $dropdownConfig,
                array('style' => TbHtml::STYLE_SUCCESS, 'size' => TbHtml::SIZE_MINI)
            ); ?>
        </div>
    </div>
</div>
<pre class="prettyprint linenums">
&lt;?php $dropdownConfig = array(
    array('label' =&gt; 'Action', 'url' =&gt; '#'),
    array('label' =&gt; 'Another action', 'url' =&gt; '#'),
    array('label' =&gt; 'Something else here', 'url' =&gt; '#'),
    TbHtml::menuDivider(),
    array('label' =&gt; 'Separate link', 'url' =&gt; '#'),
); ?&gt;

&lt;div style=&quot;margin-bottom: 20px;&quot;&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_PRIMARY, 'size'=&gt;TbHtml::SIZE_LARGE)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_DANGER)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_WARNING, 'size'=&gt;TbHtml::SIZE_SMALL)); ?&gt;
    &lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_SUCCESS, 'size'=&gt;TbHtml::SIZE_MINI)); ?&gt;
&lt;/div&gt;
	</pre>
<hr class="bs-docs-separator">


<h2>Split button dropdowns</h2>

<p>Building on the button group styles and markup, we can easily create a split button. Split buttons feature a
    standard
    action on the left and a dropdown toggle on the right with contextual links.</p>

<div class="bs-docs-example">
    <div class="btn-toolbar" style="margin: 0;">
        <?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('split' => true)); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_PRIMARY, 'split' => true)
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_DANGER, 'split' => true)
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_WARNING, 'split' => true)
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_SUCCESS, 'split' => true)
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_INFO, 'split' => true)
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_INVERSE, 'split' => true)
        ); ?>
    </div>
    <!-- /btn-toolbar -->
</div>
	<pre class="prettyprint linenums">
&lt;?php $dropdownConfig = array(
    array('label' =&gt; 'Action', 'url' =&gt; '#'),
    array('label' =&gt; 'Another action', 'url' =&gt; '#'),
    array('label' =&gt; 'Something else here', 'url' =&gt; '#'),
    TbHtml::menuDivider(),
    array('label' =&gt; 'Separate link', 'url' =&gt; '#'),
); ?&gt;

&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'split' =&gt; true)); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_PRIMARY, 'split' =&gt; true)); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_DANGER, 'split' =&gt; true)); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_WARNING, 'split' =&gt; true)); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_SUCCESS, 'split' =&gt; true)); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_INFO, 'split' =&gt; true)); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array(
        'style' =&gt; TbHtml::STYLE_INVERSE, 'split' =&gt; true)); ?&gt;
	</pre>

<h3>Dropup menus</h3>

<p>Dropdown menus can also be toggled from the bottom up by adding a single class to the
    <code>groupOptions</code> special key of <code>htmlOptions</code>
    attribute.</p>

<div class="bs-docs-example">
    <div class="btn-toolbar" style="margin: 0;">
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('split' => true, 'groupOptions' => array('class' => 'dropup'))
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_PRIMARY, 'split' => true, 'groupOptions' => array('class' => 'dropup'))
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_DANGER, 'split' => true, 'groupOptions' => array('class' => 'dropup'))
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_WARNING, 'split' => true, 'groupOptions' => array('class' => 'dropup'))
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_SUCCESS, 'split' => true, 'groupOptions' => array('class' => 'dropup'))
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_INFO, 'split' => true, 'groupOptions' => array('class' => 'dropup'))
        ); ?>
        <?php echo TbHtml::buttonDropdown(
            'Action',
            $dropdownConfig,
            array('style' => TbHtml::STYLE_INVERSE, 'split' => true, 'groupOptions' => array('class' => 'dropup'))
        ); ?>
    </div>
</div>
	<pre class="prettyprint linenums">
&lt;!-- using the same $dropdownConfig variable on top --&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig,
    array('split' =&gt; true,
        'groupOptions'=&gt; array('class'=&gt;'dropup'))); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig,
    array('style' =&gt; TbHtml::STYLE_PRIMARY,
        'split' =&gt; true,
        'groupOptions'=&gt; array('class'=&gt;'dropup'))); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig,
    array('style' =&gt; TbHtml::STYLE_DANGER,
        'split' =&gt; true, 'groupOptions'=&gt; array('class'=&gt;'dropup'))); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig,
    array('style' =&gt; TbHtml::STYLE_WARNING,
        'split' =&gt; true, 'groupOptions'=&gt; array('class'=&gt;'dropup'))); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig,
    array('style' =&gt; TbHtml::STYLE_SUCCESS,
        'split' =&gt; true, 'groupOptions'=&gt; array('class'=&gt;'dropup'))); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig,
    array('style' =&gt; TbHtml::STYLE_INFO,
        'split' =&gt; true, 'groupOptions'=&gt; array('class'=&gt;'dropup'))); ?&gt;
&lt;?php echo TbHtml::buttonDropdown('Action', $dropdownConfig,
    array('style' =&gt; TbHtml::STYLE_INVERSE,
        'split' =&gt; true, 'groupOptions'=&gt; array('class'=&gt;'dropup'))); ?&gt;
	</pre>

</section>
<!---->
<!--<!-- Nav, Tabs, & Pills-->
<!--	================================================== -->-->
<!--<section id="navs">-->
<!--<div class="page-header">-->
<!--    <a name="tabs"></a>-->
<!---->
<!--    <h1>Nav: tabs, pills, and lists</small></h1>-->
<!--</div>-->
<!---->
<!--<h2>Lightweight defaults</h2>-->
<!---->
<!--<p>Create tabs with easy.</p>-->
<!---->
<!--<h3>Basic tabs</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbTabs', array(
//            'type' => 'tabs', // 'tabs' or 'pills'
//            'tabs' => array(
//                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                array('label' => 'Profile', 'content' => 'Profile Content'),
//                array('label' => 'Messages', 'content' => 'Messages Content'),
//            ),
//        ));
?>
<!--</div>-->
<!--<p>You can change the position of the tabs by setting its <code>placement</code> property: <code>above</code>, <code>right</code>,-->
<!--    <code>bellow</code>, or <code>left</code></p>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTabs', array(-->
<!--	'type'=>'tabs', // 'tabs' or 'pills'-->
<!--	'tabs'=>array(-->
<!--		array('label'=>'Home', 'content'=>'Home Content', 'active'=>true),-->
<!--		array('label'=>'Profile', 'content'=>'Profile Content'),-->
<!--		array('label'=>'Messages', 'content'=>'Messages Content'),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<h3>Basic pills</h3>-->
<!---->
<!--<p>Just change its <code>type</code> property to <code>pills</code> instead:</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbTabs', array(
//            'type' => 'pills', // 'tabs' or 'pills'
//            'tabs' => array(
//                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                array('label' => 'Profile', 'content' => 'Profile Content'),
//                array('label' => 'Messages', 'content' => 'Messages Content'),
//            ),
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTabs', array(-->
<!--	'type'=>'pills',-->
<!--	'tabs'=>array(-->
<!--		array('label'=>'Home', 'content'=>'Home Content', 'active'=>true),-->
<!--		array('label'=>'Profile', 'content'=>'Profile Content'),-->
<!--		array('label'=>'Messages', 'content'=>'Messages Content'),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<h3>Disabled state</h3>-->
<!---->
<!--<p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover-->
<!--        effects</strong>. Links will remain <strong>clickable</strong>, however, unless custom javascript is implemented to-->
<!--    prevent those-->
<!--    clicks.</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbTabs', array(
//            'type' => 'pills', // 'tabs', 'pills', or 'list'
//            'tabs' => array(
//                array('label' => 'Home', 'content' => 'Home Content'),
//                array('label' => 'Profile', 'content' => 'Profile Content'),
//                array('label' => 'Messages', 'content' => 'Messages Content', 'itemOptions' => array('class' => 'disabled')),
//            ),
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTabs', array(-->
<!--	'type'=>'pills',-->
<!--	'tabs'=>array(-->
<!--		array('label'=>'Home', 'content'=>'Home Content'),-->
<!--		array('label'=>'Profile', 'content'=>'Profile Content'),-->
<!--		array('label'=>'Messages',-->
<!--			'content'=>'Messages Content',-->
<!--			'itemOptions'=>array('class'=>'disabled')),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<h3>Component alignment</h3>-->
<!---->
<!--<p>To align nav links, use the bootstrap <code>.pull-left</code> or <code>.pull-right</code> utility classes on its-->
<!--    <code>htmlOptions</code> attribute. Both classes will-->
<!--    add a CSS float in the specified direction.</p>-->
<!---->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!---->
<!--<h2>Stackable</h2>-->
<!---->
<!--<p>As tabs and pills are horizontal by default, just add a second class, <code>.nav-stacked</code>, to make them appear-->
<!--    vertically stacked.</p>-->
<!---->
<!--<h3>Stacked tabs</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbTabs', array(
//            'type' => 'tabs',
//            'stacked' => true,
//            'tabs' => array(
//                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                array('label' => 'Profile', 'content' => 'Profile Content'),
//                array('label' => 'Messages', 'content' => 'Messages Content'),
//            ),
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTabs', array(-->
<!--	'type'=>'tabs',-->
<!--	'stacked'=>true,-->
<!--	'tabs'=>array(-->
<!--		array('label'=>'Home', 'content'=>'Home Content', 'active'=>true),-->
<!--		array('label'=>'Profile', 'content'=>'Profile Content'),-->
<!--		array('label'=>'Messages', 'content'=>'Messages Content'),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<h3>Stacked pills</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbTabs', array(
//            'type' => 'pills',
//            'stacked' => true,
//            'tabs' => array(
//                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                array('label' => 'Profile', 'content' => 'Profile Content'),
//                array('label' => 'Messages', 'content' => 'Messages Content'),
//            ),
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTabs', array(-->
<!--	'type'=>'pills',-->
<!--	'stacked'=>true,-->
<!--	'tabs'=>array(-->
<!--		array('label'=>'Home', 'content'=>'Home Content', 'active'=>true),-->
<!--		array('label'=>'Profile', 'content'=>'Profile Content'),-->
<!--		array('label'=>'Messages', 'content'=>'Messages Content'),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!---->
<!--<h2>Dropdowns</h2>-->
<!---->
<!--<h3>Tabs with dropdowns</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbTabs', array(
//            'type' => 'tabs',
//            'tabs' => array(
//                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                array('label' => 'Profile', 'content' => 'Profile Content'),
//                array('label' => 'DropDown', 'items' => array(
//                    array('label' => 'Item1', 'content' => 'Item1 Content'),
//                    array('label' => 'Item2', 'content' => 'Item2 Content')
//                )),
//            )));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTabs', array(-->
<!--	'type' => 'tabs',-->
<!--	'tabs' => array(-->
<!--		array('label' => 'Home', 'content' => 'Home Content', 'active' => true),-->
<!--		array('label' => 'Profile', 'content' => 'Profile Content'),-->
<!--		array('label' => 'DropDown', 'items' => array(-->
<!--			array('label' => 'Item1', 'content' => 'Item1 Content'),-->
<!--			array('label' => 'Item2', 'content' => 'Item2 Content')-->
<!--		)),-->
<!--	))-->
<!--);-->
<!--	</pre>-->
<!---->
<!--<h3>Pills with dropdowns</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbTabs', array(
//            'type' => 'pills',
//            'tabs' => array(
//                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                array('label' => 'Profile', 'content' => 'Profile Content'),
//                array('label' => 'DropDown', 'items' => array(
//                    array('label' => 'Item1', 'content' => 'Item1 Content'),
//                    array('label' => 'Item2', 'content' => 'Item2 Content')
//                )),
//            )));
?>
<!--</div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTabs', array(-->
<!--	'type' => 'pills',-->
<!--	'tabs' => array(-->
<!--		array('label' => 'Home', 'content' => 'Home Content', 'active' => true),-->
<!--		array('label' => 'Profile', 'content' => 'Profile Content'),-->
<!--		array('label' => 'DropDown', 'items' => array(-->
<!--			array('label' => 'Item1', 'content' => 'Item1 Content'),-->
<!--			array('label' => 'Item2', 'content' => 'Item2 Content')-->
<!--		)),-->
<!--	))-->
<!--);-->
<!--</pre>-->
<!---->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!---->
<!--<h2>Nav lists</h2>-->
<!---->
<!--<p>A simple and easy way to build groups of nav links with optional headers. They're best used in sidebars like the-->
<!--    Finder in OS X.</p>-->
<!---->
<!--<h3>Example nav list</h3>-->
<!---->
<!--<p>Create a TbMenu widget and set its <code>type</code> to <code>list</code>:</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    <div class="well" style="max-width: 340px; padding: 8px 0;">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbMenu', array(
//                'type' => 'list',
//                'items' => array(
//                    array('label' => 'List header', 'itemOptions' => array('class' => 'nav-header')),
//                    array('label' => 'Home', 'url' => '#', 'itemOptions' => array('class' => 'active')),
//                    array('label' => 'Library', 'url' => '#'),
//                    array('label' => 'Applications', 'url' => '#'),
//                    array('label' => 'Another list header', 'itemOptions' => array('class' => 'nav-header')),
//                    array('label' => 'Profile', 'url' => '#'),
//                    array('label' => 'Settings', 'url' => '#'),
//                    '',
//                    array('label' => 'Help', 'url' => '#'),
//                )
//            ));
?>
<!--    </div>-->
<!--    <!-- /well -->-->
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbMenu', array(-->
<!--    'type'=>'list',-->
<!--    'items' => array(-->
<!--	    array('label'=>'List header', 'itemOptions'=>array('class'=>'nav-header')),-->
<!--	    array('label'=>'Home', 'url'=>'#', 'itemOptions'=>array('class'=>'active')),-->
<!--	    array('label'=>'Library', 'url'=>'#'),-->
<!--	    array('label'=>'Applications', 'url'=>'#'),-->
<!--	    array('label'=>'Another list header', 'itemOptions'=>array('class'=>'nav-header')),-->
<!--	    array('label'=>'Profile', 'url'=>'#'),-->
<!--	    array('label'=>'Settings', 'url'=>'#'),-->
<!--	    '',-->
<!--	    array('label'=>'Help', 'url'=>'#'),-->
<!--    )-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<h3>Horizontal dividers</h3>-->
<!---->
<!--<p>Add a horizontal divider by creating an empty list item in the <code>items</code> array.</p>-->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<!-- Navbar-->
<!--	================================================== -->-->
<!--<section id="navbar">-->
<!--<div class="page-header">-->
<!--    <h1>Navbar</h1>-->
<!--</div>-->
<!---->
<!---->
<!--<h2>Basic navbar</h2>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'brand' => 'Title',
//            'fixed' => false,
//            'items' => array(
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'items' => array(
//                        array('label' => 'Home', 'url' => '#', 'active' => true),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                    )
//                )
//            )
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbNavbar', array(-->
<!--	'brand' => 'Title',-->
<!--	'items' => array(-->
<!--		array(-->
<!--			'class' => 'bootstrap.widgets.TbMenu',-->
<!--			'items' => array(-->
<!--				array('label'=>'Home', 'url'=>'#', 'active'=>true),-->
<!--				array('label'=>TbHtml::STYLE_LINK, 'url'=>'#'),-->
<!--				array('label'=>TbHtml::STYLE_LINK, 'url'=>'#'),-->
<!--			)-->
<!--		)-->
<!--	)-->
<!--));-->
<!--	</pre>-->
<!---->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!--<h3>Forms</h3>-->
<!---->
<!--<p><code>TbNavbar</code> allows you to include HTML text too, so to include forms in the navigation bar is quite an easy-->
<!--    task.</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'brand' => 'Title',
//            'fixed' => false,
//            'items' => array(
//                '<form class="navbar-form pull-left">
//                        <input type="text" class="span2">
//                        <button type="submit" class="btn">Submit</button>
//                    </form>'
//            )
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbNavbar', array(-->
<!--    'brand' => 'Title',-->
<!--    'fixed' => false,-->
<!--    'items' => array(-->
<!--        '&lt;form class="navbar-form pull-left"&gt;-->
<!--        &lt;input type="text" class="span2"&gt;-->
<!--        &lt;button type="submit" class="btn">Submit&lt;/button&gt;-->
<!--        &lt;/form&gt;'-->
<!--    )-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<h3>Search form</h3>-->
<!---->
<!--<p>Check this alternative search form.</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'brand' => 'Title',
//            'fixed' => false,
//            'items' => array(
//                '<form class="navbar-search pull-left">
//                        <input type="text" class="search-query" placeholder="search">
//                    </form>'
//            )
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbNavbar', array(-->
<!--    'brand' => 'Title',-->
<!--    'fixed' => false,-->
<!--    'items' => array(-->
<!--        '&lt;form class="navbar-search pull-left"&gt;-->
<!--        &lt;input type="text" class="search-query" placeholder="search"&gt;-->
<!--        &lt;button type="submit" class="btn">Submit&lt;/button&gt;-->
<!--        &lt;/form&gt;'-->
<!--    )-->
<!--));	</pre>-->
<!---->
<!--<h3>Component alignment</h3>-->
<!---->
<!--<p>Align nav links, search form, or text, use the <code>.pull-left</code> or <code>.pull-right</code> utility classes.-->
<!--    Both classes will add a CSS float in the specified direction.</p>-->
<!---->
<!--<h3>Using dropdowns</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'brand' => 'Title',
//            'fixed' => false,
//            'items' => array(
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'items' => array(
//                        array('label' => 'Home', 'url' => '#', 'active' => true),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        array('label' => 'Dropdown', 'items' => array(
//                            array('label' => 'Item1', 'url' => '#')
//                        )),
//                    )
//                )
//            )
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbNavbar', array(-->
<!--	'brand' => 'Title',-->
<!--	'items' => array(-->
<!--		array(-->
<!--			'class' => 'bootstrap.widgets.TbMenu',-->
<!--			'items' => array(-->
<!--				array('label'=>'Home', 'url'=>'#', 'active'=>true),-->
<!--				array('label'=>TbHtml::STYLE_LINK, 'url'=>'#'),-->
<!--				array('label'=>'Dropdown', 'items'=> array(-->
<!--				     array('label'=>'Item1', 'url'=>'#')-->
<!--				)),-->
<!--			)-->
<!--		)-->
<!--	)-->
<!--));-->
<!--	</pre>-->
<!---->
<!---->
<!--<h3>Text</h3>-->
<!---->
<!--<p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper-->
<!--    leading and color.</p>-->
<!---->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!---->
<!--<h2>Optional display variations</h2>-->
<!---->
<!--<p>Fix the navbar to the top or bottom of the viewport by seeting property-->
<!--    <code>fixed</code>.</p>-->
<!---->
<!--<h3>Fixed to top</h3>-->
<!---->
<!--<p>Add <code>'fixed'=>'top'</code> to position the navigration bar to the top.</p>-->
<!---->
<!--<div class="bs-docs-example bs-navbar-top-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'brand' => 'Title',
//            'brandOptions' => array('style' => 'width:auto;margin-left: 0px;'),
//            'fixed' => 'top',
//            'htmlOptions' => array('style' => 'position:absolute'),
//            'items' => array(
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'items' => array(
//                        array('label' => 'Home', 'url' => '#', 'active' => true),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                    )
//                )
//            )
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbNavbar', array(-->
<!--	'brand' => 'Title',-->
<!--	'brandOptions' => array('style'=>'width:auto;margin-left: 0px;'),-->
<!--	'fixed' => 'top',-->
<!--	'htmlOptions' => array('style' => 'position:absolute'),-->
<!--	'items' => array(-->
<!--		array(-->
<!--			'class' => 'bootstrap.widgets.TbMenu',-->
<!--			'items' => array(-->
<!--				array('label' => 'Home', 'url' => '#', 'active' => true),-->
<!--				array('label' => TbHtml::STYLE_LINK, 'url' => '#'),-->
<!--				array('label' => TbHtml::STYLE_LINK, 'url' => '#'),-->
<!--			)-->
<!--		)-->
<!--	)-->
<!--));	</pre>-->
<!---->
<!--<h3>Fixed to bottom</h3>-->
<!---->
<!--<p>Add <code>'fixed'=>'bottom'</code> instead.</p>-->
<!---->
<!--<div class="bs-docs-example bs-navbar-bottom-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'brand' => 'Title',
//            'brandOptions' => array('style' => 'width:auto;margin-left: 0px;'),
//            'fixed' => 'bottom',
//            'htmlOptions' => array('style' => 'position:absolute'),
//            'items' => array(
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'items' => array(
//                        array('label' => 'Home', 'url' => '#', 'active' => true),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                    )
//                )
//            )
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--...-->
<!--'fixed' => 'bottom',-->
<!--...-->
<!--	</pre>-->
<!---->
<!--<h3>Static top navbar</h3>-->
<!---->
<!--<p>Setting the property <code>fixed</code> to false will make the navbar static..</p>-->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!---->
<!--<h2>Responsive navbar</h2>-->
<!---->
<!--<p>To implement a collapsing responsive navbar, just set the <code>collapse</code> property to true.</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'type' => null, // null or TbHtml::STYLE_INVERSE
//            'brand' => 'Project name',
//            'brandUrl' => '#',
//            'collapse' => true, // requires bootstrap-responsive.css
//            'fixed' => false,
//            'items' => array(
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'items' => array(
//                        array('label' => 'Home', 'url' => '#', 'active' => true),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        array('label' => 'Dropdown', 'url' => '#', 'items' => array(
//                            array('label' => 'Action', 'url' => '#'),
//                            array('label' => 'Another action', 'url' => '#'),
//                            array('label' => 'Something else here', 'url' => '#'),
//                            '---',
//                            array('label' => 'NAV HEADER'),
//                            array('label' => 'Separated link', 'url' => '#'),
//                            array('label' => 'One more separated link', 'url' => '#'),
//                        )),
//                    ),
//                ),
//                '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'htmlOptions' => array('class' => 'pull-right'),
//                    'items' => array(
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        '---',
//                        array('label' => 'Dropdown', 'url' => '#', 'items' => array(
//                            array('label' => 'Action', 'url' => '#'),
//                            array('label' => 'Another action', 'url' => '#'),
//                            array('label' => 'Something else here', 'url' => '#'),
//                            '---',
//                            array('label' => 'Separated link', 'url' => '#'),
//                        )),
//                    ),
//                ),
//            ),
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbNavbar', array(-->
<!--	'type'=>null, // null or TbHtml::STYLE_INVERSE-->
<!--	'brand'=>'Project name',-->
<!--	'brandUrl'=>'#',-->
<!--	'collapse'=>true, // requires bootstrap-responsive.css-->
<!--	'items'=>array(-->
<!--		array(-->
<!--			'class'=>'bootstrap.widgets.TbMenu',-->
<!--			'items'=>array(-->
<!--				array('label'=>'Home', 'url'=>'#', 'active'=>true),-->
<!--				array('label'=>TbHtml::STYLE_LINK, 'url'=>'#'),-->
<!--				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(-->
<!--					array('label'=>'Action', 'url'=>'#'),-->
<!--					array('label'=>'Another action', 'url'=>'#'),-->
<!--					array('label'=>'Something else here', 'url'=>'#'),-->
<!--					'---',-->
<!--					array('label'=>'NAV HEADER'),-->
<!--					array('label'=>'Separated link', 'url'=>'#'),-->
<!--					array('label'=>'One more separated link', 'url'=>'#'),-->
<!--				)),-->
<!--			),-->
<!--		),-->
<!--		'&lt;form class="navbar-search pull-left" action=""&gt;&lt;input type="text" class="search-query span2" placeholder="Search">&lt;/form&gt;',-->
<!--		array(-->
<!--			'class'=>'bootstrap.widgets.TbMenu',-->
<!--			'htmlOptions'=>array('class'=>'pull-right'),-->
<!--			'items'=>array(-->
<!--				array('label'=>TbHtml::STYLE_LINK, 'url'=>'#'),-->
<!--				'---',-->
<!--				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(-->
<!--					array('label'=>'Action', 'url'=>'#'),-->
<!--					array('label'=>'Another action', 'url'=>'#'),-->
<!--					array('label'=>'Something else here', 'url'=>'#'),-->
<!--					'---',-->
<!--					array('label'=>'Separated link', 'url'=>'#'),-->
<!--				)),-->
<!--			),-->
<!--		),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<hr class="bs-docs-separator">-->
<!---->
<!---->
<!--<h2>Inverted variation</h2>-->
<!---->
<!--<p>Modify the look of the navbar by setting it <code>type</code> property to <code>inverse</code>.</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//            'type' => TbHtml::STYLE_INVERSE,
//            'brand' => 'Project name',
//            'brandUrl' => '#',
//            'collapse' => true, // requires bootstrap-responsive.css
//            'fixed' => false,
//            'items' => array(
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'items' => array(
//                        array('label' => 'Home', 'url' => '#', 'active' => true),
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        array('label' => 'Dropdown', 'url' => '#', 'items' => array(
//                            array('label' => 'Action', 'url' => '#'),
//                            array('label' => 'Another action', 'url' => '#'),
//                            array('label' => 'Something else here', 'url' => '#'),
//                            '---',
//                            array('label' => 'NAV HEADER'),
//                            array('label' => 'Separated link', 'url' => '#'),
//                            array('label' => 'One more separated link', 'url' => '#'),
//                        )),
//                    ),
//                ),
//                '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'htmlOptions' => array('class' => 'pull-right'),
//                    'items' => array(
//                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
//                        '---',
//                        array('label' => 'Dropdown', 'url' => '#', 'items' => array(
//                            array('label' => 'Action', 'url' => '#'),
//                            array('label' => 'Another action', 'url' => '#'),
//                            array('label' => 'Something else here', 'url' => '#'),
//                            '---',
//                            array('label' => 'Separated link', 'url' => '#'),
//                        )),
//                    ),
//                ),
//            ),
//        ));
?>
<!---->
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--...-->
<!--'type' => TbHtml::STYLE_INVERSE-->
<!--...-->
<!--	</pre>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<!-- Breadcrumbs-->
<!--	================================================== -->-->
<!--<section id="breadcrumbs">-->
<!--    <div class="page-header">-->
<!--        <h1>Breadcrumbs-->
<!--            <small></small>-->
<!--        </h1>-->
<!--    </div>-->
<!---->
<!--    <h2>Examples</h2>-->
<!---->
<!--    <p>A single example shown as it might be displayed across multiple pages.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
//                'homeLink' => 'Home',
//                'links' => array('')
//            ));
?>
<!--        --><?php //$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
//                'links' => array('Library'),
//            ));
?>
<!--        --><?php //$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
//                'links' => array('Library' => '#', 'Data'),
//            ));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbBreadcrumbs', array(-->
<!--    'links'=>array('Library'=>'#', 'Data'),-->
<!--));-->
<!--</pre>-->
<!---->
<!--</section>-->
<!---->
<!--<!-- Labels and badges-->
<!--	================================================== -->-->
<!--<section id="labels-badges">-->
<!--    <div class="page-header">-->
<!--        <h1>Labels and badges</h1>-->
<!--    </div>-->
<!--    <h3>Labels</h3>-->
<!--    <table class="table table-bordered table-striped">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Labels</th>-->
<!--            <th>Markup</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <span class="label">Default</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <span class="label label-success">Success</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <span class="label label-warning">Warning</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <span class="label label-important">Important</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <span class="label label-info">Info</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <span class="label label-inverse">Inverse</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        </tbody>-->
<!--    </table>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbLabel', array(-->
<!--     'type'=>TbHtml::STYLE_SUCCESS, // TbHtml::STYLE_SUCCESS, TbHtml::STYLE_WARNING, 'important', TbHtml::STYLE_INFO or TbHtml::STYLE_INVERSE-->
<!--     'label'=>TbHtml::STYLE_SUCCESS,-->
<!--));-->
<!-- </pre>-->
<!--    <h3>Badges</h3>-->
<!--    <table class="table table-bordered table-striped">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Name</th>-->
<!--            <th>Example</th>-->
<!--            <th>Markup</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Default-->
<!--            </td>-->
<!--            <td>-->
<!--                <span class="badge">1</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Success-->
<!--            </td>-->
<!--            <td>-->
<!--                <span class="badge badge-success">2</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Warning-->
<!--            </td>-->
<!--            <td>-->
<!--                <span class="badge badge-warning">4</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Important-->
<!--            </td>-->
<!--            <td>-->
<!--                <span class="badge badge-important">6</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Info-->
<!--            </td>-->
<!--            <td>-->
<!--                <span class="badge badge-info">8</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Inverse-->
<!--            </td>-->
<!--            <td>-->
<!--                <span class="badge badge-inverse">10</span>-->
<!--            </td>-->
<!--            <td>-->
<!--                <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>-->
<!--            </td>-->
<!--        </tr>-->
<!--        </tbody>-->
<!--    </table>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbBadge', array(-->
<!--     'type'=>TbHtml::STYLE_SUCCESS, // TbHtml::STYLE_SUCCESS, TbHtml::STYLE_WARNING, 'important', TbHtml::STYLE_INFO or TbHtml::STYLE_INVERSE-->
<!--     'label'=>'2',-->
<!--));-->
<!-- </pre>-->
<!--</section>-->
<!---->
<!---->
<!--<!-- Typographic components-->
<!--	================================================== -->-->
<!--<section id="typography">-->
<!--    <div class="page-header">-->
<!--        <h1>Typographic components</h1>-->
<!--    </div>-->
<!---->
<!--    <h2>Hero unit</h2>-->
<!---->
<!--    <p>A lightweight, flexible component to showcase key content on your site. It works well on marketing and-->
<!--        content-heavy sites.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
//                'heading' => 'Hello, world!',
//            ));
?>
<!---->
<!--        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured-->
<!--            content or information.</p>-->
<!---->
<!--        <p>--><?php //$this->widget('bootstrap.widgets.TbButton', array(
//                    'type' => TbHtml::STYLE_PRIMARY,
//                    'size' => TbHtml::SIZE_LARGE,
//                    'label' => 'Learn more',
//                )); ?><!--</p>-->
<!---->
<!--        --><?php //$this->endWidget(); ?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--&lt;?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(-->
<!--	'heading'=>'Hello, world!',-->
<!--)); ?&gt;-->
<!---->
<!--&lt;p&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;-->
<!--&lt;p&gt;-->
<!--	&lt;?php $this->widget('bootstrap.widgets.TbButton', array(-->
<!--    'type'=>TbHtml::STYLE_PRIMARY,-->
<!--    'size'=>TbHtml::SIZE_LARGE,-->
<!--    'label'=>'Learn more',-->
<!--)); ?&gt;-->
<!--&lt;/p&gt;-->
<!---->
<!--&lt;?php $this->endWidget(); ?&gt;-->
<!--</pre>-->
<!---->
<!--    <h2>Page header</h2>-->
<!---->
<!--    <p>Not part of any widget but worth to know: A simple shell for an <code>h1</code> to appropriately space out and-->
<!--        segment sections of content on a page. It-->
<!--        can utilize the <code>h1</code>'s default <code>small</code>, element as well most other components (with-->
<!--        additional styles).</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        <div class="page-header">-->
<!--            <h1>Example page header-->
<!--                <small>Subtext for header</small>-->
<!--            </h1>-->
<!--        </div>-->
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--	&lt;div class="page-header"&gt;-->
<!--	  &lt;h1&gt;Example page header &lt;small&gt;Subtext for header&lt;/small&gt;&lt;/h1&gt;-->
<!--	&lt;/div&gt;-->
<!--	</pre>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<!-- Thumbnails-->
<!--	================================================== -->-->
<!--<section id="thumbnails">-->
<!--    <div class="page-header">-->
<!--        <h1>Thumbnails-->
<!--            <small>Grids of images, videos, text, and more</small>-->
<!--        </h1>-->
<!--    </div>-->
<!---->
<!--    <h2>Default thumbnails</h2>-->
<!---->
<!--    <p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>-->
<!---->
<!--    <div class="row-fluid">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbThumbnails', array(
//                'dataProvider' => $thumbDataProvider,
//                'template' => "{items}\n{pager}",
//                'itemView' => '_thumb',
//            ));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbThumbnails', array(-->
<!--	'dataProvider'=>$thumbDataProvider,-->
<!--	'template'=>"{items}\n{pager}",-->
<!--	'itemView'=>'_thumb',-->
<!--));-->
<!--	</pre>-->
<!--</section>-->
<!---->
<!---->
<!--<!-- Alerts-->
<!--	================================================== -->-->
<!--<section id="alerts">-->
<!--    <div class="page-header">-->
<!--        <h1>Alerts-->
<!--            <small>Styles for success, warning, and error messages</small>-->
<!--        </h1>-->
<!--    </div>-->
<!---->
<!--    <h2>Default alert</h2>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php
//        Yii::app()->user->setFlash(TbHtml::STYLE_SUCCESS, '<strong>Well done!</strong> You successfully read this important alert message.');
//        $this->widget('bootstrap.widgets.TbAlert', array(
//                'block' => true, // display a larger alert block?
//                'fade' => true, // use transitions?
//                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
//                'alerts' => array( // configurations per alert type
//                    TbHtml::STYLE_SUCCESS => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
//                ),
//            ));
//        Yii::app()->user->setFlash(TbHtml::STYLE_INFO, '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
//        $this->widget('bootstrap.widgets.TbAlert', array(
//                'block' => true, // display a larger alert block?
//                'fade' => true, // use transitions?
//                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
//                'alerts' => array( // configurations per alert type
//                    TbHtml::STYLE_INFO => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
//                ),
//            ));
//        Yii::app()->user->setFlash(TbHtml::STYLE_WARNING, '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
//        $this->widget('bootstrap.widgets.TbAlert', array(
//                'block' => true, // display a larger alert block?
//                'fade' => true, // use transitions?
//                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
//                'alerts' => array( // configurations per alert type
//                    TbHtml::STYLE_WARNING => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
//                ),
//            ));
//        Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');
//        $this->widget('bootstrap.widgets.TbAlert', array(
//                'block' => true, // display a larger alert block?
//                'fade' => true, // use transitions?
//                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
//                'alerts' => array( // configurations per alert type
//                    'error' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
//                ),
//            ));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--Yii::app()->user->setFlash(TbHtml::STYLE_SUCCESS, '&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.');-->
<!--$this->widget('bootstrap.widgets.TbAlert', array(-->
<!--    'block'=>true, // display a larger alert block?-->
<!--    'fade'=>true, // use transitions?-->
<!--    'closeText'=>'&times;', // close link text - if set to false, no close link is displayed-->
<!--    'alerts'=>array( // configurations per alert type-->
<!--	    TbHtml::STYLE_SUCCESS=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
-->
<!--    ),-->
<!--));-->
<!--	</pre>-->
<!--</section>-->
<!---->
<!---->
<!--<!-- Progress bars-->
<!--	================================================== -->-->
<!--<section id="progress">-->
<!--    <div class="page-header">-->
<!--        <h1>Progress bars-->
<!--            <small>For loading, redirecting, or action status</small>-->
<!--        </h1>-->
<!--    </div>-->
<!---->
<!--    <h2>Examples</h2>-->
<!---->
<!--    <h3>Basic</h3>-->
<!---->
<!--    <p>Default progress bar with a vertical gradient.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbProgress', array(
//                'type' => TbHtml::STYLE_SUCCESS, // TbHtml::STYLE_INFO, TbHtml::STYLE_SUCCESS or TbHtml::STYLE_DANGER
//                'percent' => 60,
//            ));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbProgress', array(-->
<!--    'type'=>TbHtml::STYLE_SUCCESS, // TbHtml::STYLE_INFO, TbHtml::STYLE_SUCCESS or TbHtml::STYLE_DANGER-->
<!--    'percent'=>60,-->
<!--));-->
<!--	</pre>-->
<!---->
<!--    <h3>Striped</h3>-->
<!---->
<!--    <p>Uses a gradient to create a striped effect. Not available in IE7-8.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbProgress', array(
//                'type' => TbHtml::STYLE_DANGER, // TbHtml::STYLE_INFO, TbHtml::STYLE_SUCCESS or TbHtml::STYLE_DANGER
//                'percent' => 40, // the progress
//                'striped' => true,
//            ));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbProgress', array(-->
<!--    'type'=>TbHtml::STYLE_SUCCESS, // TbHtml::STYLE_INFO, TbHtml::STYLE_SUCCESS or TbHtml::STYLE_DANGER-->
<!--    'percent'=>60,-->
<!--	'stripped'=>true-->
<!--));-->
<!--	</pre>-->
<!---->
<!--    <h3>Animated</h3>-->
<!---->
<!--    <p>Set <code>animated</code> to <code>true</code> to animate the stripes right to left. Not available in-->
<!--        all versions of IE.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbProgress', array(
//                'percent' => 40, // the progress
//                'striped' => true,
//                'animated' => true,
//            ));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbProgress', array(-->
<!--    'percent'=>40, // the progress-->
<!--    'striped'=>true,-->
<!--    'animated'=>true,-->
<!--));-->
<!--	</pre>-->
<!---->
<!--    <h3>Stacked</h3>-->
<!---->
<!--    <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbProgress', array(
//                'stacked' => array(
//                    array('type' => TbHtml::STYLE_SUCCESS, 'percent' => 30, 'htmlOptions' => array('title' => 'Hey! I am a title here.')),
//                    array('type' => TbHtml::STYLE_WARNING, 'percent' => 35),
//                    array('type' => TbHtml::STYLE_DANGER, 'percent' => 30),
//                )));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbProgress', array(-->
<!--    'stacked'=>array(-->
<!--	    array('type'=>TbHtml::STYLE_SUCCESS, 'percent'=>30, 'htmlOptions'=>array('title'=>'Hey! I am a title here.')),-->
<!--	    array('type'=>TbHtml::STYLE_WARNING, 'percent'=>35),-->
<!--	    array('type'=>TbHtml::STYLE_DANGER, 'percent'=>30),-->
<!--)));-->
<!--	</pre>-->
<!---->
<!---->
<!--    <hr class="bs-docs-separator">-->
<!---->
<!--    <h2>Browser support</h2>-->
<!---->
<!--    <p>Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are-->
<!--        not supported in IE7-9 or older versions of Firefox.</p>-->
<!---->
<!--    <p>Versions earlier than Internet Explorer 10 and Opera 12 do not support animations.</p>-->
<!---->
<!--</section>-->
<!---->
<!--<!-- Tables-->
<!--	================================================== -->-->
<!--<section id="tables">-->
<!--    <div class="page-header">-->
<!--        <h1>Tables</h1>-->
<!--    </div>-->
<!---->
<!--    <h2>Detail Views</h2>-->
<!---->
<!--    <h3>Basic Stuff</h3>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbDetailView', array(
//                'data' => array('id' => 1, 'firstName' => 'Mark', 'lastName' => 'Otto', 'language' => 'CSS'),
//                'attributes' => array(
//                    array('name' => 'firstName', 'label' => 'First name'),
//                    array('name' => 'lastName', 'label' => 'Last name'),
//                    array('name' => 'language', 'label' => 'Language'),
//                ),
//            ));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbDetailView', array(-->
<!--    'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),-->
<!--    'attributes'=>array(-->
<!--	    array('name'=>'firstName', 'label'=>'First name'),-->
<!--	    array('name'=>'lastName', 'label'=>'Last name'),-->
<!--	    array('name'=>'language', 'label'=>'Language'),-->
<!--    ),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--    <h2>Grid Views</h2>-->
<!---->
<!--    <p>In order to test the Grid Views we make use of the following data:</p>-->
<!--<pre class="prettyprint linenums">-->
<!--// $gridDataProvider-->
<!--$mark = new Person();-->
<!--$mark->id = 1;-->
<!--$mark->firstName = 'Mark';-->
<!--$mark->lastName = 'Otto';-->
<!--$mark->language = 'CSS';-->
<!--$mark->hours = 10;-->
<!---->
<!--$jacob = new Person();-->
<!--$jacob->id = 2;-->
<!--$jacob->firstName = 'Jacob';-->
<!--$jacob->lastName = 'Thornton';-->
<!--$jacob->language = 'JavaScript';-->
<!--$jacob->hours = 20;-->
<!---->
<!--$stu = new Person();-->
<!--$stu->id = 3;-->
<!--$stu->firstName = 'Stu';-->
<!--$stu->lastName = 'Dent';-->
<!--$stu->language = 'HTML';-->
<!--$stu->hours = 10;-->
<!---->
<!--$persons = array($mark, $jacob, $stu);-->
<!---->
<!--$gridDataProvider = new CArrayDataProvider($persons);-->
<!---->
<!--// $gridColumns-->
<!--$gridColumns = array(-->
<!--	array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),-->
<!--	array('name'=>'firstName', 'header'=>'First name'),-->
<!--	array('name'=>'lastName', 'header'=>'Last name'),-->
<!--	array('name'=>'language', 'header'=>'Language'),-->
<!--	array('name'=>'hours', 'header'=>'Hours worked'),-->
<!--	array(-->
<!--		'htmlOptions' => array('nowrap'=>'nowrap'),-->
<!--		'class'=>'bootstrap.widgets.TbButtonColumn',-->
<!--		'viewButtonUrl'=>null,-->
<!--		'updateButtonUrl'=>null,-->
<!--		'deleteButtonUrl'=>null,-->
<!--	)-->
<!--);-->
<!--</pre>-->
<!--    <h3>Default</h3>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbGridView', array(
//                'dataProvider' => $gridDataProvider,
//                'template' => "{items}",
//                'columns' => $gridColumns,
//            ));
?>
<!--    </div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbGridView', array(-->
<!--	'dataProvider'=>$gridDataProvider,-->
<!--	'template'=>"{items}",-->
<!--	'columns'=>$gridColumns,-->
<!--));-->
<!--</pre>-->
<!--    <h3>Striped</h3>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbGridView', array(
//                'type' => 'striped',
//                'dataProvider' => $gridDataProvider,
//                'template' => "{items}",
//                'columns' => $gridColumns,
//            ));
?>
<!--    </div>-->
<!--<pre class="prettyprint linenums">-->
<!--this->widget('bootstrap.widgets.TbGridView', array(-->
<!--	'type'=>'striped',-->
<!--	'dataProvider'=>$gridDataProvider,-->
<!--	'template'=>"{items}",-->
<!--	'columns'=>$gridColumns,-->
<!--));-->
<!--</pre>-->
<!--    <h3>Bordered</h3>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbGridView', array(
//                'type' => 'bordered',
//                'dataProvider' => $gridDataProvider,
//                'template' => "{items}",
//                'columns' => $gridColumns,
//            ));
?>
<!--    </div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbGridView', array(-->
<!--	'type'=>'bordered',-->
<!--	'dataProvider'=>$gridDataProvider,-->
<!--	'template'=>"{items}",-->
<!--	'columns'=>$gridColumns,-->
<!--));-->
<!--</pre>-->
<!--    <h3>Condensed</h3>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbGridView', array(
//                'type' => 'condensed',
//                'dataProvider' => $gridDataProvider,
//                'template' => "{items}",
//                'columns' => $gridColumns,
//            ));
?>
<!--    </div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbGridView', array(-->
<!--	'type'=>'condensed',-->
<!--	'dataProvider'=>$gridDataProvider,-->
<!--	'template'=>"{items}",-->
<!--	'columns'=>$gridColumns,-->
<!--));-->
<!--</pre>-->
<!--    <h3>Striped, bordered and condensed</h3>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbGridView', array(
//                'type' => 'striped bordered condensed',
//                'dataProvider' => $gridDataProvider,
//                'template' => "{items}",
//                'filter' => $person->search(),
//                'columns' => $gridColumns,
//            ));
?>
<!--    </div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbGridView', array(-->
<!--	'type'=>'striped bordered condensed',-->
<!--	'dataProvider'=>$gridDataProvider,-->
<!--	'template'=>"{items}",-->
<!--	'filter'=>$person->search(),-->
<!--	'columns'=>$gridColumns,-->
<!--));-->
<!--</pre>-->
<!--</section>-->
<!---->
<!--<!-- Forms-->
<!--	================================================== -->-->
<!--<section id="forms">-->
<!--<div class="page-header">-->
<!--    <h1>Forms</h1>-->
<!--</div>-->
<!---->
<!--<h2>Vertical</h2>-->
<!---->
<!--<p>Use the well as a simple effect on an element to give it an inset effect.</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php ///** @var BootActiveForm $form */
//    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
//            'id' => 'verticalForm',
//            'htmlOptions' => array('class' => 'well'),
//        ));
?>
<!---->
<!--    --><?php //echo $form->textFieldRow($model, 'textField', array('class' => 'span3')); ?>
<!--    --><?php //echo $form->passwordFieldRow($model, 'password', array('class' => 'span3')); ?>
<!--    --><?php //echo $form->checkboxRow($model, 'checkbox'); ?>
<!--    --><?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Login')); ?>
<!---->
<!--    --><?php //$this->endWidget(); ?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--&lt;?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(-->
<!--    'id'=>'verticalForm',-->
<!--    'htmlOptions'=>array('class'=>'well'),-->
<!--)); ?&gt;-->
<!---->
<!--&lt;?php echo $form->textFieldRow($model, 'textField', array('class'=>'span3')); ?&gt;-->
<!--&lt;?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?&gt;-->
<!--&lt;?php echo $form->checkboxRow($model, 'checkbox'); ?&gt;-->
<!--&lt;?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?&gt;-->
<!---->
<!--&lt;?php $this->endWidget(); ?&gt;-->
<!--</pre>-->
<!--<h3>Search Form</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php ///** @var BootActiveForm $form */
//    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
//            'id' => 'searchForm',
//            'type' => 'search',
//            'htmlOptions' => array('class' => 'well'),
//        ));
?>
<!--    --><?php //echo $form->textFieldRow($model, 'textField', array('class' => 'input-medium', 'prepend' => '<i class="icon-search"></i>')); ?>
<!--    --><?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Go')); ?>
<!---->
<!--    --><?php //$this->endWidget(); ?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--&lt;?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(-->
<!--	'id'=>'searchForm',-->
<!--	'type'=>'search',-->
<!--	'htmlOptions'=>array('class'=>'well'),-->
<!--)); ?&gt;-->
<!--&lt;?php-->
<!--	echo $form->textFieldRow($model, 'textField',-->
<!--		array('class'=>'input-medium', 'prepend'=>'&lt;i class="icon-search">&lt;/i&gt;'));-->
<!--?&gt;-->
<!--&lt;?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?&gt;-->
<!---->
<!--&lt;?php $this->endWidget(); ?&gt;-->
<!--	</pre>-->
<!--<h3>Inline Form</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php ///** @var BootActiveForm $form */
//    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
//            'id' => 'inlineForm',
//            'type' => 'inline',
//            'htmlOptions' => array('class' => 'well'),
//        ));
?>
<!---->
<!--    --><?php //echo $form->textFieldRow($model, 'textField', array('class' => 'input-small')); ?>
<!--    --><?php //echo $form->passwordFieldRow($model, 'password', array('class' => 'input-small')); ?>
<!--    --><?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Log in')); ?>
<!---->
<!--    --><?php //$this->endWidget(); ?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--&lt;?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(-->
<!--	'id'=>'inlineForm',-->
<!--	'type'=>'inline',-->
<!--	'htmlOptions'=>array('class'=>'well'),-->
<!--)); ?&gt;-->
<!---->
<!--&lt;?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-small')); ?&gt;-->
<!--&lt;?php echo $form->passwordFieldRow($model, 'password', array('class'=>'input-small')); ?&gt;-->
<!--&lt;?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Log in')); ?&gt;-->
<!---->
<!--&lt;?php $this->endWidget(); ?&gt;-->
<!--	</pre>-->
<!--<h3>Horizontal</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php ///** @var BootActiveForm $form */
//    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
//            'id' => 'horizontalForm',
//            'type' => 'horizontal',
//        ));
?>
<!---->
<!--    <fieldset>-->
<!---->
<!--        <legend>Legend</legend>-->
<!---->
<!--        --><?php //echo $form->textFieldRow($model, 'textField', array('hint' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
<!--        --><?php //echo $form->datepickerRow($model, 'dateField', array('options' => array('language' => 'es'), 'hint' => 'Click inside! This is a super cool date field.', 'prepend' => '<i class="icon-calendar"></i>')); ?>
<!--        --><?php //echo $form->dateRangeRow($model, 'dateRangeField', array('hint' => 'Click inside! An even a date range field!.',
//                                                                       'prepend' => '<i class="icon-calendar"></i>',
//                                                                       'options' => array('callback' => 'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}')
//            ));
?>
<!--        --><?php //echo $form->timepickerRow($model, 'timepicker', array('hint' => 'Nice bootstrap time picker', 'class' => 'input-small', 'append' => '<i class="icon-time" style="cursor:pointer"></i>'));?>
<!--        --><?php //echo $form->colorpickerRow($model, 'colorpicker', array('hint' => 'Color fields, not bad'));?>
<!--        --><?php //echo $form->dropDownListRow($model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
<!--        --><?php //echo $form->dropDownListRow($model, 'multiDropdown', array('1', '2', '3', '4', '5'), array('multiple' => true)); ?>
<!--        --><?php //echo $form->select2Row($model, 'select2', array('asDropDownList' => false, 'options' => array(
//                'tags' => array('clever', 'is', 'better', 'clevertech'),
//                'placeholder' => 'type clever, or is, or just type!',
//                'width' => '40%',
//                'tokenSeparators' => array(',', ' ')
//            )));
?>
<!--        --><?php //echo $form->fileFieldRow($model, 'fileField'); ?>
<!--        --><?php //echo $form->textAreaRow($model, 'textarea', array('class' => 'span4', 'rows' => 5)); ?>
<!--        --><?php //echo $form->redactorRow($model, 'redactor', array('class' => 'span4', 'rows' => 5,
//                                                                'hint' => '<span class="label label-important">Important</span> Developers must obtain a license for <a href="http://impreavi.com/redactor/download">RedactorJS</a> to use it on their projects.')
//        );
?>
<!--        --><?php //echo $form->html5EditorRow($model, 'wysihtml5', array('class' => 'span4', 'rows' => 5, 'height' => '200', 'options' => array('color' => true))); ?>
<!--        --><?php //echo $form->ckEditorRow($model, 'ckeditor', array('options' => array('fullpage' => 'js:true', 'width' => '640', 'resize_maxWidth' => '640', 'resize_minWidth' => '320')));?>
<!--        --><?php //echo $form->markdownEditorRow($model, 'markdown', array('height' => '200px'));?>
<!--        --><?php //echo $form->toggleButtonRow($model, 'toggle'); ?>
<!--        --><?php //echo $form->textFieldRow($model, 'disabled', array('disabled' => true)); ?>
<!--        --><?php //echo $form->textFieldRow($model, 'prepend', array('prepend' => '@')); ?>
<!--        --><?php //echo $form->textFieldRow($model, 'append', array('append' => '.00')); ?>
<!--        --><?php //echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled' => true)); ?>
<!--        --><?php //echo $form->checkBoxListInlineRow($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
<!--        --><?php //echo $form->checkBoxListRow($model, 'checkboxes', array(
//                'Option one is this and that—be sure to include why it\'s great',
//                'Option two can also be checked and included in form results',
//                'Option three can—yes, you guessed it—also be checked and included in form results',
//            ), array('hint' => '<strong>Note:</strong> Labels surround all the options for much larger click areas.'));
?>
<!--        --><?php //echo $form->radioButtonRow($model, 'radioButton'); ?>
<!--        --><?php //echo $form->radioButtonListRow($model, 'radioButtons', array(
//                'Option one is this and that—be sure to include why it\'s great',
//                'Option two can is something else and selecting it will deselect option one',
//            ));
?>
<!--    </fieldset>-->
<!---->
<!--    <div class="form-actions">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => TbHtml::STYLE_PRIMARY, 'label' => 'Submit')); ?>
<!--        --><?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'reset', 'label' => 'Reset')); ?>
<!--    </div>-->
<!---->
<!--    --><?php //$this->endWidget(); ?>
<!--</div>-->
<!--<pre class="prettyprint linenums">-->
<!--&lt;?php /** @var BootActiveForm $form */-->
<!--	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(-->
<!--		'id'=>'horizontalForm',-->
<!--		'type'=>'horizontal',-->
<!--	)); ?&gt;-->
<!---->
<!--    &lt;fieldset&gt;-->
<!---->
<!--        &lt;legend>Legend&lt;/legend&gt;-->
<!---->
<!--        &lt;?php echo $form->textFieldRow($model, 'textField',-->
<!--        array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?&gt;-->
<!--        &lt;?php echo $form->datepickerRow($model, 'dateField',-->
<!--        array('hint'=>'Click inside! This is a super cool date field.',-->
<!--        'prepend'=>'&gt;i class="icon-calendar"&gt;&gt;/i&gt;')); ?&gt;-->
<!--        &lt;?php echo $form->dateRangeRow($model, 'dateRangeField',-->
<!--        array('hint'=>'Click inside! An even a date range field!.',-->
<!--        'prepend'=>'&lt;i class="icon-calendar">&gt;/i&gt;',-->
<!--        'options' => array('callback'=>'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}')-->
<!--        )); ?&gt;-->
<!--		&lt;?php echo $form->timepickerRow($model, 'timepicker', array('hint'=>'Nice bootstrap time picker', 'append'=>'&lt;i class="icon-time" style="cursor:pointer"&gt;&lt;/i&gt;'));?&gt;-->
<!--        &lt;?php echo $form->dropDownListRow($model, 'dropdown',-->
<!--        array('Something ...', '1', '2', '3', '4', '5')); ?&gt;-->
<!--        &lt;?php echo $form->dropDownListRow($model, 'multiDropdown',-->
<!--        array('1', '2', '3', '4', '5'), array('multiple'=>true)); ?&gt;-->
<!--        &lt;?php echo $form->select2Row($model, 'select2', array('asDropDownList' => false, 'options' => array(-->
<!--        'tags' => array('clever','is', 'better', 'clevertech'),-->
<!--        'placeholder' => 'type clever, or is, or just type!',-->
<!--        'width' => '40%',-->
<!--        'tokenSeparators' => array(',', ' ')-->
<!--        )));?&gt;-->
<!--        &lt;?php echo $form->fileFieldRow($model, 'fileField'); ?&gt;-->
<!--        &lt;?php echo $form->textAreaRow($model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?&gt;-->
<!--        &lt;?php echo $form->redactorRow($model, 'redactor', array('class'=>'span4', 'rows'=>5)); ?&gt;-->
<!--        &lt;?php echo $form->html5EditorRow($model, 'wysihtml5', array('class'=>'span4', 'rows'=>5, 'height'=>'200', 'options'=>array('color'=>true))); ?&gt;-->
<!--		&lt;?php echo $form->ckEditorRow($model, 'ckeditor', array('options'=>array('fullpage'=>'js:true', 'width'=>'640', 'resize_maxWidth'=>'640','resize_minWidth'=>'320')));?&gt;-->
<!--		&lt;?php echo $form->markdownEditorRow($model, 'markdown', array('height'=>'200px'));?&gt;-->
<!--        &lt;?php echo $form->toggleButtonRow($model, 'toggle'); ?&gt;-->
<!--        &lt;?php echo $form->uneditableRow($model, 'uneditable'); ?&gt;-->
<!--        &lt;?php echo $form->textFieldRow($model, 'disabled', array('disabled'=>true)); ?&gt;-->
<!--        &lt;?php echo $form->textFieldRow($model, 'prepend', array('prepend'=>'@')); ?&gt;-->
<!--        &lt;?php echo $form->textFieldRow($model, 'append', array('append'=>'.00')); ?&gt;-->
<!--        &lt;?php echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled'=>true)); ?&gt;-->
<!--        &lt;?php echo $form->checkBoxListInlineRow($model, 'inlineCheckboxes', array('1', '2', '3')); ?&gt;-->
<!--        &lt;?php echo $form->checkBoxListRow($model, 'checkboxes', array(-->
<!--		'Option one is this and that—be sure to include why it\'s great',-->
<!--		'Option two can also be checked and included in form results',-->
<!--		'Option three can—yes, you guessed it—also be checked and included in form results',-->
<!--	), array('hint'=>'&lt;strong>Note:&lt;/strong> Labels surround all the options for much larger click areas.')); ?&gt;-->
<!--        &lt;?php echo $form->radioButtonRow($model, 'radioButton'); ?&gt;-->
<!--        &lt;?php echo $form->radioButtonListRow($model, 'radioButtons', array(-->
<!--		'Option one is this and that—be sure to include why it\'s great',-->
<!--		'Option two can is something else and selecting it will deselect option one',-->
<!--	)); ?&gt;-->
<!---->
<!--    &lt;/fieldset&gt;-->
<!---->
<!--    &lt;div class="form-actions">-->
<!--        &lt;?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>TbHtml::STYLE_PRIMARY, 'label'=>'Submit')); ?&gt;-->
<!--        &lt;?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?&gt;-->
<!--    &lt;/div&gt;-->
<!---->
<!--&lt;?php $this->endWidget(); ?&gt;-->
<!--</pre>-->
<!--<h3>Support For Yii Formbuilder-->
<!--    <small>Thanks to Joe Blocher</small>-->
<!--</h3>-->
<!--<p>The community starts to add gems to the library. Now, YiiBooster has full support for-->
<!--    <a href="http://www.yiiframework.com/doc/guide/1.1/en/form.builder" target="_blank">yii's Form Builder</a>.-->
<!--</p>-->
<!---->
<!--<p>Example</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php
//    Yii::import('bootstrap.widgets.TbForm');
//    $formBuilderModel = new TestFormBuilder();
//
//    $form = TbForm::createForm($formBuilderModel->getFormConfig(), $formBuilderModel,
//        array( //@see TbActiveForm attributes
//            'htmlOptions' => array('class' => 'well'),
//            'type' => 'horizontal',
//        ));
//
//    //no need for an extra view file for testing
//    echo $form->render();
//
?>
<!--</div>-->
<!--<pre class="prettyprint linenums">-->
<!--// the TestFormBuilder model-->
<!--class TestFormBuilder extends CFormModel-->
<!--{-->
<!--    public $search;-->
<!--    public $agree;-->
<!--    public $radiolist;-->
<!---->
<!--    public function rules()-->
<!--    {-->
<!--        return array(-->
<!--            array('search', 'required'),-->
<!--            array('agree,radiolist', 'boolean'),-->
<!--            array('agree', 'compare', 'compareValue' => true,-->
<!--                'message' => 'You must agree...'),-->
<!---->
<!--        );-->
<!--    }-->
<!---->
<!--    // Change the labels here-->
<!--    public function attributeLabels()-->
<!--    {-->
<!--        return array(-->
<!--            'search' => 'Text search',-->
<!--            'selectlist' => 'I agree',-->
<!--        );-->
<!--    }-->
<!---->
<!--    // return the formbuilder config-->
<!--    public function getFormConfig()-->
<!--    {-->
<!--        return array(-->
<!--            'title' => 'Formbuilder test form',-->
<!--            'showErrorSummary' => true,-->
<!--            'elements' => array(-->
<!--                'search' => array(-->
<!--                    'type' => 'text',-->
<!--                       'maxlength' => 32,-->
<!--                       'hint' => 'This is a hint',-->
<!--                    'placeholder' => 'title',-->
<!--                    'class' => 'input-large',-->
<!--                    'append' => '&lt;i class="icon-search"&gt;&lt;/i&gt;',-->
<!--                ),-->
<!--                'agree' => array(-->
<!--                    'type' => 'checkbox',-->
<!--                    // 'hint' => 'Agree to terms and conditions',-->
<!--                ),-->
<!--                'radiolist' => array(-->
<!--                    'type' => 'radiolistinline',-->
<!--                    'items' => array('item1' => '1', 'item2' => '2', 'item3' => '3'),-->
<!--                ),-->
<!--            ),-->
<!---->
<!--            'buttons' => array(-->
<!--                'submit' => array(-->
<!--                    'type' => 'submit',-->
<!--                    'layoutType' => TbHtml::STYLE_PRIMARY,-->
<!--                    'label' => 'Submit',-->
<!--                ),-->
<!--                'reset' => array(-->
<!--                    'type' => 'reset',-->
<!--                    'label' => 'Reset',-->
<!--                ),-->
<!--            ),-->
<!--        );-->
<!--    }-->
<!--}-->
<!---->
<!--// rendering form-->
<!--Yii::import('bootstrap.widgets.TbForm');-->
<!--$formBuilderModel = new TestFormBuilder();-->
<!---->
<!--$form = TbForm::createForm($formBuilderModel->getFormConfig(),$formBuilderModel,-->
<!--array(-->
<!--    'htmlOptions'=>array('class'=>'well'),-->
<!--    'type'=>'horizontal',-->
<!--));-->
<!---->
<!--echo $form->render();-->
<!--</pre>-->
<!--</section>-->
<!---->
<!--<!-- Select2-->
<!--	================================================== -->-->
<!--<section id="select2">-->
<!--    <div class="page-header">-->
<!--        <h1>Select2 Widget</h1>-->
<!--    </div>-->
<!--    <p>-->
<!--        We have included the <a href="http://ivaynberg.github.com/select2/" target="_blank">Select2 on roids plugin</a>-->
<!--        of Igor Vaynberg.-->
<!--        The following is a simple example of the amount of possible features that this plugin can do. For further-->
<!--        information on its use,-->
<!--        please visit <a href="http://ivaynberg.github.com/select2/" target="_blank">plugin docs</a>.-->
<!--    </p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbSelect2', array(
//                'asDropDownList' => false,
//                'name' => 'clevertech',
//                'options' => array(
//                    'tags' => array('clever', 'is', 'better', 'clevertech'),
//                    'placeholder' => 'type clever, or is, or just type!',
//                    'width' => '40%',
//                    'tokenSeparators' => array(',', ' ')
//                )));
?>
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbSelect2', array(-->
<!--	'asDropDownList' => false,-->
<!--	'name' => 'clevertech',-->
<!--	'options' => array(-->
<!--		'tags' => array('clever','is', 'better', 'clevertech'),-->
<!--		'placeholder' => 'disciplines',-->
<!--		'width' => '40%',-->
<!--		'tokenSeparators' => array(',', ' ')-->
<!--)));	</pre>-->
<!--</section>-->
<!--<!-- Editable-->
<!--	================================================== -->-->
<!--<section id="editable">-->
<?php
//$region = new Region();
//$region->id = 1;   // trick editable
//
?>
<!--<div class="page-header">-->
<!--    <h1>Editable Widgets</h1>-->
<!--</div>-->
<!--<p>The amazing work from <a target="_blank" href="http://www.yiiframework.com/user/56359/">Vitaliy Potapov</a>,-->
<!--    <a target="_blank" href="http://ybe.demopage.ru">Yii-Boostrap-Editable</a>, is also part of YiiBooster thanks to-->
<!--    the generosity of its author.</p>-->
<!---->
<!--<p><span class="label label-info">Note</span>: For a deeper understanding of the possibilities and configuration-->
<!--    options of this widget, we highly recommend that you-->
<!--    visit <a href="http://vitalets.github.com/bootstrap-editable/#options" target="_blank">Bootstrap-editable-->
<!--        documentation</a> and-->
<!--    <a target="_blank" href="http://ybe.demopage.ru/#EditableField">Yii-Boostrap-Editable</a></p>-->
<!---->
<!--<p>-->
<!--    <span class="label label-important">New: </span> TbEditable has been updated to work with-->
<!--    <a href="http://vitalets.github.com/x-editable/docs.html" target="_blank">X-Editable</a>.-->
<!--    Thanks <a target="_blank" href="http://www.yiiframework.com/user/56359/">Vitaliy</a>!.-->
<!--</p>-->
<!---->
<!--<h2>TbEditableField</h2>-->
<!---->
<!--<p>Makes editable single attribute of model. Attribute should be safe (e.g. defined in <code>rules()</code> method-->
<!--    of model)-->
<!--    It can be one of several types:</p>-->
<!---->
<!--<h3>1. Text</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbEditableField', array(
//            'type' => 'text',
//            'model' => $region,
//            'attribute' => 'textField',
//            'url' => $this->createUrl('site/editable'), //url for submit data
//            'enabled' => true
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('ext.editable.TbEditableField', array(-->
<!--   'type'      => 'text',-->
<!--   'model'     => $model,-->
<!--   'attribute' => 'textField',-->
<!--   'url'       => $this->createUrl('site/editable'),  //url for submit data-->
<!--   'enabled'   => true-->
<!--));-->
<!--	</pre>-->
<!---->
<!--<h3>2. TextArea</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbEditableField', array(
//            'type' => 'textarea',
//            'model' => $region,
//            'attribute' => 'textArea',
//            'url' => $this->createUrl('site/editable'), //url for submit data
//            'placement' => 'right',
//            'enabled' => true
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('ext.editable.TbEditableField', array(-->
<!--   'type'      => 'textarea',-->
<!--   'model'     => $model,-->
<!--   'attribute' => 'textArea',-->
<!--   'url'       => $this->createUrl('site/editable'),  //url for submit data-->
<!--   'placement' => 'right',-->
<!--   'enabled'   => true-->
<!--));-->
<!--	</pre>-->
<!--<h3>3. Select</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbEditableField', array(
//            'type' => 'select',
//            'model' => $region,
//            'attribute' => 'dropDown',
//            'url' => $this->createUrl('site/editable'), //url for submit data
//            'source' => array('Antonio', 'Ramirez', 'Cobos', 'Works', 'At', 'Clevertech'),
//            'enabled' => true
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('ext.editable.TbEditableField', array(-->
<!--   'type'      => 'select',-->
<!--   'model'     => $model,-->
<!--   'attribute' => 'dropDown',-->
<!--   'url'       => $this->createUrl('site/editable'),  //url for submit data-->
<!--   'source'    => array('Antonio', 'Ramirez', 'Cobos', 'Works', 'At', 'Clevertech'),-->
<!--   'enabled'   => true-->
<!--));	</pre>-->
<!--<h3>4. Date</h3>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbEditableField', array(
//            'type' => 'date',
//            'model' => $region,
//            'attribute' => 'dateField',
//            'url' => $this->createUrl('site/editable'), //url for submit data
//            'format' => 'dd-mm-yyyy',
//            'viewformat' => 'dd/mm/yyyy',
//            'placement' => 'right',
//            'enabled' => true
//        ));
?>
<!--</div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('ext.editable.TbEditableField', array(-->
<!--   'type'      => 'date',-->
<!--   'model'     => $model,-->
<!--   'attribute' => 'dateField',-->
<!--   'url'       => $this->createUrl('site/editable'),  //url for submit data-->
<!--   'format' => 'dd-mm-yyyy',-->
<!--   'viewformat' => 'dd/mm/yyyy',-->
<!--   'placement'    => 'right',-->
<!--   'enabled' => true-->
<!--));	</pre>-->
<!---->
<!--<h2>TbEditableDetailView</h2>-->
<!---->
<!--<p>-->
<!--    Makes editable several attributes of single model, shown as name-value table. Just define <code>editable</code>-->
<!--    section inside attribute config. Only safe attributes become editable.-->
<!--</p>-->
<!---->
<!--<p><span class="label label-info">For more information</span>: please visit <a target="_blank"-->
<!--                                                                               href="http://www.ybe.demopage.ru/#EditableDetailView">EditableDetailView</a>-->
<!--</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbEditableDetailView', array(
//            'id' => 'region-details',
//            'data' => Region::model()->findByPk(1),
//            'url' => $this->createUrl('site/editable'), //common submit url for all editables
//            'attributes' => array(
//                'country_code',
//                'name',
//            )
//        ));
?>
<!--    <div style="clear:both"></div>-->
<!--</div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbEditableDetailView', array(-->
<!--    'id' => 'region-details',-->
<!--    'data' => Region::model()->findByPk(1),-->
<!--    'url' => $this->createUrl('site/editable'),  //common submit url for all editables-->
<!--    'attributes'=>array(-->
<!--	    'country_code',-->
<!--	    'name',-->
<!--    )-->
<!--));-->
<!--</pre>-->
<!--<h2>TbEditableColumn</h2>-->
<!---->
<!--<p>-->
<!--    Do not get confused with TbJEditableColumn, this is the-->
<!--    <a targer="_blank" href="http://ybe.demopage.ru/#EditableColumn">EditableColumn</a> widget from-->
<!--    <a target="_blank" href="http://www.yiiframework.com/user/56359/">Vitaliy Potapov</a>.-->
<!--</p>-->
<!---->
<!--<p>-->
<!--    <span class="label label-important">Important</span>: Choose between TbJEditableColumn or TbEditableColum, both-->
<!--    types-->
<!--    have conflicts if you are trying to use them together.-->
<!--</p>-->
<!---->
<!--<div class="bs-docs-example">-->
<!--    --><?php //$this->widget('bootstrap.widgets.TbGridView', array(
//            'type' => 'striped bordered',
//            'dataProvider' => new CActiveDataProvider('Region', array('criteria' => array('condition' => 'id < 4'))),
//            'template' => "{items}",
//            'columns' => array(
//                'country_code',
//                array(
//                    'class' => 'bootstrap.widgets.TbEditableColumn',
//                    'name' => 'name',
//                    'sortable' => true,
//                    'editable' => array(
//                        'url' => $this->createUrl('site/editable'),
//                        'placement' => 'right',
//                        'inputclass' => 'span3'
//                    )
//                )),
//        ));
?>
<!--    <div style="clear:both"></div>-->
<!--</div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbGridView', array(-->
<!--	'type' => 'striped bordered',-->
<!--	'dataProvider' => new CActiveDataProvider('Region',array(-->
<!--		'criteria'=>array('condition'=>'id < 5'))-->
<!--	),-->
<!--	'template' => "{items}",-->
<!--	'columns' => array(-->
<!--		'country_code',-->
<!--		array(-->
<!--			'class' => 'bootstrap.widgets.TbEditableColumn',-->
<!--			'name' => 'name',-->
<!--			'sortable'=>false,-->
<!--			'editable' => array(-->
<!--				'url' => $this->createUrl('site/editable'),-->
<!--				'placement' => 'right',-->
<!--				'inputclass' => 'span3'-->
<!--			)-->
<!--		)),-->
<!--));-->
<!--</pre>-->
<!--</section>-->
<!---->
<!--<!-- Editable-->
<!--	================================================== -->-->
<!--<section id="rangeslider">-->
<!--    --><?php
//    $testFormSlider = new TestForm();
//
//
?>
<!--    <div class="page-header">-->
<!--        <h1>JQRangeSlider Widget</h1>-->
<!--    </div>-->
<!--    <p>Antoher great work out there, the-->
<!--        <a target="_blank" href="http://ghusse.github.com/jQRangeSlider/index.html">JQRangeSlider</a>, one of the smoothest sliders we have ever seen.</p>-->
<!---->
<!--    <p>-->
<!--        Among its great features we encounter:-->
<!--    <ul>-->
<!--        <li>jQRangeSlider supports both numerical values and date and time.</li>-->
<!--        <li>jQRangeSlider supports touch devices: tested with iOS and Android. </li>-->
<!--        <li>jQRangeSlider supports steps for both numerical and date values. Select values 5 by 5 or month by month, simply by changing an option. </li>-->
<!--        <li>jQRangeSlider comes by default with two themes to demonstrate its ability to be restyled.</li>-->
<!--        <li>jQRangeSlider exposes events you can use for refreshing your UI. </li>-->
<!--    </ul>-->
<!--    </p>-->
<!---->
<!--    <p>-->
<!--        When used with a form, the widget renders a hidden input field that will be filled with the minimum and maximum-->
<!--        values of the range slider (ie: 50.7878373,40.89389834). It is up to you how you handle that on the background.-->
<!--    </p>-->
<!---->
<!--    <h2>Examples</h2>-->
<!---->
<!--    <h3>Range Slider Example</h3>-->
<!--    <p>It cannot get easier that this... :)</p>-->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbJqRangeSlider', array(
//                'model' => $testFormSlider,
//                'attribute' => 'rangeSlider',
//            ));
?>
<!--        <div style="height:40px;display:block"></div>-->
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbJqRangeSlider', array(-->
<!--	'model' => $testFormSlider,-->
<!--	'attribute' => 'rangeSlider',-->
<!--));-->
<!--	</pre>-->
<!--    <h3>Date Range Slider type Example</h3>-->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbJqRangeSlider', array(
//                'name' => 'dateRangeSample',
//                'type' => 'dateRange', // accepts: 'range','dateRange','editRange'
//                'minValue' => 'js:(new Date(2012, 0, 1))',
//                'maxValue' => 'js:(new Date(2012, 11, 31))',
//                'minDefaultValue' => 'js:(new Date(2012, 0, 1))',
//                'maxDefaultValue' => 'js:(new Date(2012, 11, 31))',
//                'step' => array('days'=>1)
//            ));
?>
<!--        <div style="height:40px;display:block"></div>-->
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbJqRangeSlider', array(-->
<!--	'name' => 'dateRangeSample',-->
<!--	'type' => 'dateRange', // accepts: 'range','dateRange','editRange'-->
<!--	'minValue' => 'js:(new Date(2012, 0, 1))',-->
<!--	'maxValue' => 'js:(new Date(2012, 11, 31))',-->
<!--	'step' => array('days'=>1)-->
<!--));-->
<!--	</pre>-->
<!---->
<!--    <h3>Edit Range Slider type Example</h3>-->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbJqRangeSlider', array(
//                'name' => 'editRangeSample',
//                'type' => 'editRange', // accepts: 'range','dateRange','editRange'
//                'inputType' => 'number',
//                'events' => array(
//                    'valuesChanged' => 'js:function(e, data){console.log(data.values.min);}'
//                )
//            ));
?>
<!--        <div style="height:40px;display:block"></div>-->
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbJqRangeSlider', array(-->
<!--    'name' => 'editRangeSample',-->
<!--    'type' => 'editRange', // accepts: 'range','dateRange','editRange'-->
<!--    'inputType' => 'number'-->
<!--));-->
<!--	</pre>-->
<!--</section>-->
<!---->
<!--<!-- Miscellaneous-->
<!--	================================================== -->-->
<!--<section id="misc">-->
<!--    <div class="page-header">-->
<!--        <h1>Miscellaneous-->
<!--            <small>Lightweight utility Bootstrap CSS components</small>-->
<!--        </h1>-->
<!--    </div>-->
<!---->
<!--    <h2>Wells</h2>-->
<!---->
<!--    <p>Use the well as a simple effect on an element to give it an inset effect.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        <div class="well">-->
<!--            Look, I'm in a well!-->
<!--        </div>-->
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--	&lt;div class="well"&gt;-->
<!--	  ...-->
<!--	&lt;/div&gt;-->
<!--	</pre>-->
<!--    <h3>Optional classes</h3>-->
<!---->
<!--    <p>Control padding and rounded corners with two optional modifier classes.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        <div class="well well-large">-->
<!--            Look, I'm in a well!-->
<!--        </div>-->
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--	&lt;div class="well well-large"&gt;-->
<!--	  ...-->
<!--	&lt;/div&gt;-->
<!--	</pre>-->
<!--    <div class="bs-docs-example">-->
<!--        <div class="well well-small">-->
<!--            Look, I'm in a well!-->
<!--        </div>-->
<!--    </div>-->
<!--	<pre class="prettyprint linenums">-->
<!--	&lt;div class="well well-small"&gt;-->
<!--	  ...-->
<!--	&lt;/div&gt;-->
<!--	</pre>-->
<!---->
<!--    <h2>Close icon</h2>-->
<!---->
<!--    <p>Use the generic close icon for dismissing content like modals and alerts.</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        <p>-->
<!--            <button class="close" style="float: none;">&times;</button>-->
<!--        </p>-->
<!--    </div>-->
<!--    <pre class="prettyprint linenums">&lt;button class="close"&gt;&amp;times;&lt;/button&gt;</pre>-->
<!--    <p>iOS devices require an href="#" for click events if you rather use an anchor.</p>-->
<!--    <pre class="prettyprint linenums">&lt;a class="close" href="#"&gt;&amp;times;&lt;/a&gt;</pre>-->
<!---->
<!--    <h2>Helper classes</h2>-->
<!---->
<!--    <p>Simple, focused classes for small display or behavior tweaks.</p>-->
<!---->
<!--    <h4>.pull-left</h4>-->
<!---->
<!--    <p>Float an element left</p>-->
<!--	<pre class="prettyprint linenums">-->
<!--	class="pull-left"-->
<!--	</pre>-->
<!--	<pre class="prettyprint linenums">-->
<!--	.pull-left {-->
<!--	  float: left;-->
<!--	}-->
<!--	</pre>-->
<!---->
<!--    <h4>.pull-right</h4>-->
<!---->
<!--    <p>Float an element right</p>-->
<!--	<pre class="prettyprint linenums">-->
<!--	class="pull-right"-->
<!--	</pre>-->
<!--	<pre class="prettyprint linenums">-->
<!--	.pull-right {-->
<!--	  float: right;-->
<!--	}-->
<!--	</pre>-->
<!---->
<!--    <h4>.muted</h4>-->
<!---->
<!--    <p>Change an element's color to <code>#999</code></p>-->
<!--	<pre class="prettyprint linenums">-->
<!--	class="muted"-->
<!--	</pre>-->
<!--	<pre class="prettyprint linenums">-->
<!--	.muted {-->
<!--	  color: #999;-->
<!--	}-->
<!--	</pre>-->
<!---->
<!--    <h4>.clearfix</h4>-->
<!---->
<!--    <p>Clear the <code>float</code> on any element</p>-->
<!--	<pre class="prettyprint linenums">-->
<!--	class="clearfix"-->
<!--	</pre>-->
<!--	<pre class="prettyprint linenums">-->
<!--	.clearfix {-->
<!--	  *zoom: 1;-->
<!--	  &:before,-->
<!--	  &:after {-->
<!--	    display: table;-->
<!--	    content: "";-->
<!--	  }-->
<!--	  &:after {-->
<!--	    clear: both;-->
<!--	  }-->
<!--	}-->
<!--	</pre>-->
<!---->
<!--</section>-->
<!---->
<!--<!-- Bootstrap Wizard-->
<!--	================================================== -->-->
<!--<section id="wizard">-->
<!--    <div class="page-header">-->
<!--        <h1>Wizard</h1>-->
<!--    </div>-->
<!---->
<!--    <p>Create a wizard using the same settings and configuration as the <a-->
<!--            href="javascript:void(window.location ='#tabs');">Tabs</a> component with minor additions to actually build-->
<!--        a wizard.</p>-->
<!---->
<!--    <h3>Basic Wizard</h3>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbWizard', array(
//                'type' => 'tabs', // 'tabs' or 'pills'
//                'tabs' => array(
//                    array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                    array('label' => 'Profile', 'content' => 'Profile Content'),
//                    array('label' => 'Messages', 'content' => 'Messages Content'),
//                ),
//            ));
?>
<!--    </div>-->
<!---->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbWizard', array(-->
<!--	'type' => 'tabs', // 'tabs' or 'pills'-->
<!--	'tabs' => array(-->
<!--		array('label' => 'Home', 'content' => 'Home Content', 'active' => true),-->
<!--		array('label' => 'Profile', 'content' => 'Profile Content'),-->
<!--		array('label' => 'Messages', 'content' => 'Messages Content'),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--    <p>As described above same configuration as the tabs widget apply to the wizard widget with the following-->
<!--        additions:</p>-->
<!---->
<!--    <table class="items table table-striped">-->
<!--        </thead>-->
<!--        <tr>-->
<!--            <td>options</td>-->
<!--            <td>List of the wizard plugin JS options. See <a href="https://github.com/VinceG/twitter-bootstrap-wizard"-->
<!--                                                             target="_blank">Wizard Github Page</a> for a list of the-->
<!--                available options-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>addTabsNavBar</td>-->
<!--            <td>Adds extra div with navbar classes to change the appearance of the tab navigation</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>pagerContent</td>-->
<!--            <td>The Next & Previous buttons displayed at the bottom of each tab content to move to the next and previous-->
<!--                steps.-->
<!--            </td>-->
<!--        </tr>-->
<!--    </table>-->
<!---->
<!--    <p>Wizard has 8 different events that it fires when certain actions are performed. <code>onInit</code>,-->
<!--        <code>onShow</code>, <code>onNext</code>, <code>onPrevious</code>, <code>onFirst</code>, <code>onLast</code>,-->
<!--        <code>onTabShow</code>, <code>onTabClick</code></p>-->
<!---->
<!--    <p>Example usage with events callbacks</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbWizard', array(
//                'type' => 'tabs', // 'tabs' or 'pills'
//                'options' => array(
//                    'class' => '',
//                    'onTabShow' => 'js:function(tab, navigation, index) { if((index+1) > 1) {alert("Tab #" + (index+1));} }',
//                    'onTabClick' => 'js:function(tab, navigation, index) {alert("Tab Click Disabled");return false;}',
//                ),
//                'tabs' => array(
//                    array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                    array('label' => 'Profile', 'content' => 'Profile Content'),
//                    array('label' => 'Messages', 'content' => 'Messages Content'),
//                ),
//            ));
?>
<!--    </div>-->
<!---->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbWizard', array(-->
<!--	'type' => 'tabs', // 'tabs' or 'pills'-->
<!--	'options' => array(-->
<!--		'onTabShow' => 'js:function(tab, navigation, index) { if((index+1) > 1) {alert("Tab #" + (index+1));} }',-->
<!--		'onTabClick' => 'js:function(tab, navigation, index) {alert("Tab Click Disabled");return false;}',-->
<!--	),-->
<!--	'tabs' => array(-->
<!--		array('label' => 'Home', 'content' => 'Home Content', 'active' => true),-->
<!--		array('label' => 'Profile', 'content' => 'Profile Content'),-->
<!--		array('label' => 'Messages', 'content' => 'Messages Content'),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--    <p>Custom Next, Previous, First, Last Buttons & Progress Bar</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbWizard', array(
//                'type' => 'tabs', // 'tabs' or 'pills'
//                'pagerContent' => '<div style="float:right">
//					<input type="button" class="btn button-next" name="next" value="Next" />
//					<input type="button" class="btn button-last" name="last" value="Last" />
//				</div>
//				<div style="float:left">
//					<input type="button" class="btn button-first" name="first" value="First" />
//					<input type="button" class="btn button-previous" name="previous" value="Previous" />
//				</div><br /><br />',
//                'options' => array(
//                    'nextSelector' => '.button-next',
//                    'previousSelector' => '.button-previous',
//                    'firstSelector' => '.button-first',
//                    'lastSelector' => '.button-last',
//                    'onTabShow' => 'js:function(tab, navigation, index) {
//						var $total = navigation.find("li").length;
//						var $current = index+1;
//						var $percent = ($current/$total) * 100;
//						$("#wizard-bar > .bar").css({width:$percent+"%"});
//			}',
//                    'onTabClick' => 'js:function(tab, navigation, index) {alert("Tab Click Disabled");return false;}',
//                ),
//                'tabs' => array(
//                    array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
//                    array('label' => 'Profile', 'content' => 'Profile Content'),
//                    array('label' => 'Messages', 'content' => 'Messages Content'),
//                ),
//            ));
?>
<!--        <div id="wizard-bar" class="progress progress-striped active">-->
<!--            <div class="bar"></div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--	<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbWizard', array(-->
<!--	'type' => 'tabs', // 'tabs' or 'pills'-->
<!--	'pagerContent' => '&lt;div style="float:right">-->
<!--		&lt;input type="button" class="btn button-next" name="next" value="Next" />-->
<!--		&lt;input type="button" class="btn button-last" name="last" value="Last" />-->
<!--		&lt;/div>-->
<!--		&lt;div style="float:left">-->
<!--			&lt;input type="button" class="btn button-first" name="first" value="First" />-->
<!--			&lt;input type="button" class="btn button-previous" name="previous" value="Previous" />-->
<!--		&lt;/div>&lt;br />&lt;br />',-->
<!--	'options' => array(-->
<!--		'nextSelector' => '.button-next',-->
<!--		'previousSelector' => '.button-previous',-->
<!--		'firstSelector' => '.button-first',-->
<!--		'lastSelector' => '.button-last',	-->
<!--		'onTabShow' => 'js:function(tab, navigation, index) {-->
<!--			var $total = navigation.find("li").length;-->
<!--			var $current = index+1;-->
<!--			var $percent = ($current/$total) * 100;-->
<!--			$("#wizard-bar > .bar").css({width:$percent+"%"});-->
<!--		}',-->
<!--		'onTabClick' => 'js:function(tab, navigation, index) {-->
<!--			alert("Tab Click Disabled");return false;-->
<!--		}',-->
<!--	),-->
<!--	'tabs' => array(-->
<!--		array('label' => 'Home', 'content' => 'Home Content', 'active' => true),-->
<!--		array('label' => 'Profile', 'content' => 'Profile Content'),-->
<!--		array('label' => 'Messages', 'content' => 'Messages Content'),-->
<!--	),-->
<!--));-->
<!--	</pre>-->
<!---->
<!--</section>-->
<!---->
<!--<!-- Boxes-->
<!--	================================================== -->-->
<!--<section id="tags">-->
<!--    <div class="page-header">-->
<!--        <h1>Tags</h1>-->
<!--    </div>-->
<!--    <p>We have included the excellent job of <a href="https://github.com/maxwells/bootstrap-tags" target="_blank">Bootstrap tags</a>-->
<!--        that is a lightweight jQuery plugin meant to extend the Twitter Bootstrap UI to include tagging.</p>-->
<!--    <p>-->
<!--        <span class="label label-important">Important: </span> Even though the widget is adapted to work with a form, we have not included-->
<!--        the component into <code>TbActiveForm</code> due that <code>TbSelect2</code> is already adapted and also includes the "tabs" option.</p>-->
<!--    <h3>Basic Usage</h3>-->
<!---->
<!--    <p>Using TbTags for simple tagging</p>-->
<!---->
<!--    <div class="bs-docs-example">-->
<!--        --><?php //$this->widget('bootstrap.widgets.TbTags', array(
//                'name'=>'tagSample',
//                'tagData' => array('This','is','clevertech'),
//                'popoverData' => array('"This" is a popover', 'This "is" as popover', 'Clevertech!'),
//                'suggestions' => array('and','you','can','add','tags','as','suggestions'),
//                'exclude' => array('not','these','ones','please')
//            ));
?>
<!--    </div>-->
<!--<pre class="prettyprint linenums">-->
<!--$this->widget('bootstrap.widgets.TbTags', array(-->
<!--	'tagData' => array('This','is','clevertech'),-->
<!--    'popoverData' => array('"This" is a popover', 'This "is" as popover', 'Clevertech!'),-->
<!--	'suggestions' => array('and','you','can','add','tags','as','suggestions'),-->
<!--	'excludes' => array('not','these','ones','please')-->
<!--));-->
<!--</pre>-->
<!--</section>-->

</div>
</div>

</div>
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
                    'items'       => array(
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

<!-- Nav, Tabs, & Pills
	================================================== -->
<section id="navs">
<div class="page-header">
    <a name="tabs"></a>

    <h1>Nav: tabs, pills, and lists</small></h1>
</div>

<h2>Lightweight defaults</h2>

<p>Create tabs with easy.</p>

<h3>Basic tabs</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbTabs',
        array(
            'type' => 'tabs', // 'tabs' or 'pills'
            'tabs' => array(
                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
                array('label' => 'Profile', 'content' => 'Profile Content'),
                array('label' => 'Messages', 'content' => 'Messages Content'),
            ),
        )
    );
    ?>
</div>
<p>You can change the position of the tabs by setting its <code>placement</code> property: <code>above</code>, <code>right</code>,
    <code>bellow</code>, or <code>left</code></p>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'Home', 'content'=>'Home Content', 'active'=>true),
		array('label'=>'Profile', 'content'=>'Profile Content'),
		array('label'=>'Messages', 'content'=>'Messages Content'),
	),
));
	</pre>

<h3>Basic pills</h3>

<p>Just change its <code>type</code> property to <code>pills</code> instead:</p>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbTabs',
        array(
            'type' => 'pills', // 'tabs' or 'pills'
            'tabs' => array(
                array('label' => 'Home', 'content' => 'Home Content', 'active' => true),
                array('label' => 'Profile', 'content' => 'Profile Content'),
                array('label' => 'Messages', 'content' => 'Messages Content'),
            ),
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills',
	'tabs'=>array(
		array('label'=>'Home', 'content'=>'Home Content', 'active'=>true),
		array('label'=>'Profile', 'content'=>'Profile Content'),
		array('label'=>'Messages', 'content'=>'Messages Content'),
	),
));
	</pre>

<h3>Disabled state</h3>

<p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover
        effects</strong>. Links will remain <strong>clickable</strong>, however, unless custom javascript is implemented
    to
    prevent those
    clicks.</p>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbTabs',
        array(
            'type' => 'pills', // 'tabs', 'pills', or 'list'
            'tabs' => array(
                array('label' => 'Home', 'content' => 'Home Content'),
                array('label' => 'Profile', 'content' => 'Profile Content'),
                array(
                    'label'       => 'Messages',
                    'content'     => 'Messages Content',
                    'itemOptions' => array('class' => 'disabled')
                ),
            ),
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills',
	'tabs'=>array(
		array('label'=>'Home', 'content'=>'Home Content'),
		array('label'=>'Profile', 'content'=>'Profile Content'),
		array('label'=>'Messages',
			'content'=>'Messages Content',
			'itemOptions'=>array('class'=>'disabled')),
	),
));
	</pre>

<h3>Component alignment</h3>

<p>To align nav links, use the bootstrap <code>.pull-left</code> or <code>.pull-right</code> utility classes on its
    <code>htmlOptions</code> attribute. Both classes will
    add a CSS float in the specified direction.</p>


<hr class="bs-docs-separator">

<h3>Stacked tabs</h3>

<div class="bs-docs-example">
    <?php $navItems = array(
        array('icon' => 'home', 'url' => array('/site/index')),
        array(
            'label'       => 'Profile',
            'url'         => '#',
            'itemOptions' => array('class' => 'active'),
            'linkOptions' => array('class' => 'bar')
        ),
        array('label' => 'Messages', 'url' => '#'),
        array(
            'label' => 'Dropdown',
            'items' => array(
                array('label' => 'Header'),
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                TbHtml::menuDivider(),
                array('label' => 'Separate link', 'url' => '#'),
            )
        ),
    ); ?>
    <?php $this->widget(
        'bootstrap.widgets.TbNav',
        array(
            'style'   => TbHtml::NAV_TABS,
            'stacked' => true,
            'items'   => $navItems
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
&lt;?php
// This items will be used on the following next examples!!!
$navItems = array(
    array('icon' =&gt; 'home', 'url' =&gt; array('/site/index')),
    array(
        'label'       =&gt; 'Profile',
        'url'         =&gt; '#',
        'itemOptions' =&gt; array('class' =&gt; 'active'),
        'linkOptions' =&gt; array('class' =&gt; 'bar')
    ),
    array('label' =&gt; 'Messages', 'url' =&gt; '#'),
    array(
        'label' =&gt; 'Dropdown',
        'items' =&gt; array(
            array('label' =&gt; 'Header'),
            array('label' =&gt; 'Action', 'url' =&gt; '#'),
            array('label' =&gt; 'Another action', 'url' =&gt; '#'),
            array('label' =&gt; 'Something else here', 'url' =&gt; '#'),
            TbHtml::menuDivider(),
            array('label' =&gt; 'Separate link', 'url' =&gt; '#'),
        )
    ),
); ?&gt;

&lt;?php $this-&gt;widget('bootstrap.widgets.TbNav', array(
        'style' =&gt; TbHtml::NAV_TABS,
        'stacked' =&gt; true,
        'items' =&gt;$navItems
    ));
?&gt;
	</pre>

<h3>Stacked pills</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbNav',
        array(
            'style'   => TbHtml::NAV_PILLS,
            'stacked' => true,
            'items'   => $navItems
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_PILLS,
    'stacked' => true,
    'items' =>$navItems
));
	</pre>

<hr class="bs-docs-separator">


<h2>Nav lists</h2>

<p>A simple and easy way to build groups of nav links with optional headers. They're best used in sidebars like the
    Finder in OS X.</p>

<h3>Example nav list</h3>

<p>Create a TbMenu widget and set its <code>type</code> to <code>list</code>:</p>

<div class="bs-docs-example">
    <div class="well" style="max-width: 340px; padding: 8px 0;">
        <?php $this->widget(
            'bootstrap.widgets.TbNav',
            array(
                'style' => TbHtml::NAV_LIST,
                'items' => array(
                    array('label' => 'List header', 'itemOptions' => array('class' => 'nav-header')),
                    array('label' => 'Home', 'url' => '#', 'itemOptions' => array('class' => 'active')),
                    array('label' => 'Library', 'url' => '#'),
                    array('label' => 'Applications', 'url' => '#'),
                    array('label' => 'Another list header', 'itemOptions' => array('class' => 'nav-header')),
                    array('label' => 'Profile', 'url' => '#'),
                    array('label' => 'Settings', 'url' => '#'),
                    '',
                    array('label' => 'Help', 'url' => '#'),
                )
            )
        );
        ?>
    </div>
    <!-- /well -->
</div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbNav', array(
    'style' => TbHtml::NAV_LIST,
    'items' => array(
        array('label' => 'List header', 'itemOptions' => array('class' => 'nav-header')),
        array('label' => 'Home', 'url' => '#', 'itemOptions' => array('class' => 'active')),
        array('label' => 'Library', 'url' => '#'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Another list header', 'itemOptions' => array('class' => 'nav-header')),
        array('label' => 'Profile', 'url' => '#'),
        array('label' => 'Settings', 'url' => '#'),
        '',
        array('label' => 'Help', 'url' => '#'),
    )
));
	</pre>

<h3>Horizontal dividers</h3>

<p>Add a horizontal divider by creating an empty list item in the <code>items</code> array.</p>

<hr class="bs-docs-separator">

</section>


<!-- Navbar
	================================================== -->
<section id="navbar">
<div class="page-header">
    <h1>Navbar</h1>
</div>


<h2>Basic navbar</h2>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbNavbar',
        array(
            'brandLabel' => 'Title',
            'position'   => null,
            'items'      => array(
                array(
                    'class' => 'bootstrap.widgets.TbNav',
                    'items' => array(
                        array('label' => 'Home', 'url' => '#', 'active' => true),
                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
                    )
                )
            )
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'brandLabel' => 'Title',
        'position'   => null,
        'items'      => array(
            array(
                'class' => 'bootstrap.widgets.TbNav',
                'items' => array(
                    array('label' => 'Home', 'url' => '#', 'active' => true),
                    array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
                    array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
                )
            )
        )
    )
);
	</pre>


<hr class="bs-docs-separator">

<h3>Forms</h3>

<p><code>TbNavbar</code> allows you to include HTML text too, so to include forms in the navigation bar is quite an easy
    task.</p>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbNavbar',
        array(
            'brandLabel' => 'Title',
            'position'   => null,
            'items'      => array(
                '<form class="navbar-form pull-left">
                        <input type="text" class="span2">
                        <button type="submit" class="btn">Submit</button>
                    </form>'
            )
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Title',
    'position' => null,
    'items' => array(
        '&lt;form class="navbar-form pull-left"&gt;
        &lt;input type="text" class="span2"&gt;
        &lt;button type="submit" class="btn">Submit&lt;/button&gt;
        &lt;/form&gt;'
    )
));
	</pre>

<h3>Search form</h3>

<p>Check this alternative search form.</p>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbNavbar',
        array(
            'brandLabel' => 'Title',
            'position'   => null,
            'items'      => array(
                '<form class="navbar-search pull-left">
                        <input type="text" class="search-query" placeholder="search">
                    </form>'
            )
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this-&gt;widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' =&gt; 'Title',
    'position' =&gt; null,
    'items' =&gt; array(
       '&lt;form class=&quot;navbar-search pull-left&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;search-query&quot; placeholder=&quot;search&quot;&gt;
&lt;/form&gt;'
    )
));
    </pre>

<h3>Component alignment</h3>

<p>Align nav links, search form, or text, use the <code>.pull-left</code> or <code>.pull-right</code> utility classes.
    Both classes will add a CSS float in the specified direction.</p>

<h3>Using dropdowns</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbNavbar',
        array(
            'brandLabel' => 'Title',
            'position'   => null,
            'items'      => array(
                array(
                    'class' => 'bootstrap.widgets.TbNav',
                    'items' => array(
                        array('label' => 'Home', 'url' => '#', 'active' => true),
                        array('label' => TbHtml::STYLE_LINK, 'url' => '#'),
                        array(
                            'label' => 'Dropdown',
                            'items' => array(
                                array('label' => 'Item1', 'url' => '#')
                            )
                        ),
                    )
                )
            )
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbNavbar', array(
	'brandLabel' => 'Title',
    'position' => null,
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
				array('label'=>'Home', 'url'=>'#', 'active'=>true),
				array('label'=>TbHtml::STYLE_LINK, 'url'=>'#'),
				array('label'=>'Dropdown', 'items'=> array(
				     array('label'=>'Item1', 'url'=>'#')
				)),
			)
		)
	)
));
	</pre>


<h3>Text</h3>

<p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper
    leading and color.</p>


<hr class="bs-docs-separator">


<h2>Optional display variations</h2>

<p>Fix the navbar to the top or bottom of the viewport by setting property
    <code>position</code> to <code>TbHtml::POSITION_TOP</code> or <code>TbHtml::POSITION_BOTTOM</code> respectively.</p>

<!-- Breadcrumbs
	================================================== -->
<section id="breadcrumbs">
    <div class="page-header">
        <h1>Breadcrumbs
            <small></small>
        </h1>
    </div>

    <h2>Examples</h2>

    <p>A single example shown as it might be displayed across multiple pages.</p>

    <div class="bs-docs-example">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumb',
            array(
                'homeLabel' => 'Home',
                'links'     => array('')
            )
        );
        ?>
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumb',
            array(
                'links' => array('Library'),
            )
        );
        ?>
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumb',
            array(
                'links' => array('Library' => '#', 'Data'),
            )
        );
        ?>
    </div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array('Library' => '#', 'Data'),
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
            <th>Markup</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <span class="label">Default</span>
            </td>
            <td>
                <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-success">Success</span>
            </td>
            <td>
                <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-warning">Warning</span>
            </td>
            <td>
                <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-important">Important</span>
            </td>
            <td>
                <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-info">Info</span>
            </td>
            <td>
                <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Inverse</span>
            </td>
            <td>
                <code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
            </td>
        </tr>
        </tbody>
    </table>
<pre class="prettyprint linenums">
echo TbHtml::labelTb('This is a label', array('style'=>TbHtml::STYLE_SUCCESS));
 </pre>
    <h3>Badges</h3>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Example</th>
            <th>Markup</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Default
            </td>
            <td>
                <span class="badge">1</span>
            </td>
            <td>
                <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                Success
            </td>
            <td>
                <span class="badge badge-success">2</span>
            </td>
            <td>
                <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                Warning
            </td>
            <td>
                <span class="badge badge-warning">4</span>
            </td>
            <td>
                <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                Important
            </td>
            <td>
                <span class="badge badge-important">6</span>
            </td>
            <td>
                <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                Info
            </td>
            <td>
                <span class="badge badge-info">8</span>
            </td>
            <td>
                <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                Inverse
            </td>
            <td>
                <span class="badge badge-inverse">10</span>
            </td>
            <td>
                <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
            </td>
        </tr>
        </tbody>
    </table>
<pre class="prettyprint linenums">
echo TbHtml::badge('This is a badge', array('style'=>TbHtml::STYLE_SUCCESS));
 </pre>
</section>


<!-- Typographic components
	================================================== -->
<section id="typography">
    <div class="page-header">
        <h1>Typographic components</h1>
    </div>

    <h2>Hero unit</h2>

    <p>A lightweight, flexible component to showcase key content on your site. It works well on marketing and
        content-heavy sites.</p>

    <div class="bs-docs-example">
        <?php
        $this->widget(
            'bootstrap.widgets.TbHeroUnit',
            array(
                'heading' => 'Hello, world!',
                'content' => '<p>This is a simple hero unit, a simple jumbotron-style component for calling extra ' .
                    'attention to featured content or information.</p><p>' .
                    TbHtml::button('Large button', array('size' => TbHtml::SIZE_LARGE)) . '</p>'
            )
        );
        ?>
    </div>
	<pre class="prettyprint linenums">
$this-&gt;widget(
    'bootstrap.widgets.TbHeroUnit',
    array(
        'heading' =&gt; 'Hello, world!',
        // we can also use a renderPartial content
        'content' =&gt; '&lt;p&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra ' .
            'attention to featured content or information.&lt;/p&gt;&lt;p&gt;' .
            TbHtml::button('Large button', array('size' =&gt; TbHtml::SIZE_LARGE)) . '&lt;/p&gt;'
    )
);
</pre>

    <h2>Page header</h2>

    <p>Not part of any widget but worth to know: A simple shell for an <code>h1</code> to appropriately space out and
        segment sections of content on a page. It
        can utilize the <code>h1</code>'s default <code>small</code>, element as well most other components (with
        additional styles).</p>

    <div class="bs-docs-example">
        <div class="page-header">
            <h1>Example page header
                <small>Subtext for header</small>
            </h1>
        </div>
    </div>
	<pre class="prettyprint linenums">
&lt;div class="page-header"&gt;
  &lt;h1&gt;Example page header &lt;small&gt;Subtext for header&lt;/small&gt;&lt;/h1&gt;
&lt;/div&gt;
	</pre>

</section>


<!-- Thumbnails
	================================================== -->
<section id="thumbnails">
    <div class="page-header">
        <h1>Thumbnails
            <small>Grids of images, videos, text, and more</small>
        </h1>
    </div>

    <h2>Default thumbnails</h2>

    <p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>

    <div class="row-fluid">
        <?php $thumbnail = array(
            'content' => '<img src="holder.js/260x180" />',
            'url'     => '#',
        ); ?>
        <?php echo TbHtml::thumbnails(array($thumbnail, $thumbnail, $thumbnail, $thumbnail)); ?>
    </div>
	<pre class="prettyprint linenums">
&lt;?php $thumbnail = array(
    'content' =&gt; '&lt;img src=&quot;holder.js/260x180&quot; /&gt;',
    'url'     =&gt; '#',
); ?&gt;
&lt;?php echo TbHtml::thumbnails(array($thumbnail, $thumbnail, $thumbnail, $thumbnail)); ?&gt;
	</pre>
    <div class="row-fluid">
        <?php $captionThumbnail = array(
            'content' => '<img src="holder.js/300x200" /><div class="caption"><h3>Thumbnail label</h3>' .
                '<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi ' .
                'porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>' .
                TbHtml::button(
                    'Action',
                    array('style' => 'primary')
                ) . ' ' . TbHtml::button('Action') . '</div>',
            'span'    => 4,
        );
        ?>

        <h2>Thumbnails with caption</h2>

        <?php echo TbHtml::thumbnails(array($captionThumbnail, $captionThumbnail, $captionThumbnail)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php $captionThumbnail = array(
    'content' =&gt; '&lt;img src=&quot;holder.js/300x200&quot; /&gt;&lt;div class=&quot;caption&quot;&gt;&lt;h3&gt;Thumbnail label&lt;/h3&gt;' .
        '&lt;p&gt;Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi ' .
        'porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.&lt;/p&gt;' .
        TbHtml::button(
            'Action',
                array('style' =&gt; 'primary')
            ) . ' ' . TbHtml::button('Action') . '&lt;/div&gt;',
            'span'    =&gt; 4,
        );
?&gt;
&lt;?php echo TbHtml::thumbnails(array($captionThumbnail, $captionThumbnail, $captionThumbnail)); ?&gt;
    </pre>
    <div>

        <h2>Different sizes</h2>

        <?php echo TbHtml::thumbnails(
            array(
                array('content' => '<img src="http://placehold.it/360x270" />', 'url' => '#', 'span' => 4),
                array('content' => '<img src="http://placehold.it/260x120" />', 'url' => '#', 'span' => 3),
                array('content' => '<img src="http://placehold.it/160x120" />', 'url' => '#', 'span' => 2),
                array('content' => '<img src="http://placehold.it/260x120" />', 'url' => '#', 'span' => 3),
                array('content' => '<img src="http://placehold.it/160x120" />', 'url' => '#', 'span' => 2),
            )
        ); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::thumbnails(
    array(
        array('content' =&gt; '&lt;img src=&quot;http://placehold.it/360x270&quot; /&gt;', 'url' =&gt; '#', 'span' =&gt; 4),
        array('content' =&gt; '&lt;img src=&quot;http://placehold.it/260x120&quot; /&gt;', 'url' =&gt; '#', 'span' =&gt; 3),
        array('content' =&gt; '&lt;img src=&quot;http://placehold.it/160x120&quot; /&gt;', 'url' =&gt; '#', 'span' =&gt; 2),
        array('content' =&gt; '&lt;img src=&quot;http://placehold.it/260x120&quot; /&gt;', 'url' =&gt; '#', 'span' =&gt; 3),
        array('content' =&gt; '&lt;img src=&quot;http://placehold.it/160x120&quot; /&gt;', 'url' =&gt; '#', 'span' =&gt; 2),
    )
); ?&gt;
    </pre>
</section>
<!-- Alerts
	================================================== -->
<section id="alerts">
    <div class="page-header">
        <h1>Alerts
            <small>Styles for success, warning, and error messages</small>
        </h1>
    </div>

    <h2>Default alert</h2>

    <div class="bs-docs-example">
        <?php
        Yii::app()->user->setFlash(
            TbHtml::STYLE_SUCCESS,
            '<strong>Well done!</strong> You successfully read this important alert message.'
        );
        $this->widget(
            'bootstrap.widgets.TbAlert',
            array(
                'block'     => true, // display a larger alert block?
                'fade'      => true, // use transitions?
                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
                'alerts'    => array( // configurations per alert type
                    TbHtml::STYLE_SUCCESS => array('block' => true, 'fade' => true, 'closeText' => '&times;'),
                    // success, info, warning, error or danger
                ),
            )
        );
        Yii::app()->user->setFlash(
            TbHtml::STYLE_INFO,
            '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.'
        );
        $this->widget(
            'bootstrap.widgets.TbAlert',
            array(
                'block'     => true, // display a larger alert block?
                'fade'      => true, // use transitions?
                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
                'alerts'    => array( // configurations per alert type
                    TbHtml::STYLE_INFO => array('block' => true, 'fade' => true, 'closeText' => '&times;'),
                    // success, info, warning, error or danger
                ),
            )
        );
        Yii::app()->user->setFlash(
            TbHtml::STYLE_WARNING,
            '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.'
        );
        $this->widget(
            'bootstrap.widgets.TbAlert',
            array(
                'block'     => true, // display a larger alert block?
                'fade'      => true, // use transitions?
                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
                'alerts'    => array( // configurations per alert type
                    TbHtml::STYLE_WARNING => array('block' => true, 'fade' => true, 'closeText' => '&times;'),
                    // success, info, warning, error or danger
                ),
            )
        );
        Yii::app()->user->setFlash(
            'error',
            '<strong>Oh snap!</strong> Change a few things up and try submitting again.'
        );
        $this->widget(
            'bootstrap.widgets.TbAlert',
            array(
                'block'     => true, // display a larger alert block?
                'fade'      => true, // use transitions?
                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
                'alerts'    => array( // configurations per alert type
                    'error' => array('block' => true, 'fade' => true, 'closeText' => '&times;'),
                    // success, info, warning, error or danger
                ),
            )
        );
        ?>
    </div>
	<pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::STYLE_SUCCESS,
        '&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.');

$this->widget('bootstrap.widgets.TbAlert', array(
    'block'=>true, // display a larger alert block?
    'fade'=>true, // use transitions?
    'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
    'alerts'=>array( // configurations per alert type
	    TbHtml::STYLE_SUCCESS=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'),
    ),
));
	</pre>
</section>


<!-- Progress bars
	================================================== -->
<section id="progress">
    <div class="page-header">
        <h1>Progress bars
            <small>For loading, redirecting, or action status</small>
        </h1>
    </div>

    <h2>Examples</h2>

    <h3>Basic</h3>

    <p>Default progress bar with a vertical gradient.</p>

    <div class="bs-docs-example">
        <?php echo TbHtml::progressBar(60); ?>
    </div>
	<pre class="prettyprint linenums">
echo TbHtml::progressBar(60);
	</pre>

    <h3>Striped</h3>

    <p>Uses a gradient to create a striped effect. Not available in IE7-8.</p>

    <div class="bs-docs-example">
        <?php echo TbHtml::stripedProgressBar(20); ?>
    </div>
	<pre class="prettyprint linenums">
echo TbHtml::stripedProgressBar(20);
	</pre>

    <h3>Animated</h3>

    <p>Set <code>animated</code> to <code>true</code> to animate the stripes right to left. Not available in
        all versions of IE.</p>

    <div class="bs-docs-example">
        <?php echo TbHtml::animatedProgressBar(40); ?>
    </div>
	<pre class="prettyprint linenums">
echo TbHtml::animatedProgressBar(40);
	</pre>

    <h3>Stacked</h3>

    <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>

    <div class="bs-docs-example">
        <?php echo TbHtml::stackedProgressBar(
            array(
                array('style' => 'success', 'width' => 35, 'htmlOptions' => array('class' => 'foo')),
                array('style' => 'warning', 'width' => 20),
                array('style' => 'danger', 'width' => 10),
            )
        ); ?>
    </div>
	<pre class="prettyprint linenums">
echo TbHtml::stackedProgressBar(
    array(
        array('style' => 'success', 'width' => 35, 'htmlOptions' => array('class' => 'foo')),
        array('style' => 'warning', 'width' => 20),
        array('style' => 'danger', 'width' => 10),
    )
);
	</pre>


    <hr class="bs-docs-separator">

    <h2>Browser support</h2>

    <p>Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are
        not supported in IE7-9 or older versions of Firefox.</p>

    <p>Versions earlier than Internet Explorer 10 and Opera 12 do not support animations.</p>

</section>

<!-- Tables
	================================================== -->
<section id="tables">
<div class="page-header">
    <h1>Tables</h1>
</div>

<h2>Detail Views</h2>

<h3>Basic Stuff</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbDetailView',
        array(
            'data'       => array('id' => 1, 'firstName' => 'Mark', 'lastName' => 'Otto', 'language' => 'CSS'),
            'attributes' => array(
                array('name' => 'firstName', 'label' => 'First name'),
                array('name' => 'lastName', 'label' => 'Last name'),
                array('name' => 'language', 'label' => 'Language'),
            ),
        )
    );
    ?>
</div>
	<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
    'attributes'=>array(
	    array('name'=>'firstName', 'label'=>'First name'),
	    array('name'=>'lastName', 'label'=>'Last name'),
	    array('name'=>'language', 'label'=>'Language'),
    ),
));
	</pre>

<h2>Grid Views</h2>

<p>In order to test the Grid Views we make use of the following data:</p>
<pre class="prettyprint linenums">
// $gridDataProvider
$mark = new Person();
$mark->id = 1;
$mark->firstName = 'Mark';
$mark->lastName = 'Otto';
$mark->language = 'CSS';
$mark->hours = 10;

$jacob = new Person();
$jacob->id = 2;
$jacob->firstName = 'Jacob';
$jacob->lastName = 'Thornton';
$jacob->language = 'JavaScript';
$jacob->hours = 20;

$stu = new Person();
$stu->id = 3;
$stu->firstName = 'Stu';
$stu->lastName = 'Dent';
$stu->language = 'HTML';
$stu->hours = 10;

$persons = array($mark, $jacob, $stu);

$gridDataProvider = new CArrayDataProvider($persons);

// $gridColumns
$gridColumns = array(
	array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
	array('name'=>'firstName', 'header'=>'First name'),
	array('name'=>'lastName', 'header'=>'Last name'),
	array('name'=>'language', 'header'=>'Language'),
	array('name'=>'hours', 'header'=>'Hours worked'),
	array(
		'htmlOptions' => array('nowrap'=>'nowrap'),
		'class'=>'bootstrap.widgets.TbButtonColumn',
		'viewButtonUrl'=>null,
		'updateButtonUrl'=>null,
		'deleteButtonUrl'=>null,
	)
);
</pre>
<h3>Default</h3>

<div class="bs-docs-example">
    <?php
    $mark = new Person();
    $mark->id = 1;
    $mark->firstName = 'Mark';
    $mark->lastName = 'Otto';
    $mark->language = 'CSS';
    $mark->hours = 10;

    $jacob = new Person();
    $jacob->id = 2;
    $jacob->firstName = 'Jacob';
    $jacob->lastName = 'Thornton';
    $jacob->language = 'JavaScript';
    $jacob->hours = 20;

    $stu = new Person();
    $stu->id = 3;
    $stu->firstName = 'Stu';
    $stu->lastName = 'Dent';
    $stu->language = 'HTML';
    $stu->hours = 15;

    $sunny = new Person();
    $sunny->id = 4;
    $sunny->firstName = 'Sunny';
    $sunny->lastName = 'Man';
    $sunny->language = 'HTML';
    $sunny->hours = 15;

    $persons = array($mark, $jacob, $stu, $sunny);

    $gridDataProvider = new CArrayDataProvider($persons);

    $gridColumns = array(
        array('name' => 'id', 'header' => '#', 'htmlOptions' => array('style' => 'width: 60px')),
        array('name' => 'firstName', 'header' => 'First name'),
        array('name' => 'lastName', 'header' => 'Last name'),
        array('name' => 'language', 'header' => 'Language'),
        array('name' => 'hours', 'header' => 'Hours worked', 'htmlOptions' => array('class' => 'tobeselected')),
        array(
            'htmlOptions'     => array('nowrap' => 'nowrap'),
            'class'           => 'bootstrap.widgets.TbButtonColumn',
            'header'          => 'Edit',
            'viewButtonUrl'   => null,
            'updateButtonUrl' => null,
            'deleteButtonUrl' => null,
            'buttons'         => array(
                'delete' => array(
                    'click' => 'function(){return false;}'
                )
            )
        )
    );
    ?>
    <?php $this->widget(
        'bootstrap.widgets.TbGridView',
        array(
            'dataProvider' => $gridDataProvider,
            'template'     => "{items}",
            'columns'      => $gridColumns,
        )
    );
    ?>
</div>
<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$gridDataProvider,
	'template'=>"{items}",
	'columns'=>$gridColumns,
));
</pre>
<h3>Striped</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbGridView',
        array(
            'type'         => 'striped',
            'dataProvider' => $gridDataProvider,
            'template'     => "{items}",
            'columns'      => $gridColumns,
        )
    );
    ?>
</div>
<pre class="prettyprint linenums">
this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped',
	'dataProvider'=>$gridDataProvider,
	'template'=>"{items}",
	'columns'=>$gridColumns,
));
</pre>
<h3>Bordered</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbGridView',
        array(
            'type'         => TbHtml::GRID_BORDERED,
            'dataProvider' => $gridDataProvider,
            'template'     => "{items}",
            'columns'      => $gridColumns,
        )
    );
    ?>
</div>
<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=> TbHtml::GRID_BORDERED,
	'dataProvider'=>$gridDataProvider,
	'template'=>"{items}",
	'columns'=>$gridColumns,
));
</pre>
<h3>Condensed</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbGridView',
        array(
            'type'         => TbHtml::GRID_CONDENSED,
            'dataProvider' => $gridDataProvider,
            'template'     => "{items}",
            'columns'      => $gridColumns,
        )
    );
    ?>
</div>
<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=> TbHtml::GRID_CONDENSED,
	'dataProvider'=>$gridDataProvider,
	'template'=>"{items}",
	'columns'=>$gridColumns,
));
</pre>
<h3>Striped, bordered and condensed</h3>

<div class="bs-docs-example">
    <?php $this->widget(
        'bootstrap.widgets.TbGridView',
        array(
            'type'         => 'striped bordered condensed',
            'dataProvider' => $gridDataProvider,
            'template'     => "{items}",
            'columns'      => $gridColumns,
        )
    );
    ?>
</div>
<pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$gridDataProvider,
	'template'=>"{items}",
	'filter'=>$person->search(),
	'columns'=>$gridColumns,
));
</pre>
</section>

<!-- Forms
	================================================== -->
<section id="forms">
<div class="page-header">
    <h1>Forms</h1>
</div>

<h2>Vertical</h2>

<p>Use the well as a simple effect on an element to give it an inset effect.</p>

<div class="bs-docs-example">
    <?php /** @var BootActiveForm $form */
    $model = new TestForm();

    $form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm',
        array(
            'id'          => 'verticalForm',
            'htmlOptions' => array('class' => 'well'),
        )
    );
    ?>
    <?php echo $form->textFieldRow($model, 'textField', array('class' => 'span3')); ?>
    <?php echo $form->passwordFieldRow($model, 'password', array('class' => 'span3')); ?>
    <?php echo $form->checkboxRow($model, 'checkbox'); ?>
    <?php echo TbHtml::button('Login', array('style' => TbHtml::STYLE_PRIMARY)); ?>

    <?php $this->endWidget(); ?>
</div>
	<pre class="prettyprint linenums">
&lt;?php /** @var BootActiveForm $form */
    $model = new TestForm();

    $form = $this-&gt;beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' =&gt; 'verticalForm',
            'htmlOptions' =&gt; array('class' =&gt; 'well'),
        ));
?&gt;
    &lt;?php echo $form-&gt;textFieldRow($model, 'textField', array('class' =&gt; 'span3')); ?&gt;
    &lt;?php echo $form-&gt;passwordFieldRow($model, 'password', array('class' =&gt; 'span3')); ?&gt;
    &lt;?php echo $form-&gt;checkboxRow($model, 'checkbox'); ?&gt;
    &lt;?php echo TbHtml::button('Login',  array('style' =&gt; TbHtml::STYLE_PRIMARY)); ?&gt;

    &lt;?php $this-&gt;endWidget(); ?&gt;
</pre>
<h3>Search Form</h3>

<div class="bs-docs-example">
    <?php /** @var BootActiveForm $form */
    $form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm',
        array(
            'id'          => 'searchForm',
            'type'        => 'search',
            'htmlOptions' => array('class' => 'well'),
        )
    );
    ?>
    <?php echo $form->textFieldRow(
        $model,
        'textField',
        array(
            'class'   => 'input-medium',
            'prepend' => '<i class="icon-search"></i>',
            'append'  => TbHtml::resetButton('Go')
        )
    ); ?>

    <?php $this->endWidget(); ?>
</div>
	<pre class="prettyprint linenums">
echo $form-&gt;textFieldRow(
        $model,
        'textField', array(
        'class' =&gt; 'input-medium',
        'prepend' =&gt; '&lt;i class=&quot;icon-search&quot;&gt;&lt;/i&gt;',
        'append'=&gt;TbHtml::resetButton('Go')
));
	</pre>
<h3>Inline Form</h3>

<div class="bs-docs-example">
    <?php /** @var BootActiveForm $form */
    $form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm',
        array(
            'id'          => 'inlineForm',
            'type'        => TbHtml::FORM_INLINE,
            'htmlOptions' => array('class' => 'well'),
        )
    );?>
    <?php echo $form->textFieldRow(
        $model,
        'textField',
        array('class' => 'input-small', 'placeholder' => 'textField')
    ); ?>
    <?php echo $form->passwordFieldRow(
        $model,
        'password',
        array('class' => 'input-small', 'placeholder' => 'password')
    ); ?>
    <?php echo TbHtml::button('Login'); ?>
    <?php $this->endWidget(); ?>
</div>
	<pre class="prettyprint linenums">
&lt;?php /** @var BootActiveForm $form */
$form = $this-&gt;beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' =&gt; 'inlineForm',
    'type' =&gt; TbHtml::FORM_INLINE,
    'htmlOptions' =&gt; array('class' =&gt; 'well'),
));?&gt;
&lt;?php echo $form-&gt;textFieldRow(
        $model, 'textField',
        array('class' =&gt; 'input-small', 'placeholder'=&gt;'textField')); ?&gt;
&lt;?php echo $form-&gt;passwordFieldRow(
        $model, 'password',
        array('class' =&gt; 'input-small', 'placeholder'=&gt;'password')); ?&gt;
&lt;?php echo TbHtml::button('Login'); ?&gt;
	</pre>
<h2>Horizontal</h2>

<div class="bs-docs-example">
    <?php /** @var BootActiveForm $form */
    $form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm',
        array(
            'id'   => 'horizontalForm',
            'type' => TbHtml::FORM_HORIZONTAL,
        )
    );
    ?>
    <fieldset>
        <legend>Legend</legend>
        <?php echo $form->textFieldRow(
            $model,
            'textField',
            array('hint' => 'In addition to freeform text, any HTML5 text-based input appears like so.')
        ); ?>
        <?php echo $form->dropDownListRow($model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
        <?php echo $form->dropDownListRow(
            $model,
            'multiDropdown',
            array('1', '2', '3', '4', '5'),
            array('multiple' => true)
        ); ?>
        <?php echo $form->fileFieldRow($model, 'fileField'); ?>
        <?php echo $form->textAreaRow($model, 'textarea', array('class' => 'span4', 'rows' => 5)); ?>
        <?php echo $form->textFieldRow($model, 'disabled', array('disabled' => true)); ?>
        <?php echo $form->textFieldRow($model, 'prepend', array('prepend' => '@')); ?>
        <?php echo $form->textFieldRow($model, 'append', array('append' => '.00')); ?>
        <?php echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled' => true)); ?>
        <div class="control-group">
            <?php echo $form->inlineCheckBoxList($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
        </div>
        <?php echo $form->radioButtonRow($model, 'radioButton'); ?>
        <div class="control-group">
            <?php echo $form->inlineRadioButtonList($model, 'inlineRadioButtons', array('1', '2', '3')); ?>
        </div>
    </fieldset>

    <div class="form-actions">
        <?php echo TbHtml::button('Submit', array('style' => TbHtml::STYLE_PRIMARY)); ?>
        <?php echo TbHtml::resetButton('Reset'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
<pre class="prettyprint linenums">
&lt;?php
$form = $this-&gt;beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id'   =&gt; 'horizontalForm',
        'type' =&gt; TbHtml::FORM_HORIZONTAL,
    )
);
?&gt;
&lt;fieldset&gt;
    &lt;legend&gt;Legend&lt;/legend&gt;
    &lt;?php echo $form-&gt;textFieldRow(
        $model,
        'textField',
        array('hint' =&gt; 'Some words here.')
    ); ?&gt;
    &lt;?php echo $form-&gt;dropDownListRow($model,
        'dropdown',
        array('Something ...', '1', '2', '3', '4', '5')); ?&gt;
    &lt;?php echo $form-&gt;dropDownListRow(
        $model,
        'multiDropdown',
        array('1', '2', '3', '4', '5'),
        array('multiple' =&gt; true)
    ); ?&gt;
    &lt;?php echo $form-&gt;fileFieldRow($model, 'fileField'); ?&gt;
    &lt;?php echo $form-&gt;textAreaRow($model, 'textarea', array('class' =&gt; 'span4', 'rows' =&gt; 5)); ?&gt;
    &lt;?php echo $form-&gt;textFieldRow($model, 'disabled', array('disabled' =&gt; true)); ?&gt;
    &lt;?php echo $form-&gt;textFieldRow($model, 'prepend', array('prepend' =&gt; '@')); ?&gt;
    &lt;?php echo $form-&gt;textFieldRow($model, 'append', array('append' =&gt; '.00')); ?&gt;
    &lt;?php echo $form-&gt;checkBoxRow($model, 'disabledCheckbox', array('disabled' =&gt; true)); ?&gt;
    &lt;div class=&quot;control-group&quot;&gt;
        &lt;?php echo $form-&gt;inlineCheckBoxList($model,'inlineCheckboxes',array('1', '2', '3')); ?&gt;
    &lt;/div&gt;
    &lt;?php echo $form-&gt;radioButtonRow($model, 'radioButton'); ?&gt;
    &lt;div class=&quot;control-group&quot;&gt;
        &lt;?php echo $form-&gt;inlineRadioButtonList($model,'inlineRadioButtons',array('1', '2', '3'));?&gt;
    &lt;/div&gt;
&lt;/fieldset&gt;

&lt;div class=&quot;form-actions&quot;&gt;
    &lt;?php echo TbHtml::button('Submit', array('style' =&gt; TbHtml::STYLE_PRIMARY)); ?&gt;
    &lt;?php echo TbHtml::resetButton('Reset'); ?&gt;
&lt;/div&gt;

&lt;?php $this-&gt;endWidget(); ?&gt;
</pre>

</div>
</div>

</div>
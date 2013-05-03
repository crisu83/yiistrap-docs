<?php
/* @var SiteController $this */
?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview" xmlns="http://www.w3.org/1999/html">
	<div class="container">
		<h1>Basics</h1>
		<p class="lead">Getting to know the html helper</p>
	</div>
</header>
<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
<div class="span3 bs-docs-sidebar">
	<ul class="nav nav-list bs-docs-sidenav">
		<li><a href="#typography"><i class="icon-chevron-right"></i> Typography</a></li>
		<li><a href="#code"><i class="icon-chevron-right"></i> Code</a></li>
		<li><a href="#images"><i class="icon-chevron-right"></i> Images</a></li>
		<li><a href="#icons"><i class="icon-chevron-right"></i> Icons</a></li>
		<li><a href="#tables"><i class="icon-chevron-right"></i> Tables</a></li>
		<li><a href="#forms"><i class="icon-chevron-right"></i> Forms</a></li>
		<li><a href="#misc"><i class="icon-chevron-right"></i> Misc</a></li>
	</ul>
</div>

<div class="span9">

<!-- Typography
	================================================== -->
<section id="typography">

	<div class="page-header">
		<h1>Typography</h1>
	</div>

	<h2>Lead</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::lead('Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.'); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::lead('...'); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Emphasis</h2>

	<h3>Small</h3>

	<div class="bs-docs-example">
		<p><?php echo TbHtml::small('This line of text is meant to be treated as fine print.'); ?></p>
	</div>

	<pre class="prettyprint linenums">
&lt;p>&lt;?php echo TbHtml::small('...'); ?>&lt;/p></pre>

	<h3>Bold</h3>

	<div class="bs-docs-example">
		<p>The following snippet of text is <?php echo TbHtml::b('rendered as bold text'); ?>.</p>
	</div>

	<pre class="prettyprint linenums">
&lt;p>The following snippet of text is &lt;?php echo TbHtml::b('rendered as bold text'); ?>.&lt;/p></pre>

	<h3>Italic</h3>

	<div class="bs-docs-example">
		<p>The following snippet of text is <?php echo TbHtml::i('rendered as italic text'); ?>.</p>
	</div>

	<pre class="prettyprint linenums">
&lt;p>The following snippet of text is &lt;?php echo TbHtml::i('rendered as italic text'); ?>.&lt;/p></pre>

	<h3>Emphasis styles</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::muted('Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.'); ?>
		<?php echo TbHtml::em(TbHtml::STYLE_WARNING, 'Etiam porta sem malesuada magna mollis euismod.'); ?>
		<?php echo TbHtml::em(TbHtml::STYLE_ERROR, 'Donec ullamcorper nulla non metus auctor fringilla.'); ?>
		<?php echo TbHtml::em(TbHtml::STYLE_INFO, 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.'); ?>
		<?php echo TbHtml::em(TbHtml::STYLE_SUCCESS, 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula.'); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::muted('...'); ?>
&lt;?php echo TbHtml::em(TbHtml::STYLE_WARNING, '...'); ?>
&lt;?php echo TbHtml::em(TbHtml::STYLE_ERROR, '...'); ?>
&lt;?php echo TbHtml::em(TbHtml::STYLE_INFO, '...'); ?>
&lt;?php echo TbHtml::em(TbHtml::STYLE_SUCCESS, '...'); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Abbrivations</h2>

	<div class="bs-docs-example">
		An abbreviation of the word attribute is <?php echo TbHtml::abbr('attr', 'attribute'); ?>.
	</div>

	<pre class="prettyprint linenums">
An abbreviation of the word attribute is &lt;?php echo TbHtml::abbr('attr', 'attribute'); ?>.</pre>

	<h3>Small</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::smallAbbr('HTML', 'HyperText Markup Language'); ?> is the best thing since sliced bread.
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::smallAbbr('HTML', 'HyperText Markup Language'); ?> is the best thing since sliced bread.</pre>

	<hr class="bs-docs-separator">

	<h2>Blockquotes</h2>

	<h3>Default blockquote</h3>

	<div class="bs-docs-example">
		<?php echo TbHtml::quote('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.'); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::quote('...'); ?></pre>

	<h3>Blockquote options</h3>

	<h4>Naming a source</h4>

	<div class="bs-docs-example">
		<?php echo TbHtml::quote('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', array(
			'source' => 'Someone famous in',
			'cite' => 'Source Title',
		)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::quote('...', array(
    'source' => 'Someone famous in',
    'cite' => 'Source Title',
)); ?></pre>

	<h4>Alternative displays</h4>

	<div class="bs-docs-example">
		<div class="clearfix">
			<?php echo TbHtml::quote('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', array(
				'source' => 'Someone famous in',
				'cite' => 'Source Title',
				'pull' => TbHtml::PULL_RIGHT,
			)); ?>
		</div>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::quote('...', array(
    'source' => 'Someone famous in',
    'cite' => 'Source Title',
    'pull' => TbHtml::PULL_RIGHT,
)); ?></pre>

</section>

<!-- Code
	================================================== -->
<section id="code">

	<div class="page-header">
		<h1>Code</h1>
	</div>

	<h2>Inline</h2>

	<div class="bs-docs-example">
		For example, <?php echo TbHtml::code('&lt;section>'); ?> should be wrapped as inline.
	</div>

	<pre class="prettyprint linenums">
For example, &lt;?php echo TbHtml::code('&lt;section>'); ?> should be wrapped as inline.</pre>

	<h2>Code block</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::codeBlock('&lt;p>Sample text here...&lt;/p>'); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::codeBlock('&lt;p>Sample text here...&lt;/p>'); ?></pre>

</section>

<!-- Images
	================================================== -->
<section id="images">

	<div class="page-header">
		<h1>Images</h1>
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
&lt;?php echo TbHtml::imageRounded('holder.js/140x140'); ?>
&lt;?php echo TbHtml::imageCircle('holder.js/140x140'); ?>
&lt;?php echo TbHtml::imagePolaroid('holder.js/140x140'); ?></pre>

</section>

<!-- Icons
	================================================== -->
<section id="icons">

	<div class="page-header">
		<h1>Icons</h1>
	</div>

	<ul class="the-icons clearfix">
		<li><?php echo TbHtml::icon(TbHtml::ICON_GLASS); ?> <small>ICON_GLASS</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_MUSIC); ?> <small>ICON_MUSIC</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_SEARCH); ?> <small>ICON_SEARCH</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ENVELOPE); ?> <small>ICON_ENVELOPE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HEART); ?> <small>ICON_HEART</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_STAR); ?> <small>ICON_STAR</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_STAR_EMPTY); ?> <small>ICON_STAR_EMPTY</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_USER); ?> <small>ICON_HEART</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FILM); ?> <small>ICON_FILM</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TH_LARGE); ?> <small>ICON_TH_LARGE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TH); ?> <small>ICON_TH</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TH_LIST); ?> <small>ICON_TH_LIST</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_OK); ?> <small>ICON_OK</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_REMOVE); ?> <small>ICON_REMOVE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ZOOM_IN); ?> <small>ICON_ZOOM_IN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ZOOM_OUT); ?> <small>ICON_ZOOM_OUT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_OFF); ?> <small>ICON_OFF</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_SIGNAL); ?> <small>ICON_SIGNAL</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_COG); ?> <small>ICON_COG</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TRASH); ?> <small>ICON_TRASH</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HOME); ?> <small>ICON_HOME</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FILE); ?> <small>ICON_FILE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TIME); ?> <small>ICON_TIME</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ROAD); ?> <small>ICON_ROAD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_DOWNLOAD_ALT); ?> <small>ICON_DOWNLOAD_ALT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_DOWNLOAD); ?> <small>ICON_DOWNLOAD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_UPLOAD); ?> <small>ICON_UPLOAD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_INBOX); ?> <small>ICON_INBOX</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PLAY_CIRCLE); ?> <small>ICON_PLAY_CIRCLE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_REPEAT); ?> <small>ICON_REPEAT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_REFRESH); ?> <small>ICON_REFRESH</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_LIST_ALT); ?> <small>ICON_LIST_ALT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_LOCK); ?> <small>ICON_LOCK</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FLAG); ?> <small>ICON_FLAG</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HEADPHONES); ?> <small>ICON_HEADPHONES</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_VOLUME_OFF); ?> <small>ICON_VOLUME_OFF</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_VOLUME_DOWN); ?> <small>ICON_VOLUME_DOWN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_VOLUME_UP); ?> <small>ICON_VOLUME_UP</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_QRCODE); ?> <small>ICON_QRCODE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BARCODE); ?> <small>ICON_BARCODE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TAG); ?> <small>ICON_TAG</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TAGS); ?> <small>ICON_TAGS</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BOOK); ?> <small>ICON_BOOK</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BOOKMARK); ?> <small>ICON_BOOKMARK</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PRINT); ?> <small>ICON_PRINT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CAMERA); ?> <small>ICON_CAMERA</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FONT); ?> <small>ICON_FONT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BOLD); ?> <small>ICON_BOLD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ITALIC); ?> <small>ICON_ITALIC</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TEXT_HEIGHT); ?> <small>ICON_TEXT_HEIGHT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TEXT_WIDTH); ?> <small>ICON_TEXT_WIDTH</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ALIGN_LEFT); ?> <small>ICON_ALIGN_LEFT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ALIGN_CENTER); ?> <small>ICON_ALIGN_CENTER</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ALIGN_RIGHT); ?> <small>ICON_ALIGN_RIGHT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ALIGN_JUSTIFY); ?> <small>ICON_ALIGN_JUSTIFY</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_LIST); ?> <small>ICON_LIST</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_INDENT_LEFT); ?> <small>ICON_INDENT_LEFT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_INDENT_RIGHT); ?> <small>ICON_INDENT_RIGHT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FACETIME_VIDEO); ?> <small>ICON_FACETIME_VIDEO</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PICTURE); ?> <small>ICON_PICTURE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PENCIL); ?> <small>ICON_PENCIL</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_MAP_MARKER); ?> <small>ICON_MAP_MARKER</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ADJUST); ?> <small>ICON_ADJUST</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TINT); ?> <small>ICON_TINT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_EDIT); ?> <small>ICON_EDIT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_SHARE); ?> <small>ICON_SHARE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CHECK); ?> <small>ICON_CHECK</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_MOVE); ?> <small>ICON_MOVE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_STEP_BACKWARD); ?> <small>ICON_STEP_BACKWARD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FAST_FORWARD); ?> <small>ICON_FAST_FORWARD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BACKWARD); ?> <small>ICON_BACKWARD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PLAY); ?> <small>ICON_PLAY</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PAUSE); ?> <small>ICON_PAUSE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_STOP); ?> <small>ICON_STOP</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FORWARD); ?> <small>ICON_FORWARD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FAST_FORWARD); ?> <small>ICON_FAST_FORWARD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_STEP_BACKWARD); ?> <small>ICON_STEP_BACKWARD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_EJECT); ?> <small>ICON_EJECT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CHEVRON_LEFT); ?> <small>ICON_CHEVRON_LEFT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CHEVRON_RIGHT); ?> <small>ICON_CHEVRON_RIGHT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PLUS_SIGN); ?> <small>ICON_PLUS_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_MINUS_SIGN); ?> <small>ICON_MINUS_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN); ?> <small>ICON_REMOVE_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_OK_SIGN); ?> <small>ICON_OK_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_QUESTION_SIGN); ?> <small>ICON_QUESTION_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_INFO_SIGN); ?> <small>ICON_INFO_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_SCREENSHOT); ?> <small>ICON_SCREENSHOT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_REMOVE_CIRCLE); ?> <small>ICON_REMOVE_CIRCLE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_OK_CIRCLE); ?> <small>ICON_OK_CIRCLE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BAN_CIRCLE); ?> <small>ICON_BAN_CIRCLE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ARROW_LEFT); ?> <small>ICON_ARROW_LEFT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ARROW_RIGHT); ?> <small>ICON_ARROW_RIGHT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ARROW_UP); ?> <small>ICON_ARROW_UP</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ARROW_DOWN); ?> <small>ICON_ARROW_DOWN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_SHARE_ALT); ?> <small>ICON_SHARE_ALT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_RESIZE_FULL); ?> <small>ICON_RESIZE_FULL</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_RESIZE_SMALL); ?> <small>ICON_RESIZE_SMALL</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PLUS); ?> <small>ICON_PLUS</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_MINUS); ?> <small>ICON_MINUS</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_ASTERISK); ?> <small>ICON_ASTERISK</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_EXCLAMATION_SIGN); ?> <small>ICON_EXCLAMATION_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_GIFT); ?> <small>ICON_GIFT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_LEAF); ?> <small>ICON_LEAF</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FIRE); ?> <small>ICON_FIRE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_EYE_OPEN); ?> <small>ICON_EYE_OPEN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_EYE_CLOSE); ?> <small>ICON_EYE_CLOSE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_WARNING_SIGN); ?> <small>ICON_WARNING_SIGN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_PLANE); ?> <small>ICON_PLANE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CALENDAR); ?> <small>ICON_CALENDAR</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_RANDOM); ?> <small>ICON_RANDOM</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_COMMENT); ?> <small>ICON_COMMENT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_MAGNET); ?> <small>ICON_MAGNET</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CHEVRON_UP); ?> <small>ICON_CHEVRON_UP</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CHEVRON_DOWN); ?> <small>ICON_CHEVRON_DOWN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_RETWEET); ?> <small>ICON_RETWEET</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_SHOPPING_CART); ?> <small>ICON_SHOPPING_CART</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FOLDER_CLOSE); ?> <small>ICON_FOLDER_CLOSE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FOLDER_OPEN); ?> <small>ICON_FOLDER_OPEN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_RESIZE_VERTICAL); ?> <small>ICON_RESIZE_VERTICAL</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_RESIZE_HORIZONTAL); ?> <small>ICON_RESIZE_HORIZONTAL</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HDD); ?> <small>ICON_HDD</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BULLHORN); ?> <small>ICON_BULLHORN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BELL); ?> <small>ICON_BELL</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CERTFICATE); ?> <small>ICON_CERTFICATE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_THUMBS_UP); ?> <small>ICON_THUMBS_UP</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_THUMBS_DOWN); ?> <small>ICON_THUMBS_DOWN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HAND_RIGHT); ?> <small>ICON_HAND_RIGHT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HAND_LEFT); ?> <small>ICON_HAND_LEFT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HAND_UP); ?> <small>ICON_HAND_UP</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_HAND_DOWN); ?> <small>ICON_HAND_DOWN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CIRCLE_ARROW_RIGHT); ?> <small>ICON_CIRCLE_ARROW_RIGHT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CIRCLE_ARROW_LEFT); ?> <small>ICON_CIRCLE_ARROW_LEFT</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CIRCLE_ARROW_UP); ?> <small>ICON_CIRCLE_ARROW_UP</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_CIRCLE_ARROW_DOWN); ?> <small>ICON_CIRCLE_ARROW_DOWN</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_GLOBE); ?> <small>ICON_GLOBE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_WRENCH); ?> <small>ICON_WRENCH</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_TASKS); ?> <small>ICON_TASKS</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FILTER); ?> <small>ICON_FILTER</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_BRIEFCASE); ?> <small>ICON_BRIEFCASE</small></li>
		<li><?php echo TbHtml::icon(TbHtml::ICON_FULLSCREEN); ?> <small>ICON_FULLSCREEN</small></li>
	</ul>

	<hr class="bs-docs-separator">

	<h2>How to use</h2>

    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::icon(TbHtml::ICON_GLASS); ?></pre>

	<hr class="bs-docs-separator">

	<h2>Icon examples</h2>

	<p class="muted">Coming soon!</p>

</section>

<!-- Tables
	================================================== -->
<section id="tables">

	<div class="page-header">
		<h1>Tables</h1>
	</div>

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

<!-- Miscellaneous
	================================================== -->
<section id="misc">

	<div class="page-header">
		<h1>Miscellaneous</h1>
	</div>

	<h2>Wells</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::well('Look, I\'m in a well!'); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::well('Look, I\'m in a well!'); ?></pre>

	<h3>Sizes</h3>

	<h4>Large</h4>

	<div class="bs-docs-example">
		<?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::SIZE_LARGE)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::SIZE_LARGE)); ?></pre>

	<h4>Small</h4>

	<div class="bs-docs-example">
		<?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::SIZE_SMALL)); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::SIZE_SMALL)); ?></pre>

	<h2>Close icon</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::closeButton(TbHtml::CLOSE_TEXT, array('style' => 'float: none')); ?>
	</div>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::closeButton(); ?></pre>

	<pre class="prettyprint linenums">
&lt;?php echo TbHtml::closeLink(); ?></pre>

</section>

</div>
</div>

</div>
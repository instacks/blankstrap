<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <meta charset="utf-8">
    <meta name="theme" content="Blankstrap 0.2.0" />
    <!-- header -->
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
    <!-- user_header -->
    
    <title>Contact</title>
    <!-- colourtag / other css -->
    <link rel="stylesheet" type="text/css" media="all" href="../../rw_common/themes/Blankstrap/consolidated.css?rwcache=538268403" />
		
    
    <!-- user_styles -->
    
    <!-- plugin_header -->
    
</head>
<body>
    <nav id="blankstrap-nav" class="navbar navbar-expand-lg">
        <div id="blankstrap-nav-container" class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="../" class="navbar-brand">
                <img src="../../rw_common/images/icon@2x.png" width="256" height="256" alt="Blankstrap"/>
                Blankstrap
            </a>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul><li class="nav-item"><a href="../../" rel="" class="nav-link normal"><i class="fa fa-home fa-lg fa-fw"></i> Home</a></li><li class="nav-item"><a href="./#settings" rel="" class="nav-link normal"><i class="fa fa-cog fa-lg fa-fw"></i> Settings</a></li><li class="nav-item"><a href="./#stacks" rel="" class="nav-link normal"><i class="fa fa-cubes fa-lg fa-fw"></i> Stacks</a></li><li class="nav-item dropdown"><a href="../../rwexamples/" rel="" class="nav-link current parent currentAncestorParent active">RW Examples</a><ul><li class="nav-item"><a href="../../rwexamples/blog/" rel="" class="nav-link normal"><i class="fa fa-pencil fa-lg fa-fw"></i> Blog</a></li><li class="nav-item"><a href="../../rwexamples/photos/" rel="" class="nav-link normal"><i class="fa fa-picture-o fa-lg fa-fw"></i> Photo Album</a></li><li class="nav-item"><a href="./" rel="" class="nav-link current active"><i class="fa fa-address-card-o fa-lg fa-fw"></i> Blog</a></li></ul></li><li class="nav-item dropdown"><a href="../../codeexamples/" rel="" class="nav-link normal parent normalParent">Code Examples</a><ul><li class="nav-item"><a href="../../codeexamples/album/" rel="" class="nav-link normal">Album</a></li><li class="nav-item"><a href="../../codeexamples/blog/" rel="" class="nav-link normal">Blog</a></li><li class="nav-item"><a href="../../codeexamples/carousel/" rel="" class="nav-link normal">Carousel</a></li><li class="nav-item"><a href="../../codeexamples/checkout/" rel="" class="nav-link normal">Checkout</a></li><li class="nav-item"><a href="../../codeexamples/dashboard/" rel="" class="nav-link normal">Dashboard</a></li><li class="nav-item"><a href="../../codeexamples/pricing/" rel="" class="nav-link normal">Pricing</a></li><li class="nav-item"><a href="../../codeexamples/product/" rel="" class="nav-link normal">Product</a></li></ul></li><li class="nav-item"><a href="https://github.com/jrondorf/Blankstrap" rel="" class="nav-link normal"><i class="fa fa-github fa-lg fa-fw"></i> GitHub</a></li></ul>
            </div>
        </div>
    </nav>
    <div id="blankstrap-content">
        
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

    </div>
    <div id="blankstrap"></div>
    <script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/jquery.min.js?rwcache=538268403"></script>
    <script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/bootstrap.bundle.min.js?rwcache=538268403"></script>
    <script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/javascript.js?rwcache=538268403"></script>
    <script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/baguetteBox.min.js?rwcache=538268403"></script>
    <script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/photo-album.js?rwcache=538268403"></script>
    <!-- style_variations -->
    <script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/navigation.js?rwcache=538268403"></script>
		<script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/navigation-fixed-top.js?rwcache=538268403"></script>
		<script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/navbar-dark.js?rwcache=538268403"></script>
		<script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/bg-primary.js?rwcache=538268403"></script>
		<script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/navigation-container-fluid.js?rwcache=538268403"></script>
		<script type="text/javascript" src="../../rw_common/themes/Blankstrap/js/content-container.js?rwcache=538268403"></script>
		
    <!-- user_javascript -->
    
</body>
</html>
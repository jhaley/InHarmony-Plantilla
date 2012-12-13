<?php
defined('_JEXEC') or die;
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
	</head>
	<body>
        <div class="header">
            <div class="container encabezado">
                <div class="logo"></div>
                <div class="banner"></div>
            </div>
        </div>
        <div class="content">
            <div class="container cuerpo">
                <div class="left">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="menu-top-left"></td>
                            <td class="menu-top-center"></td>
                            <td class="menu-top-right"></td>
                        </tr>
                        <tr>
                            <td class="menu-center-left"></td>
                            <td class="menu-center-center">
                                <jdoc:include type="modules" name="left" style="none" />
                            </td>
                            <td class="menu-center-right"></td>
                        </tr>
                        <tr>
                            <td class="menu-bottom-left"></td>
                            <td class="menu-bottom-center"></td>
                            <td class="menu-bottom-right"></td>
                        </tr>
                    </table>
                </div>
                <div class="main-content">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="body-top-left"></td>
                            <td class="body-top-center"></td>
                            <td class="body-top-right"></td>
                        </tr>
                        <tr>
                            <td class="body-center-left"></td>
                            <td class="body-center-center">
                                <jdoc:include type="message" />
                                <jdoc:include type="component" />
                            </td>
                            <td class="body-center-right"></td>
                        </tr>
                        <tr>
                            <td class="body-bottom-left"></td>
                            <td class="body-bottom-center"></td>
                            <td class="body-bottom-right"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
	</body>
</html>

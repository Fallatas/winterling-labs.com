<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.Tom
 *
 * @copyright   Copyright (C) 2005 - 2015 Thomas Winterling All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if ($task === 'edit' || $layout === 'form')
{
    $fullWidth = 1;
}
else
{
    $fullWidth = 0;
}

// Add Stylesheets
JHtml::_('stylesheet', 'layout.css', array('version' => 'auto', 'relative' => true));

// Check for a custom js file
JHtml::_('js', 'scripts.js', array('version' => 'auto', 'relative' => true));

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

    <section id="preloader">

        <jdoc:include type="modules" name="preloader" style="none" />

    </section>


    <header>

        <jdoc:include type="modules" name="menubutton" style="none" />

        <div id="ud_logo"><a href="#Startseite"><img src="images/logo_v2.png" alt=""></a></div>

        <jdoc:include type="modules" name="header" style="none" />

    </header>

        <section id="Startseite" class="ud_page">

            <div id="wl_message">

                     <jdoc:include type="modules" name="message" style="none" />

            </div>


           <div id="ud_intro">

               <jdoc:include type="modules" name="ud_intro" style="none" />

           </div>

        </section>


        <section id="UeberUns" class="ud_page">


            <jdoc:include type="modules" name="UeberUns" style="none" />

            <div class="ud_h2_balken"></div>


            <article class="ud_UeberUns">

                <jdoc:include type="modules" name="ud_UeberUns" style="none" />

            </article>
            <article class="ud_UeberUns ud_motto_bg">

                <jdoc:include type="modules" name="ud_UeberUns ud_motto_bg" style="none" />

            </article>

        </section>


    <section id="Leistungen" class="ud_page">


        <jdoc:include type="modules" name="Leistungen" style="none" />

        <div class="ud_h2_balken"></div>

        <jdoc:include type="modules" name="wl_leistungen" style="none" />

    </section>

        <section id="Kontakt" class="ud_page">


            <jdoc:include type="modules" name="Kontakt" style="none" />

            <div class="ud_h2_balken"></div>


            <article class="ud_kontakt">

                <jdoc:include type="component" />
                <jdoc:include type="message" />

            </article>


        </section>


        <section id="Impressum" class="ud_page">


                <jdoc:include type="modules" name="Impressum" style="none" />

            <div class="ud_h2_balken"></div>


            <article id="ud_impressum">

                <jdoc:include type="modules" name="ud_impressum" style="none" />

            </article>

        </section>


        <section id="Datenschutz" class="ud_page">

                <jdoc:include type="modules" name="Datenschutz" style="none" />

            <div class="ud_h2_balken"></div>

            <article id="ud_datenschutz">

                <jdoc:include type="modules" name="ud_datenschutz" style="none" />

            </article>

        </section>


        <footer>

            <div class="ud_logo"><img src="/images/footer.png"></div>

            <nav id="ud_meta_nav">

                <jdoc:include type="modules" name="ud_meta_nav" style="none" />

            </nav>

            <div id="ud_copyright">

                <jdoc:include type="modules" name="ud_copyright" style="none" />

            </div>

        </footer>

        <div id="cookiestyle">

            <jdoc:include type="modules" name="cookie" style="none" />

        </div>

</body>
</html>
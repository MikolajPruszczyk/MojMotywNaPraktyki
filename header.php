<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- nazwa strony jest pobrana z wordpressa -->
    <title><?php bloginfo('name'); ?></title>
    <!-- ustawianie ikony strony z foldera img w folderze wordpress -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.ico">
    <!-- podlaczanie cssa javy itp itd -->
    <?php wp_head(); ?>
</head>

<!-- nawigacja -->

<body>
    <header>
        <nav>
            <nav>
                <ul>
                    <li><a href="#start">Start</a></li>
                    <li><a href="#omnie">O mnie</a></li>
                    <li><a href="#oferta">Oferta</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                </ul>
            </nav>
        </nav>
    </header>
<?PHP
$page = "magazine";
$title = "PHP Reboot - November 2014";

require_once('../../includes/config.php');
require_once($config['include_path'] . 'head.php');
require_once($config['include_path'] . 'header.php');
?>
    <div id="main_content">
        <div id="slideshow_area">
            <div class="container">
                <div id="slideshow_container">
                    <ul>
                        <li><img src="<?= $config['site_url'] ?>/images/phpreboot1410.png" alt="banner1" /></li>
                    </ul>
                </div> <!-- END #slideshow_container -->
            </div> <!-- END .container -->
        </div>
        <div class="content_block">
            <h3>Articles added in November 2014 Magazine</h3>
            <div class="content_block_wrapper">
                <div class="content_block_col2 content_block_margin">
                    <p><strong>Framework - Selix</strong></p><br/>
                    <p>
                        <a href="http://dev.imagineeasy.com/post/102394035784/testing-logging-in-silex" rel="nofollow" target="_blank">
                            Testing Logging in Silex
                        </a><br/>
                        By Rob Allen on his blog.
                    </p><br/>
                    <p><strong>Helpful tools, classes, Libraries, tutorials.</strong></p><br/>
                    <p>
                        <a href="http://akrabat.com/php/using-doctrine-migrations-outside-of-doctrine-orm-or-symfony/" rel="nofollow" target="_blank">
                            Using Doctrine Migrations as a standalone tool
                        </a><br/>
                        By Yitzchak Schaffer on his blog.
                    </p><br/>
                    <p>
                        <a href="http://akrabat.com/php/using-doctrine-migrations-outside-of-doctrine-orm-or-symfony/" rel="nofollow"  target="_blank">
                            Using Doctrine Migrations as a standalone tool
                        </a><br/>
                        By Rob Allen on his blog.
                    </p>
                </div>
                <div class="content_block_col2">
                    <p><strong>Architecture, optimization, security, best practices etc</strong></p><br/>
                    <p>
                        <a href="https://philsturgeon.uk/blog/2014/11/composer-its-almost-always-about-the-lock-file" rel="nofollow" target="_blank">
                            Composer: It's ALMOST Always About the Lock File
                        </a><br/>
                        By Phil Sturgeon on his blog.
                    </p><br/>
                    <p>
                        <a href="http://blog.ircmaxell.com/2014/10/a-lesson-in-security.html"  target="_blank" rel="nofollow">
                            A Lesson In Security
                        </a><br/>
                        by Anthony Ferrara on his blog.
                    </p><br/>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
        <div class="content_block">
            <h3>PHP Reboot November 2014 Magazine</h3>
            <div class="content_block_wrapper">
                <div class="content_block_col4">
                    <a data-flip-widget="mag" href="https://flipboard.com/section/php-reboot-1410-bhlIFq">
                        View PHP Reboot October 2014 Magazine
                    </a>
                    <script src="https://cdn.flipboard.com/web/buttons/js/flbuttons.min.js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </div> <!-- END #main_content -->
<?PHP require_once($config['include_path'] . 'footer.php'); ?>

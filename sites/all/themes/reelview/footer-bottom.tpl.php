    <!--footer-bottom-->
    <div id="footer-bottom">

        <div id="footer-bottom-inside" class="clearfix container_12">

            <div class="grid_5">
                <div id="footer-bottom-inside-left">
                        <?php  print '<a href="'. base_path() .'">Reelview Productions</a> &copy ' . date("Y") . '<br />Site developed by <a href="http://www.spyderbit.com" target="_blank">Spyderbit Computing</a>'; ?>
                </div>
            </div>

            <div class="grid_7">
                <div id="footer-bottom-inside-right">
                        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
                <?php if ($page['footer_bottom']) :?>
                <?php print render($page['footer_bottom']); ?>
                <?php endif; ?>
                </div>
            </div>

        </div>

    </div>
    <!--EOF:footer-bottom-->

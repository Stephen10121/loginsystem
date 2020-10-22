<?php
include_once 'header.php';
?>
    <center>
        <br><br><h2>Theme Options</h2><br><br>
        <div class="color-options">
            <a href="includes/mode.inc.php?option=default">
                <div class="options" id="theme-option1">
                    <div class="option-header">
                        <p>default</p>
                    </div>
                    <div class="option-main">
                    </div>
                </div>
            </a>
            <a href="includes/mode.inc.php?option=dark">
                <div class="options" id="theme-option2">
                    <div class="option-header">
                        <p>dark mode</p>
                    </div>
                    <div class="option-main">
                    </div>
                </div>
            </a>
            <a href="includes/mode.inc.php?option=happy">
                <div class="options" id="theme-option3">
                    <div class="option-header">
                        <p>colorful</p>
                    </div>
                    <div class="option-main">
                    </div>
                </div>
            </a>
            <a href="includes/mode.inc.php?option=hack">
                <div class="options" id="theme-option4">
                    <div class="option-header">
                        <p>hack mode</p>
                    </div>
                    <div class="option-main">
                    </div>
                </div>
            </a>
        </div>
        <?php
            if (isset($_GET['mode'])) {
                if ($_GET['mode'] === "changed") {
                    echo '<p id="gerror">Theme changed</p>';
                }
            }
        ?>
    </center>
<?php
include_once 'footer.php';
?>
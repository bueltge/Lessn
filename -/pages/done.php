<?php
/**
 * After-page, creating of a shortcut.
 *
 * @package Lessn
 * @version 2019-09-26
 */
require_once(LESSN_ROOT.'/stubs/header.php'); ?>
<p>
    <label for="url"><input type="text"
        id="url"
        value="<?php echo htmlspecialchars($new_url); ?>"
        onclick="this.focus();this.select();"
        readonly="readonly" /></label>
    <strong><?php echo htmlspecialchars($url); ?></strong>
</p>
<p>
    <a href="<?php echo LESSN_URL; ?>">... go back to the list of shortcuts</a>
</p>
<script>
    var input = document.getElementById('url');
    input.focus();
    input.select();
    if (navigator.userAgent.match(/(iPod|iPhone|iPad)/) && navigator.userAgent.match(/AppleWebKit/)) {
        input.removeAttribute('readonly');
    }
</script>
    <?php require_once(LESSN_ROOT.'/stubs/footer.php');

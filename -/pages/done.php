<?php require_once(__DIR__.'../stubs/header.php'); ?>
<p>
    <label for="url"><input type="text"
        id="url"
        value="<?php echo htmlspecialchars($new_url); ?>"
        onclick="this.focus();this.select();"
        readonly="readonly" /></label>
    <strong><?php echo htmlspecialchars($url); ?></strong>
</p>
<p>
    <a href="https://twitter.com/?status=<?php echo urlencode($new_url); ?>">Tweet</a>
</p>
<script>
    var input = document.getElementById('url');
    input.focus();
    input.select();
    if (navigator.userAgent.match(/(iPod|iPhone|iPad)/) && navigator.userAgent.match(/AppleWebKit/)) {
        input.removeAttribute('readonly');
    }
</script>
    <?php require_once(__DIR__.'../stubs/footer.php');

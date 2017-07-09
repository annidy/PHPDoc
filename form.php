<?php
if (isset($_GET['action']) && $_GET['action'] == 'submitted') {
    echo '<pre>';

    print_r($_GET);
    echo '<a href="'. $_SERVER['PHP_SELF'] .'">Please try again</a>';

    echo '</pre>';
} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Name:  <input type="text" name="personal[name]"><br />
    Email: <input type="text" name="personal[email]"><br />
    Beer: <br>
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbr</option>
    </select><br />
    <input type="hidden" name="action" value="submitted" />
    <input type="submit" name="submit" value="submit me!" />
</form>
<?php
}
?>
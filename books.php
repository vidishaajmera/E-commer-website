<form method="GET" action="">
    <label for="sort">Sort by Price:</label>
    <select name="sort" id="sort" onchange="this.form.submit()">
        <option value="asc" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'asc') echo 'selected'; ?>>Lowest to Highest</option>
        <option value="desc" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'desc') echo 'selected'; ?>>Highest to Lowest</option>
    </select>
</form>

<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';

$email = $_POST['usersEmail'];
$query = "SELECT * FROM users WHERE usersEmail='$usersEmail'";
$row = mysql_fetch_array($query);
$username = $row['userName'];

echo $username;
?>



<section class="index-intro">
    <h1><?php echo $username; ?>, You are now logged in!</h1>
    <p>Here iss an important paragraph that explains the purpose of the website and why you are here!
    </p>
</section>
<section class="index-categories">
    <h2>Some Basic Categories</h2>
    <div class="index-categories-list">
        <div>
            <h3>Fun Stuff</h3>
        </div>
        <div>
            <h3>Serious Stuff</h3>
        </div>
        <div>
            <h3>Exciting Stuff</h3>
        </div>
        <div>
            <h3>Boring Stuff</h3>
        </div>
    </div>
</section>
</div>
</body>

</html>
<script src="js/script.js"></script>

<?php
  include_once 'footer.php';
?>
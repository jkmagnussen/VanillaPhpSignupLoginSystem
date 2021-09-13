<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>
<style>
footer {
    display: flex;
    flex-wrap: wrap;
    position: fixed;
    bottom: 0px;
    width: 100%;
    text-align: center;
    display: inline;
}

img {
    text-align: center;
    margin: 0 auto;
    padding: 30px;
    width: 58px;
    height: 58px;
}

a {
    text-align: center;
}
</style>


<section class="index-intro">
    <h1>Vanilla pphp sign-up login project</h1>
    <p>A vanilla php MySQL signup/ Login system that exercises my ability to implement hashed passwords, prepare
        statements and other forms of form validation to ensure that the data is secure, predictable and immune to SQL
        injection.
    </p>
</section>
<section class="index-categories">
    <h2>Some Basic Categories</h2>
    <div class="index-categories-list">
        <div>
            <h3>placeholder</h3>
        </div>
        <div>
            <h3>placeholder</h3>
        </div>
        <div>
            <h3>placeholder</h3>
        </div>
        <div>
            <h3>placeholder</h3>
        </div>
    </div>
</section>
</div>
</body>
<footer>
    <div>
        <a href="http://jkmagnussen.com">
            <img className="home" src="./img/home.png" alt="home" />
        </a>
        <a href="https://github.com/jkmagnussen/VanillaPhpSignupLoginSystem">
            <img className="github" src="./img/github.png" alt="github" />
        </a>
        <a href="https://linkedin.com/in/joseph-magnussen/">
            <img className="linkedIn" src="./img/linkedIn.png" alt="linkedIn" />
        </a>
    </div>
</footer>

</html>
<script src="js/script.js"></script>

<?php
  include_once 'footer.php';
?>
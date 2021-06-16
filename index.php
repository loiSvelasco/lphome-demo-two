<?php include("includes/header.php"); ?>

<?php 
    if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php")
    {
        include("pages/homepage.php");
    }

    if(isset($_GET['about']))
    {
        include("pages/about.php");
    }
    if(isset($_GET['contact']))
    {
        include("pages/contact.php");
    }
    if(isset($_GET['portfolio']))
    {
        include("pages/portfolio-overview.php");
    }
    if(isset($_GET['portfolioitem']))
    {
        include("pages/portfolio-item.php");
    }
    if(isset($_GET['blog']))
    {
        include("pages/blog-home.php");
    }
    if(isset($_GET['blogpost']))
    {
        include("pages/blog-post.php");
    }
?>

<?php include("includes/footer.php"); ?>
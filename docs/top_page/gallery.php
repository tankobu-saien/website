<!DOCTYPE html>
<html lang = "ja">

<head>
    <?php 
        $css_file = "gallery.style.css";
        $js_file = "./js/myfunctions_gallery.js";
        include_once("../includes/head.php");
    ?>
</head>

<body>
    <header><?php include_once("../includes/header.php");?></header>
    <main>
        <div>
            <a href = "../top_page/index.php">トップページ</a>
            <span>&gt;</span>ギャラリー
        </div>
        <section id ="main_sec_1">
            <h2>Vegetable Gallery</h2>
        </section>

        <section id ="main_sec_2">
            <h3>わたしが育てた野菜たち</h3> 
            <!-- 9つの写真をjsから読み込み -->
            <div id = "menu"></div>
        </section>
    </main>
    <footer><?php include_once("../includes/footer.php");?></footer>
</body>
</html>
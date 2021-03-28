<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>保链 - 纪念版</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/bulma/0.9.2/css/bulma.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            保链 - 纪念版
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.php">
                添加单个
            </a>

            <a class="navbar-item" href="multiple.php">
                添加多个
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    其他
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="analysis.php">
                        统计
                    </a>
                    <a class="navbar-item" href="about.php">
                        关于
                    </a>
                </div>
            </div>
        </div>

</nav>
<section class="section ">
    <div class="columns is-mobile is-centered">
        <div class="column is-half is-centered">
                <div class="card" style="height: 70vh;">
                <div class="card-content">
                    <form action="post.php" method="post">
                            <input class="input is-primary" type="text" id="input"placeholder="输入链接地址 备注：此处只处理单个链接" name="single" onclick="focusMethod()">
                        <footer class="card-footer">
                            <p class="card-footer-item">
                                <button class="button">提交</button>
                            </p>
                        </footer>
                    </form>
                </div>

            </div>
            </div>
        </div>
</section>
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            日后路上或没有更美的邂逅，<br>
            但当你智慧都酝酿成红酒，<br>
            仍可一醉自救。<br>
        </p>
    </div>
</footer>
<script>
    document.getElementById("input").focus();
</script>
</body>
</html>
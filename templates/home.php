<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Blog | Mathéo Zeller, Web Developer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../public/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../public/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.html" class="logo"><strong>Forty</strong> <span>by HTML5 UP</span></a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="landing.html">Blog</a></li>
                <li><a href="generic.html">Contact</a></li>
            </ul>
            <ul class="actions stacked">
                <li><a href="../public/index.php?route=register" class="button primary fit">Register</a></li>
                <li><a href="../public/index.php?route=login" class="button fit">Log In</a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <section id="banner" class="major">
            <div class="inner">
                <header class="major">
                    <h1>Hello World, my name is Mathéo</h1>
                </header>
                <div class="content">
                    <p>My first blog, about CSS, Integration and more ...</p>
                    <ul class="actions">
                        <li><a href="#one" class="button next scrolly">Let's code</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one" class="tiles">
                <?php
                foreach ($articles as $article) {
                ?>
                    <article>
                        <span class="image">
                            <img src="../public/img/pic01.jpg" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>" class="link"><?= htmlspecialchars($article->getTitle()); ?></a></h3>
                            <p><?= htmlspecialchars($article->getContent()); ?></p>
                            <p><?= htmlspecialchars($article->getAuthor()); ?></p>
                            <p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
                        </header>
                    </article>
                <?php
                }
                ?>
            </section>

            <!-- Two -->
            <section id="two">
                <div class="inner">
                    <header class="major">
                        <h2>Massa libero</h2>
                    </header>
                    <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
                    <ul class="actions">
                        <li><a href="landing.html" class="button next">Get Started</a></li>
                    </ul>
                </div>
            </section>

        </div>

        <!-- Contact -->
        <section id="contact">
            <div class="inner">
                <section>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="6"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
                            <li><input type="reset" value="Clear" /></li>
                        </ul>
                    </form>
                </section>
                <section class="split">
                    <section>
                        <div class="contact-method">
                            <span class="icon solid alt fa-envelope"></span>
                            <h3>Email</h3>
                            <a href="#">information@untitled.tld</a>
                        </div>
                    </section>
                    <section>
                        <div class="contact-method">
                            <span class="icon solid alt fa-phone"></span>
                            <h3>Phone</h3>
                            <span>(000) 000-0000 x12387</span>
                        </div>
                    </section>
                    <section>
                        <div class="contact-method">
                            <span class="icon solid alt fa-home"></span>
                            <h3>Address</h3>
                            <span>
                                1, Avenue de l'hopital<br />
                                Rodez, 12000<br />
                            </span>
                        </div>
                    </section>
                </section>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                    <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Untitled</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/jquery.scrolly.min.js"></script>
    <script src="../public/js/jquery.scrollex.min.js"></script>
    <script src="../public/js/browser.min.js"></script>
    <script src="../public/js/breakpoints.min.js"></script>
    <script src="../public/js/util.js"></script>
    <script src="../public/js/main.js"></script>

</body>

</html>
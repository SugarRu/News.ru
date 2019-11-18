<?php
require "includes/config.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $config['title']; ?> </title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

<div id="wrapper">

    <?php include "includes/header.php"; ?>

    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">
                        <a href="#">Все записи</a>
                        <h3>Новейшее_в_блоге</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">

                                <?php
                                $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 10 ");
                                ?>
                                <?php
                                while ($art = mysqli_fetch_assoc($articles)) {
                                    ?>

                                    <article class="article">
                                        <div class="article__image"
                                             style="background-image: url(/static/images/<?php echo $art['image'];?>)"></div>
                                        <div class="article__info">
                                            <a href="/article.php?=id<?php echo $art['id']; ?>"><?php echo $art['title']; ?></a>
                                            <div class="article__info__meta">

                                                <?php
                                                $art_cat = false;
                                                foreach( $categories as $cat )
                                                {
                                                    if( $cat['id'] == $art['categories_id'] )
                                                    {
                                                        $art_cat = $cat;
                                                        break;
                                                    }
                                                }
                                                ?>

                                                <small>Категория: <a href="/categorie.php?id=<?php echo $art_cat ['id']; ?>"><?php echo $art_cat['title']; ?></a></small>
                                            </div>
                                            <div class="article__info__preview"><?php echo mb_substr($art['text'], 0, 100, 'utf-8');?>
                                            </div>
                                        </div>
                                    </article>

                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="block">
                        <a href="#">Все записи</a>
                        <h3>Безопасность [Новейшее]</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи #2</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Lifestyle</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи #3</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи #4</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Lifestyle</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>

                    <div class="block">
                        <a href="#">Все записи</a>
                        <h3>Программирование [Новейшее]</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи #2</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Lifestyle</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи #3</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи #4</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Lifestyle</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="content__right col-md-4">
                    <div class="block">
                        <h3>Мы_знаем</h3>
                        <div class="block__content">
                            <script type="text/javascript"
                                    src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80"
                                    async="async"></script>
                        </div>
                    </div>

                    <div class="block">
                        <h3>Топ читаемых статей</h3>
                        <div class="block__content">
                            <div class="articles articles__vertical">

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Название статьи</a>
                                        <div class="article__info__meta">
                                            <small>Категория: <a href="#">Программирование</a></small>
                                        </div>
                                        <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna ...
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>

                    <div class="block">
                        <h3>Комментарии</h3>
                        <div class="block__content">
                            <div class="articles articles__vertical">

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Jonny Flame</a>
                                        <div class="article__info__meta">
                                            <small><a href="#">Название статьи #1</a></small>
                                        </div>
                                        <div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что
                                                                            бла бла бла бла бла бла бла ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Jonny Flame</a>
                                        <div class="article__info__meta">
                                            <small><a href="#">Название статьи #1</a></small>
                                        </div>
                                        <div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что
                                                                            бла бла бла бла бла бла бла ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Jonny Flame</a>
                                        <div class="article__info__meta">
                                            <small><a href="#">Название статьи #1</a></small>
                                        </div>
                                        <div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что
                                                                            бла бла бла бла бла бла бла ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Jonny Flame</a>
                                        <div class="article__info__meta">
                                            <small><a href="#">Название статьи #1</a></small>
                                        </div>
                                        <div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что
                                                                            бла бла бла бла бла бла бла ...
                                        </div>
                                    </div>
                                </article>

                                <article class="article">
                                    <div class="article__image"
                                         style="background-image: url(/media/images/post-image.jpg);"></div>
                                    <div class="article__info">
                                        <a href="#">Jonny Flame</a>
                                        <div class="article__info__meta">
                                            <small><a href="#">Название статьи #1</a></small>
                                        </div>
                                        <div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что
                                                                            бла бла бла бла бла бла бла ...
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="footer__logo">
                <h1> <?php echo $config['title']; ?> </h1>
            </div>
            <nav class="footer__menu">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Обо мне</a></li>
                    <li><a href="#">Я Вконтакте</a></li>
                    <li><a href="#">Правообладателям</a></li>
                </ul>
            </nav>
        </div>
    </footer>

</div>

</body>
</html>
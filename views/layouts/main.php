<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <meta name="keywords" content="адвокат, адвокатов, юрист, сыктывкар, коллегия, защита, эталон, 11, помощь, права, контакты, коми, гражданский, административный, уголовный, юридический, консультация, услуга, дело ">
    <meta name="description" content="Коллегия адвокатов Эталон. Юридическая помощь и защита граждан в г Сыктывкар и области. Большой опыт работы адвокатов. Защита по гражданским делам в арбитраже и судах юрисдикции, защита по уголовным делам, защита по делам об административных правонарушений всех категорий, консультации от 500 рублей.">
    <meta name="robots" content="index, nofollow" >
    <meta name="yandex" content="noyaca" >
    <meta name="yandex-verification" content="f65bef3b4d712a2c" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Yandex.Metrika counter -->
<!--    <script type="text/javascript" >-->
<!--        (function (d, w, c) {-->
<!--            (w[c] = w[c] || []).push(function() {-->
<!--                try {-->
<!--                    w.yaCounter49823545 = new Ya.Metrika2({-->
<!--                        id:49823545,-->
<!--                        clickmap:true,-->
<!--                        trackLinks:true,-->
<!--                        accurateTrackBounce:true,-->
<!--                        webvisor:true-->
<!--                    });-->
<!--                } catch(e) { }-->
<!--            });-->
<!---->
<!--            var n = d.getElementsByTagName("script")[0],-->
<!--                s = d.createElement("script"),-->
<!--                f = function () { n.parentNode.insertBefore(s, n); };-->
<!--            s.type = "text/javascript";-->
<!--            s.async = true;-->
<!--            s.src = "https://mc.yandex.ru/metrika/tag.js";-->
<!---->
<!--            if (w.opera == "[object Opera]") {-->
<!--                d.addEventListener("DOMContentLoaded", f, false);-->
<!--            } else { f(); }-->
<!--        })(document, window, "yandex_metrika_callbacks2");-->
<!--    </script>-->
<!--    <noscript><div><img src="https://mc.yandex.ru/watch/49823545" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
    <!-- /Yandex.Metrika counter -->

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $content ?>
</div>

<?php $this->endBody() ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->endPage() ?>

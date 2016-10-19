<?php
/* @var $this \yii\web\View */
/* @var $content string */

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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <div>
                <img src="<?= Yii::getAlias('@web') ?>/img/header.png" class="img-responsive" alt="header" >
            </div>
            <?php
            $report = [
                    ['label' => '<span class="glyphicon glyphicon-home"></span> รายงาน1', 'url' => ['/first/index']],
                    ['label' => '<span class="glyphicon glyphicon-flag"></span> รายงาน2', 'url' => ['/site/about']]
            ];
            $setting = [
                    ['label' => '<span class="glyphicon glyphicon-home"></span> สถานะคอมฯ', 'url' => ['/com-status']],
                    ['label' => '<span class="glyphicon glyphicon-cog"></span> รายงาน2', 'url' => ['/site/about']]
            ];


            NavBar::begin([
                'brandLabel' => '<span class="glyphicon glyphicon-fire"></span> HPC 12 Yala',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse', // เดิม 'navbar-inverse navbar-fixed-top'  ตัด navbar-fixed-top เพื่อไม่ให้อยู่บนสุด
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels' => FALSE,
                'items' => [
                        ['label' => '<span class="glyphicon glyphicon-home"></span> หน้าแรก', 'url' => ['/site/index']],
                        ['label' => '<span class="glyphicon glyphicon-flag"></span> เกี่ยวกับเรา', 'url' => ['/site/about']],
                        ['label' => '<span class="glyphicon glyphicon-flag"></span> รายงาน', 'items' => $report],
                        ['label' => '<span class="glyphicon glyphicon-cog"></span> ตั้งค่า', 'items' => $setting],
                        ['label' => 'ติดต่อ', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ? (
                                ['label' => 'เข้าสู่ระบบ', 'url' => ['/site/login']]
                            ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                            . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
                            )
                            . Html::endForm()
                            . '</li>'
                            )
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; HPC 12 YALA <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 25.06.14
 * Time: 15:27
 */


$this->title = $menu->seo_title." - ".Yii::$app->params['seo_title'];
Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $menu->seo_keywords]);
Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $menu->seo_description]);
?>

<?=\common\modules\contentBlock\widget\ContentBlockWidget::widget([
    'id' => 9
]);?>


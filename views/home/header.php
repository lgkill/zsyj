<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/2
 * Time: 13:49
 */
use  yii\web\Session;

?>
<link rel="stylesheet" href="css/home/common/header.css" />
<script src="js/home/common/header.js"></script>
<div style="height: 68px;width: auto;">
    <div id="header" class="header">
        <div class="header_nav">
            <div class="logo">
                <a href="<?=yii::$app->urlManager->createUrl('home/index')?>"><img src="images/home/images_Home/nav_logo.png"></a>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="<?=yii::$app->urlManager->createUrl('home/index')?>" <?if($column == 'index'){?>class="on" <?}?>>
                            首页
                        </a>
                    </li>
                    <li><a href="<?=yii::$app->urlManager->createUrl('home/shop')?>" <?if($column == 'shop'){?>class="on" <?}?>>紫薯商城</a></li>
                    <li><a href="<?=yii::$app->urlManager->createUrl('home/professional')?>" <?if($column == 'professional'){?>class="on" <?}?>>技术专业</a></li>
                    <li><a href="<?=yii::$app->urlManager->createUrl('home/talentrecruitment')?>" <?if($column == 'talentrecruitment'){?>class="on" <?}?>>人才招聘</a></li>
                    <li class="gywm"><a href="<?=yii::$app->urlManager->createUrl('home/aboutus')?>" <?if($column == 'aboutus'){?>class="on" <?}?>>关于我们</a>
                        <div class="xialala" style="position:absolute;">
                            <div class="xiala" >
                                <a href="<?=yii::$app->urlManager->createUrl('home/contact')?>">联系我们</a>
                                <a href="<?=yii::$app->urlManager->createUrl('home/media')?>">媒体声音</a>
                                <a href="<?=yii::$app->urlManager->createUrl('home/board')?>">留言板</a>
                                <a href="<?=yii::$app->urlManager->createUrl('home/aboutus')?>">我们是谁</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <?if(yii::$app->session['username'] == null){?>
                <script>
                    $('#header').removeClass('header_fixed');
                    $('#header').addClass('header');
                </script>
                <div class="header_login">
                    <a id="btn" class="people_login">个人登录</a><span>|</span><a href="<?=yii::$app->urlManager->createUrl('home/register')?>" class="people_login">个人注册</a>
                    <div class="company_login"><a href="<?=yii::$app->urlManager->createUrl('login/index')?>">企业管理入口</a></div>
                </div>
            <?}else{?>
                <script>
                    $('#header').removeClass('header');
                    $('#header').addClass('header_fixed');
                </script>
                <div class="header_login_in">
                    <a href="<?=yii::$app->urlManager->createUrl('fontadmin/personaldata')?>" class="people_login"><?=yii::$app->session['username']?></a><span>|</span><a href="<?=yii::$app->urlManager->createUrl('fontadmin/personaldata')?>" class="people_login">我的紫薯</a><span>|</span><a href="<?=yii::$app->urlManager->createUrl('home/logout')?>" class="people_login">退出</a>
                    <a href="<?=yii::$app->urlManager->createUrl('fontadmin/shoppingcart')?>"><div class="company_login_in" ><span class="cart_num"><?=yii::$app->session['productNums']?></span></div></a>
                </div>
            <?}?>

        </div>
    </div>
</div>


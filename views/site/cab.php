

<div id="templatemo_wrapper">

    <div id="templatemo_menu">

        <ul>
            <li><a href="index.html" class="current">Blog</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">

        <div id="templatemo_header">

            <div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->

        </div> <!-- end of header -->

        <div id="templatemo_sidebar">

            <div id="templatemo_rss">

                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>

            </div>

            <h4>Categories</h4>
            <ul class="templatemo_list">
                <?foreach($cats as $value){?>
                    <li><a href="<?=\yii\helpers\Url::to(["site/category","id"=>$value->id])?>" ><?=$value->title?></a></li>
                <?}?>
            </ul>

            <div class="cleaner_h40"></div>

            <h4>Friends</h4>
            <ul class="templatemo_list">
                <?foreach($friends as $value){?>
                    <li><a href="" target="_parent"><?=$value->name?></a></li>
                <?}?>
            </ul>
            <div class="cleaner_h40"></div>
            <ul class="templatemo_list">
                <li><a href="<?=\yii\helpers\Url::to(["site/reg"])?>" target="_parent">Регистрация</a></li>
                <li><a href="<?=\yii\helpers\Url::to(["site/auth"])?>" target="_parent">Авторизация</a></li>
            </ul>

            </ul>

        </div> <!-- end of templatemo_sidebar -->

    </div> <!-- end of templatemo_left_column -->

    <div id="templatemo_right_column">


        <div id="templatemo_right_column">


            <div class="cleaner_h40"></div>         <div class="cleaner_h40"></div>         <div class="cleaner_h40"></div>
            <h2 align="center">Добро пожаловать, <?=$users->name?></h2>


            <table border="1" >

                <tr  align="center" width="500" height="50">
                    <td align="center">Name</td>
                    <td align="center">Login</td>
                    <td align="center">Password</td>
                    <td align="center">Email</td>
                    <td align="center">Image</td>

                    <td rowspan="2" width="100" > <a href="<?=\yii\helpers\Url::to(['site/editcab','id'=>$users->id])?>">Edit</a></td>
                    <td rowspan="2" width="100">  <a href="<?=\yii\helpers\Url::to(['site/logout','id'=>$users->id])?>">Exit</a></td>
                </tr>

                <tr  align="center" width="500" height="50">
                    <td align="center"><?=$users->name?></td>
                    <td align="center"><?=$users->login?></td>
                    <td align="center"><?=$users->password?></td>
                    <td align="center"><?=$users->email?></td>
                    <td align="center"><img src="regupl/<?=$users->img?>" width="50px" height="50px"/></td>
                </tr>
            </table>

        </div> <!-- end of main -->

        <div class="cleaner"></div>
    </div>

    <div class="cleaner"></div>
</div>
<!-- end of templatemo_main -->
<div class="cleaner_h20"></div>

<div id="templatemo_footer">

    Copyright © 2048 <a href="#">Your Company Name</a> |
    <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>

</div>

<div class="cleaner"></div>
</div> <!-- end of warpper -->


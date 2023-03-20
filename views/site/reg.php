

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
                <div id="comment_form">
                    <h3>Рег-ция</h3>

                    <form action="" method="post">
                        <div class="form_row">
                            <label><strong>Name</strong> (required)</label>
                            <br />
                            <input type="text" name="name" />
                        </div>

                        <div class="form_row">
                            <label><strong>Login</strong> (required)</label>
                            <br />
                            <input type="text" name="login" />
                        </div>

                        <div class="form_row">
                            <label><strong>Password</strong> (required)</label>
                            <br />
                            <input type="text" name="password" />
                        </div>

                        <div class="form_row">
                            <label><strong>Email</strong>  (required, will not be published)</label>
                            <br />
                            <input type="text" name="email" />
                        </div>

                        <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>"/>
                        <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                    </form>

                </div>

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


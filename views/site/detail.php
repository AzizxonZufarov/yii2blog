

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

            <div id="featured_project">
                <div id="slider">
                    <ul id="sliderContent">
                        <li class="sliderImage">
                            <a href=""><img src="images/slider/1.jpg" alt="1" /></a>
                            <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                        </li>
                        <li class="sliderImage">
                            <a href=""><img src="images/slider/2.jpg" alt="2" /></a>
                            <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                        </li>
                        <li class="sliderImage">
                            <img src="images/slider/3.jpg" alt="3" />
                            <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                        </li>
                        <li class="sliderImage">
                            <img src="images/slider/4.jpg" alt="4" />
                            <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </li>
                        <li class="clear sliderImage"></li>
                    </ul>
                </div>
            </div>

            <div id="templatemo_right_column">

                <div id="templatemo_main">

                    <div class="post_section">

                        <span class="comment"><a href="fullpost.html">256</a></span>

                        <h2><?=$detail->title?> </h2>

                        <?=$detail->date?> | <strong>Author:</strong> <?=$detail->author?> | <strong>Category:</strong> <a href="#"><?=$detail->categories?></a>

                        <a href="http://www.templatemo.com/page/1" target="_parent"><img src="images/templatemo_image_01.jpg" alt="image" /></a>

                        <p><?=$detail->text?></p>

                    </div>

                    <div class="comment_tab">
                        Comments           </div>

                    <div id="comment_section">
                        <ol class="comments first_level">
                            <?foreach($comments as $value){?>
                            <li>
                                <div class="comment_box commentbox1">

                                    <div class="gravatar">
                                        <img src="images/avator.png" alt="author" />
                                    </div>

                                    <div class="comment_text">
                                        <div class="comment_author"><?=$value->author?><span class="date"><?=$value->date?></span></div>
                                        <p><?=$value->text?></p>
                                        <div class="reply"><a href="#">Reply</a></div>
                                    </div>
                                    <div class="cleaner"></div>
                                </div>

                            </li>
<?}?>
                        </ol>
                    </div>

                    <div id="comment_form">
                        <h3>Leave a comment</h3>

                        <form action="" method="post">
                            <div class="form_row">
                                <label><strong>Author</strong> (required)</label>
                                <br />
                                <input type="text" name="author" />
                            </div>

                            <div class="form_row">
                                <label><strong>Email</strong>  (required, will not be published)</label>
                                <br />
                                <input type="text" name="email" />
                            </div>
                            <div class="form_row">
                                <label><strong>Text</strong></label>
                                <br />
                                <textarea  name="text" rows="" cols=""></textarea>
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
  

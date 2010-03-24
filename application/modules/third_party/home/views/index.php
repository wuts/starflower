
<div id="headline">
    <h3>&raquo; 中心要闻</h3>
    <div id="featured" >
        <ul class="ui-tabs-nav">
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="<?php echo image_path('featured/image1-small.jpg', '') ?>" alt="" /><span>世界十大最壮观的未来环保建筑设计</span></a></li>
            <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="<?php echo image_path('featured/image2-small.jpg', '') ?>" alt="" /><span>“未枯绸缪”应对长江缺水</span></a></li>
            <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="<?php echo image_path('featured/image3-small.jpg', '') ?>" alt="" /><span>首届曹妃甸论坛举行市长早餐会</span></a></li>
            <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="<?php echo image_path('featured/image4-small.jpg', '') ?>" alt="" /><span>中国可持续消费和生产圆桌会议在北京举行</span></a></li>
        </ul>

        <!-- First Content -->
        <div id="fragment-1" class="ui-tabs-panel" style="">
            <img src="<?php echo image_path('featured/image1.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >世界十大最壮观的未来环保建筑设计</a></h2>
                <p>这些看上去炫目壮观的建筑设计，不是来自外星球的建筑，也不是科幻小说中才会出现的超现实理念，而是科学家们正在致力于打造的未来环保建筑设计。据国外媒体报道，近期，世界顶级的科学家、环保主义者和建筑大师，评出了世界10大最壮观的环保建筑设计：....<a href="#" >更多</p>
            </div>
        </div>

        <!-- Second Content -->
        <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
            <img src="<?php echo image_path('featured/image2.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >“未枯绸缪”应对长江缺水</a></h2>
                <p>“长江有可能越来越‘渴’！”在最近由上海院士中心主办的长江水资源专题研讨会上，河口海岸学家陈吉余院士向记者吐露担忧。面对长江常年水位逐步下降的趋势，....<a href="#" >更多</a></p>
            </div>
        </div>

        <!-- Third Content -->
        <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
            <img src="<?php echo image_path('featured/image3.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >首届曹妃甸论坛举行市长早餐会</a></h2>
                <p>瑞典环境部可持续发展城市协会专家、瑞典SWECO公司总规划题朗哈根发表《共生城市的概念》演讲....<a href="#" >更多</a></p>
            </div>
        </div>

        <!-- Fourth Content -->
        <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
            <img src="<?php echo image_path('featured/image4.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >中国可持续消费和生产圆桌会议在北京举行</a></h2>
                <p>2006年5月26日，由欧洲委员会、联合国环境规划署和中国国家环境保护总局共同主办的“中国可持续消费和生产圆桌会议”在北京举行。此次会议的主要议题是：中国与欧洲国家之间就循环经济的概念与马拉喀什进程(2003年联合国马拉喀什会议上制定的可持续消费和生产十年发展进程)的联系、废物综合管理、环境标志、可持续采购、可持续产品、可持续建筑物等方面进行交流....<a href="#" >更多</a></p>
            </div>
        </div>

    </div>
</div>

<div class="float-left width-three-quaters">
    <h2>最新发表的科研论文</h2>
    <?php if (!empty($news)): ?>
        <?php foreach ($news as $article): ?>
    <div class="article_img"><img src="<?php echo image_path('article/hj1.jpg', '') ?>" alt="" /></div>
    <div class="article_body">
        <h3><?php echo  anchor('news/' .date('Y/m', $article->created_on) .'/'. $article->slug, $article->title); ?></h3>
         <p>
            <em><?php echo lang('news_posted_label');?>: <?php echo date('M d, Y', $article->created_on); ?></em>&nbsp;
                    <?php if($article->category_slug): ?>
            <em><?php echo lang('news_category_label');?>: <?php echo anchor('news/category/'.$article->category_slug, $article->category_title);?></em>
                    <?php endif; ?>
        </p>
        <p><?php echo nl2br($article->intro) ?> <?php echo anchor('news/' .date('Y/m', $article->created_on) .'/'. $article->slug, lang('news_read_more_label'))?></p>
       
        <hr/>
    </div>
    <div class="clear-both"></div>
        <?php endforeach; ?>
    <p><?php echo $pagination['links']; ?></p>
    <?php else: ?>
    <p><?php echo lang('news_currently_no_articles');?></p>
    <?php endif; ?>
</div>



<div id="sidebar">
    <div id="login" class="boxed">
        <h2 class="title">用户登录</h2>
        <div class="content">
				  {if $ci->session->userdata('user_id')}
			      {sprintf lang('logged_in_welcome') cat($user->first_name ' ' $user->last_name)} <a href="{site_url('users/logout')}">{lang('logout_label')}</a><br/>
																																			    {if $ci->settings->item('enable_profiles')}
		        	{anchor('edit-profile', lang('edit_profile_label'))} |
	            {/if}

	        	{anchor('edit-settings', lang('settings_label'))}

	        	{if $ci->user_lib->check_role('admin')}
			       | {anchor('admin', lang('cp_title'), 'target="_blank"')}
	        	{/if}

            	{else}
	        	{$ci->load->view('users/login_small')}
            	{/if}

        </div>
    </div>
    <div id="updates" class="boxed">
        <h2 class="title">热门文章</h2>
        <div class="content">
				  	{if(module_exists('news')}
            <div id="host-posts">
				{$ci->news_m->get_hot_news()}
            </div>
			{/if}           
        </div>
    </div>
    <div id="partners" class="boxed">
        <div id="navigation">

            <h2 class="title">友情链接</h2>
            <ul>
		{foreach navigation('partner') link}
                <li>{anchor( $link->url, $link->title, array('target' => $link->target))}</li>
		{/foreach}
            </ul>

        </div>
    </div>



</div>


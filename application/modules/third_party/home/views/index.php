
<div id="headline">
    <h3>&raquo; 中心要闻</h3>
    <div id="featured" >
        <ul class="ui-tabs-nav">
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="<?php echo image_path('featured/image1-small.jpg', '') ?>" alt="" /><span>15+ Excellent High Speed Photographs</span></a></li>
            <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="<?php echo image_path('featured/image2-small.jpg', '') ?>" alt="" /><span>20 Beautiful Long Exposure Photographs</span></a></li>
            <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="<?php echo image_path('featured/image3-small.jpg', '') ?>" alt="" /><span>35 Amazing Logo Designs</span></a></li>
            <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="<?php echo image_path('featured/image4-small.jpg', '') ?>" alt="" /><span>Create a Vintage Photograph in Photoshop</span></a></li>
        </ul>

        <!-- First Content -->
        <div id="fragment-1" class="ui-tabs-panel" style="">
            <img src="<?php echo image_path('featured/image1.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >15+ Excellent High Speed Photographs</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt condimentum lacus. Pellentesque ut diam....<a href="#" >read more</a></p>
            </div>
        </div>

        <!-- Second Content -->
        <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
            <img src="<?php echo image_path('featured/image2.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >20 Beautiful Long Exposure Photographs</a></h2>
                <p>Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit....<a href="#" >read more</a></p>
            </div>
        </div>

        <!-- Third Content -->
        <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
            <img src="<?php echo image_path('featured/image3.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >35 Amazing Logo Designs</a></h2>
                <p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>
            </div>
        </div>

        <!-- Fourth Content -->
        <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
            <img src="<?php echo image_path('featured/image4.jpg', '') ?>" alt="" />
            <div class="info" >
                <h2><a href="#" >Create a Vintage Photograph in Photoshop</a></h2>
                <p>Quisque sed orci ut lacus viverra interdum ornare sed est. Donec porta, erat eu pretium luctus, leo augue sodales....<a href="#" >read more</a></p>
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
        <h2 class="title">最近更新</h2>
        <div class="content">
				  	{if(module_exists('news')}
            <div id="recent-posts">
				{$ci->news_m->get_news_fragment()}
            </div>
			{/if}
            <ul>
                <li>
                    <h3>March 5, 2007</h3>
                    <p><a href="#">In posuere eleifend odio quisque semper augue mattis wisi maecenas&#8230;</a></p>
                </li>
                <li>
                    <h3>March 3, 2007</h3>
                    <p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh&#8230;</a></p>
                </li>
                <li>
                    <h3>February 28, 2007</h3>
                    <p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum&#8230;</a></p>
                </li>
                <li>
                    <h3>February 25, 2007</h3>
                    <p><a href="#">Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam nequea&#8230;</a></p>
                </li>
            </ul>
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


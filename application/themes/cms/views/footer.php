<p>
    {foreach navigation('footer') link}
		<span class="link">{anchor( $link->url, $link->title, array('target' => $link->target))}</span>
	{/foreach}
	
	&copy;2008 - {date('Y')} by {$ci->settings->item('site_name')}. All Rights Reserved.
</p>

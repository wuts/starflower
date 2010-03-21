<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {theme_view('metadata')}

    </head>

    <body>
        
        
	{if $ci->settings->item('google_analytic')}
		{$ci->load->view('fragments/google_analytic')}
	{/if}

        <div id="header">
		{theme_view('header')}
        </div>

        <div id="menu">
            <ul>
		{foreach navigation('header') link}
                <li>{anchor( $link->url, $link->title, array('target' => $link->target))}</li>
		{/foreach}
            </ul>
        </div>

        <div id="content">
           {$template.body}
        </div>
        <!-- start footer -->
        <div id="footer">
		{theme_view('footer')}
        </div>
        <!-- end footer -->

    </body>
</html>	
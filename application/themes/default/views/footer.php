<p>
	{foreach navigation('footer') link}
		<span class="link">{anchor( $link->url, $link->title, cat('target="', $link->target, '"'))}</span>
	{/foreach}

	<br />
	
	&copy;2008 - {date('Y')} by {$ci->settings->item('site_name')}. All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.
</p>
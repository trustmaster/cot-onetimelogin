<!-- BEGIN: MAIN -->
<h2>One-Time Login</h2>

{FILE "{PHP.cfg.themes_dir}/{PHP.cfg.defaulttheme}/warnings.tpl"}

<ul class="nav nav-tabs nav-stacked">
	<li>
		<a href="{ONETIMELOGIN_GENERATE_URL}">
			<img src="{PHP.cfg.system_dir}/admin/img/plugins32.png">
			Generate temporary login hashes
		</a>
	</li>
	<li>
		<a href="{ONETIMELOGIN_CLEAR_URL}">
			<img src="{PHP.cfg.system_dir}/admin/img/plugins32.png">
			Clear all temporary hashes
		</a>
	</li>
</ul>
<!-- END: MAIN -->

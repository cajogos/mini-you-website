{extends file="pages/_inc/master.tpl"}
{block name=head}
<link rel="stylesheet" href="/assets/css/creator.css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/avatar-creator.min.js"></script>
<script type="text/javascript" src="/assets/js/avatar-test.js"></script>
{/block}

{block name=body}

<div class="container-fluid">
	<div class="avatar-creator">
		<div class="code-area">
			<textarea title="Code Input" class="code-input"></textarea>
		</div>
		<div class="avatar-area">
			<canvas id="creator" width="512" height="512"></canvas>
		</div>
	</div>
</div>

{/block}

{block name=js}{/block}
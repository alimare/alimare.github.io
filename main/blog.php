<!DOCTYPE>
<html>
	<head>
		<title>Alimar Entertainment</title>
		<link rel="stylesheet" type="text/css" href="/content/js/ext411a/resources/css/ext-all.css" />
		
		<script type="text/javascript" src="/content/js/ext411a/ext-all-debug.js"></script>
		
		<?php
			include '../main/includes.php';
		?>
 
	</head>
	<body>
		<div id="headerId" style="display: none; visibility: false;">
		<?php
			include '../main/header.php';
		?>		
			<div style="background-color: rgb(35, 45, 56); padding-left: 20px;padding-top: 75px;"><a href="../">Home</a> | <a href="javascript:void(0);" onclick="changeBlog('http://entertainmentandme.blogspot.com/');">Entertainment and Me</a> | <a href="javascript:void(0);" onclick="changeBlog('http://poundingkeysandminds.blogspot.com/');">Pounding Keys and Minds</a> | <a href="javascript:void(0);" onclick="changeBlog('http://amortalsjourney.blogspot.com/');">A Mortals Journey</a><br>
		</div>
		<!--
			<iframe id="blogFrame" src="http://entertainmentandme.blogspot.com/" width="100%" height="85%"></iframe>
		-->	
		

		
		<script type="text/javascript">
			
			Ext.onReady(function() {
		
				var header = Ext.create('Ext.panel.Panel', {
					region: 'north',
					bodyStyle: 'background-color: rgb(35, 45, 56);',
					height: 100,
					html: document.getElementById("headerId").innerHTML
				});
				
				var center = Ext.create('Ext.panel.Panel', {
					region: 'center',
					html: '<iframe id="blogFrame" src="http://entertainmentandme.blogspot.com/" width="100%" height="100%"></iframe>'
				});
				
				var mainView = Ext.create('Ext.container.Viewport', {
					layout: 'border',
					renderTo: Ext.getBody(),
					items: [
						header,
						center
					]
				}); 
				
			});
			
			function changeBlog(url)
			{
				document.getElementById('blogFrame').src = url;
			}
			
		</script>
		
	</body>	
</html>

	
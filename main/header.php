<div style="background-color: rgb(35, 45, 56); z-index: 99; opacity: .85; width: 100%; position: fixed; height: 28px; top: 0px; right: 0px;"></div>
	<div style="width: 98%; z-index: 99;" class="main-header">
		<table>
			<tr>
				<td>
					<img src="/content/images/logos/logo_3.png" onclick="window.location.href='/';" style="cursor:pointer" />
				</td>
				<td id="menuBooks" class="main-menu-item" align="center" onclick="window.location.href = '/main/books/books.php'" onmouseover="hightlightMenu('#menuBooks');" onmouseout="normalMenu('#menuBooks');">
					Books
				</td>
				<td id="menuSoftware" class="main-menu-item" align="center" onclick="window.location.href = '/main/software/software.php'" onmouseover="hightlightMenu('#menuSoftware');" onmouseout="normalMenu('#menuSoftware');">
					Software
				</td>
				<td id="menuGames" class="main-menu-item" align="center" onclick="window.location.href = '/main/games/games.php'" onmouseover="hightlightMenu('#menuGames');" onmouseout="normalMenu('#menuGames');">
					Games
				</td>
				<!--
				<td id="menuMedia" class="main-menu-item" align="center" onmouseover="hightlightMenu('#menuMedia');" onmouseout="normalMenu('#menuMedia');">
					Media
				</td>					
				-->
				<td id="menuBlogs" class="main-menu-item" align="center"  onclick="window.location.href = '/main/blog.php'" onmouseover="hightlightMenu('#menuBlogs');" onmouseout="normalMenu('#menuBlogs');">
					Blogs
				</td>	
				<!--
				<td id="menuForum" class="main-menu-item" align="center" onmouseover="hightlightMenu('#menuForum');" onmouseout="normalMenu('#menuForum');">
					Forum
				</td>			
				-->
				<td id="menuLink" class="main-menu-item" align="center" onclick="window.location.href = '/main/links.php'" onmouseover="hightlightMenu('#menuLink');" onmouseout="normalMenu('#menuLink');">
					Links
				</td>						
			</tr>
		</table>

	</div>

<script type="text/javascript">
	
	function hightlightMenu(menu){
		$(menu).addClass('main-menu-item-hightlight');
	}

	function normalMenu(menu){
		$(menu).removeClass('main-menu-item-hightlight');
	}	

</script>

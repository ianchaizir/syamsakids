	<div id="nav">
		<ul>

	  		<?php foreach($menus as $menu_uri => $menu_name): ?>
 				<?php echo '<li id=' . $menu_uri . '>'.anchor($menu_uri,$menu_name).'</li>'; ?>
			<?php endforeach; ?>

        </ul>
	</div> <!-- end nav -->
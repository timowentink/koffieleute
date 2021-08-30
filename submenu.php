<?php
global $post;

$the_page_id = $post->ID;
//var_dump($post);

	//SUBNAVIGATION
	if(!$post->post_parent){
		// will display the subpages of this top level page
		$children = wp_list_pages("title_li=&child_of=".$the_page_id."&echo=0&depth=1");
		$main_page_id = $the_page_id;
	} else {
	if($post->ancestors) {
		// now you can get the the top ID of this page
		// wp is putting the ids DESC, thats why the top level ID is the last one
		$ancestors = end($post->ancestors);
		$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0&depth=1");
		$main_page_id = $ancestors;
		}
	}
	
	if(!is_404()) { 
		if (!empty($children)) {
			//include main page as item in front of subpage items
			
			if($the_page_id == $main_page_id) { $main_page_active_class = " current_page_item"; } else { $main_page_active_class = ""; }
			?>
				
			<div id="submenu" class="no_mobile">
				<div class="container">
					<div class="col col-1-3 nospace ">&nbsp;</div>
					<div class="col col-2-3 nospace ">
						<ul>		
							<?php 
							
							$encode_children = htmlentities($children);
							$decode_children = html_entity_decode($encode_children);
							
							echo $decode_children; 
							?>
						</ul>
					</div>
				</div>
			</div>
		<?php 
		} 
	}
?>
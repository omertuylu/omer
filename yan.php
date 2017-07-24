<div id="sidebar" class="four columns">

   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>

   			<div class="widget widget_categories group">
				<?php 
				$sorgu = $db -> query("select * from blog_katagori WHERE id=1",PDO::FETCH_ASSOC);
				if($sorgu -> rowCount())
					   foreach($sorgu as $row){	 
		?>
   				<h3>Categoriler.</h3> 
   				<ul>
						<li><a href="#" title=""><?php echo $row['php']; ?></a> (2)</li>
						<li><a href="#" title=""><?php echo $row['html']; ?></a> (14)</li>
						<li><a href="#" title=""><?php echo $row['css']; ?></a> (5)</li>
						<li><a href="#" title=""><?php echo $row['kotlin']; ?></a> (3)</li>
												
					</ul>
					
				</div>

				<div class="widget widget_text group">
					<h3><?php echo $row['w_baslik']; ?></h3>

   				<p><?php echo $row['widget_metın']; ?></p>

   			</div>
<?php }?>
   			<div class="widget widget_tags">
				<?php 
				$sorgu = $db -> query("select * from blog_etiket WHERE id=1",PDO::FETCH_ASSOC);
				if($sorgu -> rowCount())
					   foreach($sorgu as $row){	 
		?>
               <h3><?php echo $row['etiketadi']; ?></h3>

               <div class="tagcloud group">
                	
                  <a href="#"><?php echo $row['php']; ?></a>
                  <a href="#"><?php echo $row['html']; ?></a>
                  <a href="#"><?php echo $row['css']; ?></a>
                  <a href="#"><?php echo $row['joomla']; ?></a>
                 
               </div>
                 
            </div>
<?php }?> 
            <div class="widget widget_popular">
               <h3>Popular Post.</h3>

               <ul class="link-list">
                  <li><a href="#">Sint cillum consectetur voluptate.</a></li>
                  <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
                  <li><a href="#">Fugiat minim eiusmod do.</a></li>                     
               </ul>
                  
            </div>
   			
   		</div> <!-- end sidebar -->
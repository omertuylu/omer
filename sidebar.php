<div id="sidebar" class="four columns">
   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">
                     <input type="text" value="Arama Yapın..." onblur="if(this.value == '') { this.value = 'Arama Yapın...'; }" onfocus="if (this.value == 'Arama Yapın...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">
                  </form>
               </div>
   			<div class="widget widget_categories group">	
   				<ul><?php 
				 
				 $katagorı=$db->query("select blog_katagori.kat_adi,COUNT(*) as say FROM blog_katagori INNER JOIN blog_icerik ON blog_katagori.id=blog_icerik.k_id GROUP BY blog_katagori.id ORDER BY say DESC",PDO::FETCH_ASSOC);
				 $katagorıı=$db->query("select blog_katagori.kat_adi,COUNT(*) as say FROM blog_katagori INNER JOIN blog_icerik ON blog_katagori.id=blog_icerik.k_id GROUP BY blog_katagori.id ORDER BY say DESC",PDO::FETCH_ASSOC);
				 $katagorııı=$db->query("select blog_katagori.kat_adi,COUNT(*) as say FROM blog_katagori INNER JOIN blog_icerik ON blog_katagori.id=blog_icerik.k_id GROUP BY blog_katagori.id ORDER BY say DESC",PDO::FETCH_ASSOC);
				 if($sorgu -> rowCount()){
					 foreach ($katagorı as $row){
						?>
						<li><a href="#" title=""><?php echo $row['kat_adi']; ?></a> (<?php echo $row['say'];?>)</li>
						<?php if($katagorıı -> rowCount())
						 ?>
				 <?php }}?>						 												
					</ul>	
				</div>
				<div class="widget widget_text group">
					<h3></h3>
   				<p></p>
   			</div>
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
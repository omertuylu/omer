<?php
include 'vt.php';
?>
<article class="entry">
					<header class="entry-header">
						<h2 class="entry-title">
						<?php 
				$sorgu = $db -> query("select * from blog_icerik WHERE id=1",PDO::FETCH_ASSOC);
				if($sorgu -> rowCount())
					   foreach($sorgu as $row){	 
		?>
							<a href="single.php" title=""><?php echo $row['baslik']; ?></a>					
						</h2> 				 
					 
						<div class="entry-meta">
							<ul>
								<li><?php echo $row['tarih']; ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">Staj</a></li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $row['kuladi']; ?></li>
							</ul>
						</div> 				
					</header> 					
					<div class="entry-content">
						<p><?php echo $row['icerik']; ?></p>
					</div> 
<?php }?>
				</article> <!-- end entry -->				
<article class="entry">
					<header class="entry-header">

						<h2 class="entry-title">
						<?php 
				$sorgu = $db -> query("select * from blog_icerik WHERE id=2",PDO::FETCH_ASSOC);
				if($sorgu -> rowCount())
					   foreach($sorgu as $row){	 
		?>
							<a href="single.php" title=""><?php echo $row['baslik']; ?></a>						
						</h2> 				 
					 
						<div class="entry-meta">
							<ul>
								<li><?php echo $row['tarih']; ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">Staj</a></li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $row['kuladi']; ?></li>
							</ul>
						</div> 				
					</header> 				
					<div class="entry-content">
						<p><?php echo $row['icerik'];?></p>
					</div> 
                         <?php }?>
				</article> <!-- end entry -->
				<article class="entry">
					<header class="entry-header">
						<h2 class="entry-title">
						<?php 
				$sorgu = $db -> query("select * from blog_icerik WHERE id=3",PDO::FETCH_ASSOC);
				if($sorgu -> rowCount())
					   foreach($sorgu as $row){	 
		?>
							<a href="single.php" title=""><?php echo $row['baslik']; ?></a>						
						</h2> 				 					 
						<div class="entry-meta">
							<ul>
								<li><?php echo $row['tarih']; ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">Staj</a></li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $row['kuladi']; ?></li>
							</ul>
						</div> 				
					</header> 					
					<div class="entry-content">
						<p><?php echo $row['icerik'];?></p>
					</div> 
<?php }?>
				</article> <!-- end entry -->
				

					
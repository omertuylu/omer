 <!-- Header
   ================================================== -->
<?php
include 'vt.php';
?>
   <header id="top">
   	<div class="row">
   		<div class="header-content twelve columns">
		<?php 
		$sorgu = $db -> query("select * from blog_post",PDO::FETCH_ASSOC);
		if($sorgu -> rowCount()){
			   foreach($sorgu as $row){		 
		?>
		      <h1 id="logo-text"><a href="index.html" title=""><?php echo $row['baslik'] ?>		
			   </a></h1>
				<p id="intro"><?php echo $row['slogan'] ?></p>
<?php } } ?>
			</div>			
	   </div>
	   <nav id="nav-wrap"> 
	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>
	   	<div class="row">    		            
			   	<ul id="nav" class="nav">
				<?php 
				$sorgu = $db -> query("select * from blog_link WHERE id=1",PDO::FETCH_ASSOC);
				if($sorgu -> rowCount())
					   foreach($sorgu as $row){	 
		?>
			      	<li class="current"><a href="index.html"><?php echo $row['menu1']; ?></a></li>
			      	<li class="has-children"><a href="#"><?php echo $row['menu2']; ?></a>	                  
	               </li>
	               <li><a href="demo.html"><?php echo $row['menu3']; ?></a></li>				      	
					<?php }?>
			   	</ul> <!-- end #nav -->			   	 
	   	</div> 
	   </nav> <!-- end #nav-wrap --> 	     
   </header> <!-- Header End -->
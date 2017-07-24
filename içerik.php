<?php
include 'vt.php';
?>
<article class="entry">

					<header class="entry-header">

						<h2 class="entry-title">
						<?php 
		$sorgu = $db -> query("select * from blog_icerik",PDO::FETCH_ASSOC);
		if($sorgu -> rowCount()){
			   foreach($sorgu as $row){	 
		?>
							<a href="single.php" title=""><?php echo $row['baslik'] ?></a>
						
						</h2> 				 
					 
						<div class="entry-meta">
							<ul>
								<li><?php echo $row['tarih'] ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">Ghost</a></li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $row['kuladi'] ?></li>
							</ul>
						</div> 
					 <?php} } ?>
					</header> 
					
					<div class="entry-content">
						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>
					</div> 

				</article> <!-- end entry -->

				<article class="entry">
	   			
					<header class="entry-header">

						<h2 class="entry-title">
							<a href="single.html" title="">We All Love Good Typography.</a>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li>July 11, 2014</li>
								<span class="meta-sep">&bull;</span>							
								<li>
									<a href="#" title="" rel="category tag">Wordpress</a>,
									<a href="#" title="" rel="category tag">Ghost</a>  
								</li>
								<span class="meta-sep">&bull;</span>
								<li>Jane Doe</li>
							</ul>
						</div>
					 
					</header> 			

					<div class="entry-content">
						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in.</p>
					</div> 

				</article> <!-- end entry -->

				<article class="entry">
	   			
					<header class="entry-header">

						<h2 class="entry-title">
							<a href="single.html" title="">White Space Everywhere.</a>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li>July 10, 2014</li>
								<span class="meta-sep">&bull;</span>								
								<li>
									<a href="#" title="" rel="category tag">Joomla</a>,
									<a href="#" title="" rel="category tag">Drupal</a>  
								</li>
								<span class="meta-sep">&bull;</span>
								<li>Naruto Uzumaki</li>
							</ul>
						</div> 
					 
					</header> 			

					<div class="entry-content">
						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>
					</div> 

				</article> <!-- end entry -->  

				<article class="entry">
	   			
					<header class="entry-header">

						<h2 class="entry-title">
							<a href="single.html" title="">Simple And Minimalist Designs.</a>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li>July 09, 2014</li>
								<span class="meta-sep">&bull;</span>								
								<li>
									<a href="#" title="" rel="category tag">Ghost</a>  
								</li>
								<span class="meta-sep">&bull;</span>
								<li>Naruto Uzumaki</li>
							</ul>
						</div> 
					 
					</header> 			

					<div class="entry-content">
						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>
					</div> 

				</article> <!-- end entry -->  	
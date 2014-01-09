<div class="nav">

<div class="NavMenu">
	<ul id="sdt_menu" class="sdt_menu">
		<li>
			<a href="index.php">
				<img src="img/Home_Menu.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">Home</span>
					<span class="sdt_descr">Welcome</span>
				</span>
			</a>
		</li>
		<li>
			<a href="AboutUs.php">
				<img src="img/Menu.png" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">Us</span>
					<span class="sdt_descr">About us</span>
				</span>
			</a>
            <div class="sdt_box">
					<a href="Beth.php">Beth</a>
					<a href="Neil.php">Neil</a>
                    <a href="NeilAndBeth.php">Neil & Beth</a>
                    <a href="Registry.php">Registry</a>
			</div>
		</li>

        <li>
			<a href="Event.php">
				<img src="img/Linville_Club_Menu.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">The Event</span>
					<span class="sdt_descr">Logistics</span>
				</span>
			</a>
			<div class="sdt_box">
					<a href="Venue.php">The Venue</a>
					<a href="Weekend.php">The Weekend</a>
                    <a href="Friday.php">Friday Night</a>
			</div>
		</li>
		<li>
			<a href="Location.php">
                <img src="img/Linville_Air_Menu.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">Location</span>
					<span class="sdt_descr">Linville Ridge</span>
  				</span>
			</a>
<div class="sdt_box">
					<a href="Travel.php">Travel</a>
					<a href="Lodging.php">Where to stay</a>
                    <a href="Activities.php">What to do</a>
			</div>
		</li>
		<li>
			<a href="People.php">
				<img src="img/Sisters_Menu.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">The Cast</span>
					<span class="sdt_descr">Friends and family</span>
				</span>
			</a>
	<div class="sdt_box">
					<a href="BridalParty.php">Bridal Party</a>
					<a href="Groomsmen.php">The Groomsmen</a>
      			</div>
		</li>	
	</ul>
</div>


<!-- The JavaScript -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<script type="text/javascript">
$(function() {
		/**
		* for each menu element, on mouseenter, 
		* we enlarge the image, and show both sdt_active span and 
		* sdt_wrap span. If the element has a sub menu (sdt_box),
		* then we slide it - if the element is the last one in the menu
		* we slide it to the left, otherwise to the right
		*/
$('#sdt_menu > li').bind('mouseenter',function(){
			var $elem = $(this);
			$elem.find('img')
				 .stop(true)
				 .animate({
					'width':'170px',
					'height':'170px',
					'left':'0px'
				 },400,'easeOutBack')
				 .andSelf()
				 .find('.sdt_wrap')
			     .stop(true)
				 .animate({'top':'140px'},500,'easeOutBack')
				 .andSelf()
				 .find('.sdt_active')
			     .stop(true)
				 .animate({'height':'170px'},300,function(){
				var $sub_menu = $elem.find('.sdt_box');
				if($sub_menu.length){
					var left = '170px';
					if($elem.parent().children().length == $elem.index()+1)
						left = '-170px';
					$sub_menu.show().animate({'left':left},200);
				}	
			});
		}).bind('mouseleave',function(){
			var $elem = $(this);
			var $sub_menu = $elem.find('.sdt_box');
			if($sub_menu.length)
				$sub_menu.hide().css('left','0px');
			
			$elem.find('.sdt_active')
				 .stop(true)
				 .animate({'height':'0px'},300)
				 .andSelf().find('img')
				 .stop(true)
				 .animate({
					'width':'0px',
					'height':'0px',
					'left':'85px'},400)
				 .andSelf()
				 .find('.sdt_wrap')
				 .stop(true)
				 .animate({'top':'25px'},500);
		});
});
</script>

</div>

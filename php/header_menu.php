<?php	
	function create_url($link, $link_name) {
		$menu_link = "<a class='menu-links' type='submit' href='?link=$link'>$link_name</a>";
		return $menu_link;
	}
	function create_links($links){
		$menu_link = "";
		foreach($links as $link => $link_name) {
			$menu_link .= create_url($link, $link_name);
		}
		return $menu_link;
	}
	$links = array(			
			"home" => "Home",			
			"all" => "Rezepte",						
			"favorite" => "Merkliste"
		);
		if(!isset($_SESSION["eingeloggt"])) {
			$login_link = array(
				"reg" => "Registrieren",
				"login" => "Login"
			);
			$links = array_merge($links, $login_link); 
		}
		if(isset($_SESSION["eingeloggt"])) {
			$logout_link = array(				
				"add" => "Neues Rezept",				
				"logout" => "Logout"
			);
			$links = array_merge($links, $logout_link); 		
		}		
	echo create_links($links);

?>
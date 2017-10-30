<!DOCTYPE html>
<html lang="en">
  
	
	

   <head> 
   
    <title>Embedded login with Salesforce</title>

    <!— Some other meta tags —>
    <meta name="salesforce-community" content="https://upworkcommunity-developer-edition.ap5.force.com/Customers">
    <meta name="salesforce-client-id" content="3MVG9d8..z.hDcPKkUS17WGka1YSSYI5z.xuM3TDSpRUFYpXpGJE7yr7lXYiZ88KqaS1ocru1JAKL72h9l7rG">
    <meta name="salesforce-redirect-uri" content="https://embedded202.herokuapp.com/_callback.php">
    <meta name="salesforce-mode" content="modal">
    <meta name="salesforce-target" content="#sign-in-link">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout">

<link href="https://upworkcommunity-developer-edition.ap5.force.com/Customers/servlet/servlet.loginwidgetcontroller?type=css" rel="stylesheet" type="text/css" />
<script src="https://upworkcommunity-developer-edition.ap5.force.com/Customers/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>
  </head>
	
	
  
  <body>
  	
	

	
	<script>


	function onLogin(identity) {
		
		var targetDiv = document.querySelector(SFIDWidget.config.target);	
		
		var avatar = document.createElement('a'); 
	 	avatar.href = "javascript:showIdentityOverlay();";
		
		
		var img = document.createElement('img'); 
	 	img.src = identity.photos.thumbnail; 
		img.className = "sfid-avatar";
	
		var username = document.createElement('span'); 
		username.innerHTML = identity.username;
		username.className = "sfid-avatar-name";
	
		var iddiv = document.createElement('div'); 
	 	iddiv.id = "sfid-identity";
		
		avatar.appendChild(img);
		avatar.appendChild(username);
		iddiv.appendChild(avatar);		
	
		targetDiv.innerHTML = '';
		targetDiv.appendChild(iddiv);	
		
		
	}
	
	
	
	
	
	function onLogout() {
		SFIDWidget.init();

        }

	</script>
	
  </body>
</html>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
		<title>Tell A Story <?php if($page=='homepage')
		echo "- From Aarhus with love";
		else if($page=='events')
		echo "- Events in Aarhus";
		else if($page=='postcards')
		echo "- Stories from Aarhus";
		else if($page=='myprofile')
		echo "- You profile";
		else if($page=='userprofile')
		echo "- User profile";
		else if($page=='login')
		echo "- Log in";
		else if($page=='signup')
		echo "- Join us";
		else if($page == 'completeprofile')
		echo "- Update profile";
		else if($page == 'createevent')
		echo "- Create a new event";
		else if($page == 'createpostcard')
		echo "- Create a new postcard";
		 ?></title>
         
         <meta name="description" content="<?php if($page=='homepage')
		echo "- Share you experiences from Aarhus with all your friends and win prizes. Postcards from Aarhus is the new black";
		else if($page=='events')
		echo "Experience the local culture of Aarhus and meet local people.";
		else if($page=='postcards')
		echo "See what other people have been doing in Aarhus. Best way to get inspiration for your trip";
		else if($page=='myprofile')
		echo "Make changes to your profile";
		else if($page=='userprofile')
		echo "See people who've been to Aarhus or live here";
		else if($page=='signup')
		echo "Join us and show your loved one that you are thinkin of them by sending them a special postcard";
		 ?>" >

		<!-- Stylesheets for postcard effect-->
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        
        <!-- Bootstrap Stylesheets-->
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
        
        <!-- Share plugin -->
    <link rel="stylesheet" type="text/css" href="js/jssocials-1.0.0/jssocials.css" />
    <link rel="stylesheet" type="text/css" href="js/jssocials-1.0.0/jssocials-theme-flat.css" />

	</head>
	<body>
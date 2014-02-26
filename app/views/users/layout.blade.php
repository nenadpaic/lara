<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Nenad Development- Support</title>
<meta name="description" content="Support page for users of my applications">
<meta name="author" content="Nenad Paic">



<link rel="stylesheet" href="res/css/style.css">
<link rel="stylesheet" href="res/css/jquery.mCustomScrollbar.css">


<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic' rel='stylesheet' type='text/css'>

<!-- Syntax Highlighter -->
<link rel="stylesheet" type="text/css" href="res/js/syntax-highlighter/styles/shCore.css" media="all">
<link rel="stylesheet" type="text/css" href="res/js/syntax-highlighter/styles/shThemeDefault.css" media="all">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>        
<script src="res/js/modernizr.js"></script>
{{ HTML::script('res/js/jquery.simplemodal-1.4.4.js')}}
<style type="text/css">
#new_ticket{
        width: 100px;
        height: 30px;
        background-color: #303030;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    #new_ticket:hover{
        background-color: #DE5E60;
    }
    .errors-form{
        color: red;
        text-align: left;
    }
    .success-message{
        text-align: left;
        color: green;
        font-size: 1.2em;
    }
</style>

<script>


function tickets(){
$.ajax({
url: "{{ URL::action('SupportController@tickets'); }}",
type: "get",
success:function(data){

$('#tiketi1').html(data);

},
error:function(){

$('#tiketi1').html("There are no active tickets");

}


});


}

function forma(){
$.ajax({
url: "{{ URL::action('SupportController@tiket_new'); }}",
type: "get",
success:function(data){

$('#forma').html(data);

},
error:function(){

$('#forma').html("error");

}


});
}

</script>

</head>

<body>

<div id="navmenu-primary" class="">
	<div class="navmenu-primary-content grid-full clearfix">
    	<div class="navmenu-left left clearfix">
            	<div id="nav_item_logo" class="nav-item nav-item-logo clearfix first">
                	<a class="nav-item-logo-link nav-sprite nav-sprite-logo" href="http://www.alessioatzeni.com" target="_blank">
                        <div class="nav-text">alessioatzeni.com</div>
                    </a>
                </div>
        </div>
        <div class="navmenu-right right clearfix">
        	<ul class="left nav-large nav-items clearfix">
               
                <li id="nav-item-question" class="nav-item nav-item-question clearfix">
                    <span class="nav-link"><a href="http://themeforest.net/user/Bluxart" class="nav-btn-question" target="_blank">Online support</a></span>
                </li>
                 <li id="nav-item-question" class="nav-item nav-item-question clearfix">
                    <span class="nav-link"><a href="http://themeforest.net/user/Bluxart" class="nav-btn-question" target="_blank">Forum</a></span>
                </li>

    </div>
            </ul>
        </div>
    </div>
</div>

<div id="site-container">
	<div id="site-columns" class="clearfix">
    	<div id="site-left-column">
        	<div id="primary-content" class="clearfix">
            	<div id="activity-home" class="normal">
                	<div id="left-panel" class="left panel">

                    	<div id="left-panel-content" class="panel-content be-viewport">
                        	<nav id="menu">
                            	<ul>
                                	<li class="menu-label no-border">
                                		<a href="#news" class="section-menu-title left">News</a>
                                    </li>
                                    <li class="menu-label no-border">
                                		<a href="#tickets2" class="section-menu-title left" id="tiketi">Support tickets</a>
                                    </li>
                                    <li class="menu-label no-border">
                                		<a href="#html-structure" class="section-menu-title left">My Application</a>
                                	</li>
                                    <li class="menu-label no-border">
                                        <a href="#css-structure" class="section-menu-title left">Help</a>
                                    </li>
                                 
									
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    
                    
                    <div id="right-panel" class="left panel">
                        <div id="right-panel-content" class="panel-content fix-panel">
                        	<div class="box-master">
                            	<div class="box-list-posts">
                                	<!-- Start Section -->
                        			<div id="news" class="box-post">
                                    	<!-- Top Content -->
                            			<div class="box-post-content">
                                            <div class="box-post-header">
                                            	<h3 class="c-name">Nenad Development</h3>
                                              <?php if(Session::has('poruka')){
                                                echo "<ul><li class='success-message'>".Session::get('poruka')."</li></ul>";
                                                } ?>
                                               @if($errors->has())
                                               <ul class="errors-form">
                                                   {{ $errors->first('subject', '<li>Subject field- :message</li>') }}
                                                   {{ $errors->first('cat', '<li>:message</li>') }}
                                                   {{ $errors->first('description', '<li>Description field- :message</li>') }}

                                               </ul>
                                               @endif
                                            </div>
                                            <div class="box-post-container">
                                            	<h3 class="c-title">Welcomme to support section</h3>
                                                <div class="c-text">
		
                                                </div>
                                            </div>
                                            
                                       @yield('content')
                                    
                                    <div id="tickets2" class="box-post">
                                    	<!-- Top Content -->
                            			<div class="box-post-content">
                                            <div class="box-post-header">
                                            	<h3 class="c-name">Support tickets</h3>
                                                
                                            </div>
                                            <div class="box-post-container">
                                            	<h3 class="c-title">Active tickets</h3>
                                                <button id="new_ticket">Create Ticket</button>
                                                <div id="forma" style="display:none"></div><br />
                                                <div class="c-text" id="tiketi1">

												
                                                </div>
                                            </div>
                                        </div>
                            		</div>


                                     <div id="html-structure" class="box-post">
                                        <!-- Top Content -->
                                        <div class="box-post-content">
                                            <div class="box-post-header">
                                                <h3 class="c-name">My Application</h3>
                                                <h4 class="credits">Documetation for your application</h4>
                                            </div>
                                            <div class="box-post-container">
                                                <h3 class="c-title">This section is under contruction</h3>
                                                <div class="c-text">
                                                   <p>This section is under contruction, will be over soon</p>
                                                    
                                          
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div id="css-structure" class="box-post">
                                        <!-- Top Content -->
                                        <div class="box-post-content">
                                            <div class="box-post-header">
                                                <h3 class="c-name">Help</h3>
                                                <h4 class="credits">Help documentation about support section</h4>
                                            </div>
                                            <div class="box-post-container">
                                                <h3 class="c-title">Under contruction</h3>
                                                <div class="c-text">
                                                    <p>This section is under contruction, will be over soon</p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                  
                                    
                                    
                              
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){

tickets();
forma();

});
$('#new_ticket').click(function(){
$('#forma').toggle();
});




</script>
<!-- Load jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="res/js/jquery-ui-1.8.23.custom.min.js"></script>
<script src="res/js/jquery.mousewheel.min.js"></script>
<script src="res/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="res/js/syntax-highlighter/scripts/shCore.js"></script> 
<script type="text/javascript" src="res/js/syntax-highlighter/scripts/shBrushXml.js"></script> 
<script type="text/javascript" src="res/js/syntax-highlighter/scripts/shBrushCss.js"></script> 
<script type="text/javascript" src="res/js/syntax-highlighter/scripts/shBrushJScript.js"></script> 
<script type="text/javascript" src="res/js/syntax-highlighter/scripts/shBrushPhp.js"></script> 
<script src="res/js/ss.js"></script>
</body>
</html>


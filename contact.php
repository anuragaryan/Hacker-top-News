<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Top Stories of Hacker News">
    <meta name="author" content="Anurag Aryan">

    <title>Hacker top News</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/sticky-footer.css"rel="stylesheet">

    <script src="./email/validation.js" type="text/javascript"></script>

    </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Hacker top News</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
	            <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="active"><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/container -->
      </div><!--/navbar -->  
      
	
    <div class="container" id="divMain">
    <h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
    <!--Start Contact form -->		                                                
    <form name="enq" method="post" action="email/" onsubmit="return validation();">
    
    <fieldset>    
    <input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" /><br/>
    <br/>
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" /><br/>
    <br/>
    <textarea rows="11" cols="50" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea><br/>
    <br/>
    <div class="actions">
    <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull    -left" title="Click here to submit your message!" />
    </div>	
    </fieldset>
	
    </form>  				 
    <!--End Contact form -->											 
</div>
    
    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Built by <a href="http://www.github.com/anuragaryan">Anurag Aryan</a>.</p>
      </div>
    </div><!--/footer --> 
  </body>
</html>

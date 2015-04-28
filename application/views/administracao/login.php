<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Login</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/admin/login.css" />
</head>
<body>

    
<div class="principal" >
	<!--<div class="centro">-->
            <div class="formContato">
            
            <form id="form1" name="form1" action="<?php echo base_url();?>administracao/home/login" method="post">
        
               
                
                <div style="position:relative; top: 257px; left: 174px; width:150px;">
               <input  type="text" name="login" style=""/>
                </div>
                <div style="position:relative; top: 284px; left: 174px; width:150px;">
               <input type="password" name="senha" style=""/> 
                </div>
                
                <div style="position:relative; top: 309px; left: 265px; width:150px;">
              <input type="image" name="enviar" src="<?php echo base_url();?>style/admin/login_button.png"/>
                </div>
            
          
            </form>
            </div>
    <!--</div>-->
 
        
</div><!-- fecha div Tudo -->
</body>
</html>
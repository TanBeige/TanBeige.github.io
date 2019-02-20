<!DOCTYPE html>
    <?php
        //session_start();
    ?>
	<html>
		<head>
            <meta charset = "utf-8"/>
            <title>Home</title>
            <link rel = "stylesheet" href = "nasastyle.css">
        </head>

        <body>
			<!--background blurred image-->
            <!--<h1>Hello.</h1>-->
			<div id="homeImage">
					<img id="homeSrc" src = "./home.png" alt = "NASA Image">
			</div>
            
            <!-- DATE INPUT CONTAINER-->
            <div class="input_container" id="tanCont" class="select">
                <form id="homeForm" action = "tan.php" method = "get">
                    <!--dropdown menus-->
                    
                        <select id="monthStyle" name = "month" size = 1>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09" selected>September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>

                        <select id="dayStyle" name = "day" size = 1>
                        <?php
                            for ($i=1; $i<=31; $i++)
                            {
                                ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                            }
                        ?>
                        </select>
                    

                    
                        <select id="yearStyle" name = "year" size = 1>
                        <?php
                            for ($i=2018; $i>=1995; $i--)
                            {
                                ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                            }
                        ?>
                        </select>
                    


                    <!--end of dropdown menu-->
                    
                        <button type = "submit">Submit</button>
                    
                </form>
            </div>
        </body>
</html>
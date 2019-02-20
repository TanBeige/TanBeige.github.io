<!--GRABBING THE NASA PICS-->
<?php
    //include 'home.php';
   // POST https://api.nasa.gov/planetary/apod 
    //if(isset($maps_url))
    //{        
        $maps_url = "https://api.nasa.gov/planetary/apod?api_key=UlHNgX14s3H5gxEGF3Nwnzw1ecmvMX2tBG7h4HPE&date=" . $_GET["year"] . "-" . $_GET["month"] . "-" . $_GET["day"];

    //}
    //else
    //{
    //    $maps_url = "https://api.nasa.gov/planetary/apod?api_key=UlHNgX14s3H5gxEGF3Nwnzw1ecmvMX2tBG7h4HPE";
    //}
        //if()
        //"https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY "
        
        $maps_json = file_get_contents($maps_url);
        $maps_array = json_decode($maps_json,true);

        $img_src = $maps_array['url'];
	
		$parsed = parse_url($img_src);
		$video = false;

		if(array_key_exists("code", $maps_array))
		{
			$img_src = "";
			echo "what the fuck";
		}
		elseif($parsed["host"] == "www.youtube.com")
		{
			$video = true;
		}
		//echo $video;
              
                
        //echo "$img_src <br>";
		//echo $parsed["host"];


        //echo "<img src = \"$img_src\" alt = \"BDay Image\">";
    
?>
<!--END OF GRABBING THE NASA PICS-->

<!-- HTML FFROM HERE-->
    
<!DOCTYPE html>
	<html>
		<head>
            <meta charset = "utf-8"/>
            <title>Tan</title>
            <link rel = "stylesheet" href = "nasastyle.css">
        </head>
        
        <body>
			<!--background blurred image-->
            <?php
			 //echo "<div id=\"back_image\" id=\"backgroundIm\" style=\"background-image: url:('$img_src'); background-repeat: no-repeat;width: 100%;height: 100%;></div>"
            ?>
            <div id="backgroundIm">
				<?php
					echo "<img id=\"back_image\" src = \"$img_src\" alt = \"BDay Image\">";
				?>
                
                <div class="fade">
                    <h1>Hello.</h1>
                </div>
            </div>
            <!-- DATE INPUT CONTAINER-->
            <div id="tanCont">
                <form action = "" method = "get">
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
                        //make an if statement for each month later
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
            
            <br/> 
            <!--Main image showing-->
            <?php
                if($video == 1)
                {
                    echo "<iframe width=\"1080\" height=\"720\" src=\"$img_src\"></iframe>";
                }
                else 
                {
                    echo "<img id=\"main_image\" src = \"$img_src\" alt = \"BDay Image\">";
                }
            ?>
        </body> 
    </html>
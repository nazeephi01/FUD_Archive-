<?php
 function Confirm_query($result_set, $E_MSG, $success){
				if (!$result_set)
						{
							die ($E_MSG . ":<BR> " . mysql_error( ));
						}
						else{
							 echo "<div class='notification'>" . $success . "</div>";
							}
					}
					
 ?>
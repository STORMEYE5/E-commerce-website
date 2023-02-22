<?php
	//Include the PHP functions to be used on the page
	include("common.php");

	// Output header
	output_header("Order details");
    // Output style sheet
	output_styles("inventory.css");
	output_header2();
    // Output navigation bar
	outputNav();
	output_header3();
?>

	<!-- Contents of page -->
	<h1> Order Details </h1>
	
	<!-- Table of orders -->
	<table height= "50%" width = "100%" border = "5" cellspacing="10" align = "right" color=D56653 >
			<tr>
				<td colspan="5" bgcolor = "black" align = "center"> Products </td>
			</tr>
			<tr>
				<td>--Order ID-- </td>
				<td>--Customer ID-- </td>
				<td>--Date of Purchase-- </td>
				<td>--Price(Rs)-- </td>
			</tr>
			<tr>
				<td>LG213</td>
				<td> JS120909 </td>
				<td>12/12/2022 </td>
				<td>38 999</td>
				
			</tr>	
			<tr>
				<td>JBL433</td>
				<td> LP120302 </td>
				<td> 24/11/2022 </td>
				<td>51 870</td>
			</tr>
			<tr>
				<td>I1242</td>
				<td> AP090903</td>
				<td> 16/11/2022</td>
				<td>89 000</td>
			</tr
			<tr>
				<td> LT365</td>
				<td> SG210902 </td>
				<td> 26/10/2022 </td>
				<td>6 000</td>
			</tr>
			<tr>
				<td>SA090</td>
				<td>MK123908  </td>
				<td>11/10/2022 </td>
				<td>40 000</td>
			</tr>
			
		</table>

<?php
    // Output footer
	output_footer();
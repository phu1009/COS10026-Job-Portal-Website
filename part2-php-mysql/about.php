<!DOCTYPE html>
<html lang="en">

<?php $title = "About";
include('head.inc'); ?>

<body class="animation">

	<h1>
		Our Team
	</h1>    

	<hr>

	<?php include('header.inc'); ?>

	
    <div id="team-infor">
        <ul>
            <li>
                
            </li>
        </ul>
    </div>
    <div class="team-members">
        <ul>
            
            <li>
                <img src="images/mem2.jpg" alt="Member 2">
                <div>
                    <h3>
						Nguyen Dinh Phu
					</h3>
					<br>
                    <p>
						Major: Computer Science
					</p>
                    <p>
						Hobbies: Football, Camping, Gaming 
					</p>
					<br>
                </div>
            </li>
            <li>
                <img src="images/mem3.jpg" alt="Member 3">
                <div>
                    <h3>
						Dang Nguyen Tung Anh
					</h3>
					<br>
                    <p>
						Major: Computer Science
					</p>
                    <p>
						Hobbies: Reading books, Jogging 
					</p>
                </div>
            </li>
        </ul>
    </div>
    <section class="timetable">
        <h2>
			Timetable
		</h2>
		<table class="timetable">
			<tr>
				<th> <b> </b> </th>
				<th> <b> Monday </b> </th>
				<th> <b> Tuesday </b> </th>
				<th> <b> Wednesday </b> </th>
				<th> <b> Thursday </b> </th>
				<th> <b> Friday </b> </th>
			</tr>
			<tr>
				<td> <b> 8:00 - 9:00 </b> </td>
				<td></td> 
				<td rowspan="3" class="pink"> Web Development - COS10005 </td>
				<td rowspan="4" class="lightsalmon"> Networking and Switchings - TNE10006 </td>
				<td> </td>
				<td rowspan="4" class="lightgreen">Computing Technology Inquiry Project - COS10026 </td>
			</tr>
			<tr>
				<td> 
					<b> 9:00 - 10:00 </b>
					</td>
				<td> </td>
				<td> </td>
				
				
			</tr>
			<tr>
				<td> 
					<b> 10:00 - 11:00 </b> 
				</td>
				<td> </td>
				<td></td>
				
			</tr>
			<tr>
				<td> <b> 11:00 - 12:00 </b> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				
			</tr>
			<tr>
				<td> <b> 12:00 - 13:00 </b> </td>
				<td></td> 
				<td> </td>
				<td> </td>
				<td> </td>
				<td></td>
			</tr>
			<tr>
				<td> <b> 13:00 - 15:00 </b> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
			<tr>
				<td> 
					<b> 15:00 - 17:00 </b>
				</td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
			
		</table>	
			
     </section>
   
	 <?php include('footer.inc'); ?>

</body>
</html>
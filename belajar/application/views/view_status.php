<section>
<h1><?php echo $judul ?></h1>
<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Go</button>
    </form>
  </div><br><br><br>
  <style>
	table {
    	border-collapse: collapse;
    	width: 100%;
	}

		th, td {
    	text-align: left;
    	padding: 8px;
	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
    	background-color: #4CAF50;
    	color: white;
	}
	</style>
	<table>
  	  <tr>
    	  <th>No. Ticket</th>
    	  <th>From</th>
    	  <th>To</th>
    	  <th>Date</th>
    	  <th>Case</th>
    	  <th>Duty</th>
    	  <th>Date of Expectancy Completion</th>
    	  <th>System Integrated</th>
    	  <th>Urgency</th>
    	  <th>Description</th>
  	  </tr>
  	  	<?php
		foreach($form as $f){
			echo "<tr>";
			echo "<td>". $f->noticket."</td>";
			echo "<td>". $f->dari."</td>";
			echo "<td>". $f->untuk."</td>";
			echo "<td>".$f->date."</td>";
			echo "<td>".$f->kasus."</td>";
			echo "<td>".$f->duty."</td>";
			echo "<td>".$f->dateoec."</td>";
			echo "<td>".$f->systemint."</td>";
			echo "<td>".$f->urgency."</td>";
			echo "<td>".$f->desciption."</td>";
			?>
	</table>
</section>
<h1> berita </h1>
<form method="POST" action="Process/News/save.php">
<table>
	<tr>
		<td>Judul</td>
		<td><input type='text' name="judul"></input></td>
		</tr>
	<tr>
	<td colspan="2">
		<textarea rows="10" name="isi"></textarea>
	</td>
	</tr>
	<tr>
		<td colspan="2">
			<button style="float:right;"
			type="submit">Post!</button>
		</td>
	</tr>
</table>
</form>
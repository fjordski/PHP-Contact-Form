<?php
<div class="section page">
	<div class="wrapper">
		<h1>Get In Contact!</h1>
		<form method="post" action="process.php">
			<table>
				<tr>
					<th>
						<label for="name">Name</label>
					</th>
					<td>
						<input type="text" id="name" name="name" />
					</td>
				</tr>
					<tr>
					<th>
						<label for="email">E-mail</label>
					</th>
					<td>
						<input type="text" id="email" name="email" />
					</td>
				</tr>
					<tr>
					<th>
						<label for="message">Message</label>
					</th>
					<td>
						<textarea id="message" name="message"></textarea>
					</td>
				</tr>
			</table>
			<input type="submit" value="send" />

		</form>


	</div>
</div>
							
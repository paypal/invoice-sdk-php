	<?php if(isset($response)) {?>	
	<pre><?php var_dump($response);?></pre>
	<?php }
	if(isset($invoiceService)) {?>
	<table id="apiResponse">
		<tr>
			<td>Request:</td>
		</tr>
		<tr>
			<td><textarea rows="10" cols="100"><?php echo htmlspecialchars($invoiceService->getLastRequest());?></textarea>
			</td>
		</tr>
		<tr>
			<td>Response:</td>
		</tr>
		<tr>
			<td><textarea rows="10" cols="100"><?php echo htmlspecialchars($invoiceService->getLastResponse());?></textarea>
			</td>
		</tr>
	</table>
	<?php }?>
	<br>
</body>
</html>

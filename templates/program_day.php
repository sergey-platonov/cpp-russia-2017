<div class="cpp-b_program-day">
	<div class="cpp-r_wrap">
		<div class="date">
			<?php echo $day ?>
		</div>
		<!-- Prorgam table -->
		<table>
			<tbody>
				<tr>
					<th></th>
					<?php 
					foreach ($tracks as $track) {
						echo "<th>".$track."</th>";
					}
					?>
				</tr>
				<?php				
				foreach ($timeArr as $time) {
					$classSet = false;
					$output = "";
					$firstTr = "<tr";
					$timeCol = ">\n<td>".$time."</td>\n";
					$rowsText = "";
					foreach ($schedule[$day][$time] as $data) {
						$colspan = property_exists($data->talk, 'colspan') ? $data->talk->colspan : 1;
						if ($colspan > 1)
							$rowsText .= '<td colspan="'.$data->talk->colspan.'">';
						else
							$rowsText .= '<td>';
						if (!$data->talk->system)
							$rowsText .= '<span class="speaker">'.$data->speaker->name.'</span>'.'<a class="talk-link" href="/talks/'.$data->speaker->dirname.'">'.$data->talk->title.'</a></td>'."\n";
						else
							$rowsText .= $data->talk->text."</td>\n";
						if (property_exists($data->talk, "class") && !$classSet) {
							$firstTr .= ' class = "'.$data->talk->class.'"';
							$classSet = true;
						}
					}
					$closeTr = "</tr>\n";
					echo $firstTr.$timeCol.$rowsText.$closeTr;
				}
				?>
			</tbody>
		</table>
		<!-- /Prorgam table -->
	</div>
</div> 

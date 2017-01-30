<?php
/* Copyright 2012 BrewPi/Elco Jacobs.
 * This file is part of BrewPi.

 * BrewPi is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * BrewPi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with BrewPi.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<ul>
	<div id="control-bar-text">
		<div id="set-mode-text">Temperature mode</div>
		<div id="status-text">Status:</div>
	</div>
	<div id="status-message" class="ui-state-error ui-corner-all">
		<p>
			<span id="icon" class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
			<span id="message">Not loaded</span>
		</p>
	</div>
	<li><a href="#profile-control"><span>Beer profile</span></a></li>
	<li><a href="#beer-constant-control"><span>Beer constant</span></a></li>
	<li><a href="#fridge-constant-control"><span>Fridge constant</span></a></li>
</ul>	
<div id="profile-control">
	<div class="section group">
		<div class="col span_9_of_12">
			<div id="profileChartDiv"></div>
		</div>
		<div class="col span_3_of_12">
			<div id="profileNameDate">
				<div><span class="profileTableLabel">Profile Name:</span><span class="profileTableValue" id="profileTableName"></span></div>
				<div><span class="profileTableLabel">Start Date:</span><span class="profileTableValue" id="profileTableStartDate"></span></div>
			</div>
			<div id="profileTableDiv"></div>
		</div>
	</div>
</div>
<div id="beer-constant-control">
	<div id="beer-temp" class="temp-display">
		<div class="temp-container"></div>
		<input class='temperature' /><span class='degree'>&deg;<?php echo $tempFormat ?></span>
	</div>
</div>
<div id="fridge-constant-control">
	<div id="fridge-temp" class="temp-display">
		<div class="temp-container"></div>
		<input class='temperature' /><span class='degree'>&deg;<?php echo $tempFormat ?></span>
	</div>
</div>

<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Bienvenido');
?>
<div class="container">
    <div class="row">
	    <h4 class="center-align blue-text" id="greeting"></h4>
    </div>
</div>
<div class="row">
    <div class="col s12 m6">
        <canvas id="chart"></canvas>
    </div>
</div>

<div class="row">
    <div class="col s12 m6">
        <canvas id="dchart"></canvas>
    </div>
</div>

<?php
Dashboard::footerTemplate('main.js');
?>

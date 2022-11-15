<?php
defined('_JEXEC') or die('Restricted access');

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SistemPendaftaranSyarikat";
$conn = new mysqli($servername, $username, $password, $dbname);

require_once('mod_senarai_'.$params->get('senarai').'.php');
?>

<link href="modules/mod_senarai/css_dtable_uikit.css" rel="stylesheet" />
<script src="modules/mod_senarai/js_dtable_jquery.js"></script>
<script src="modules/mod_senarai/js_dtable_jquerytable.js"></script>
<script src="modules/mod_senarai/js_dtable_uikit.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  
  var ai = $('#dtables').DataTable( {
  "iDisplayLength": 25,
  "columnDefs": [ {
      "searchable": false,
      "orderable": false,
      "targets": 0
    } ]
  } );
  
  var aiall = $('#dtablesall').DataTable( {
  "iDisplayLength": 100,
  "columnDefs": [ {
      "searchable": false,
      "orderable": false,
      "targets": 0
    } ]
  } );

ai.on( 'order.dt search.dt', function () {
    ai.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
    } );
} ).draw();

aiall.on( 'order.dt search.dt', function () {
    aiall.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
    } );
} ).draw();

});

</script>
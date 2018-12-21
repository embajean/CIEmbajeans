<div class="data-tables datatable-dark">
	<table id="table" class="text-center">
		<thead class="text-capitalize">
    		<tr>
        		<th>No</th>
        		<th>Gambar</th>
        		<th>Head - 1</th>
        		<th>Head - 2</th>
        		<th>Head - 3</th>
        		<th>Status</th>
    		</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
</div>
<script type="text/javascript">
	var table;
 
	$(document).ready(function() {
	 
	    //datatables
	    table = $('#table').DataTable({ 
	 
	        "processing": true, //Feature control the processing indicator.
	        "serverSide": true, //Feature control DataTables' server-side processing mode.
	        "order": [], //Initial no order.
	 
	        // Load data for the table's content from an Ajax source
	        "ajax": {
	            "url": "<?php echo site_url('Slider/loadDataSlider')?>",
	            "type": "POST"
	        },
	 
	        //Set column definition initialisation properties.
	        "columnDefs": [
	        { 
	            "targets": [ 0 ], //first column / numbering column
	            "orderable": false, //set not orderable
	        },
	        ],
	 
	    });
	 
	});
</script>
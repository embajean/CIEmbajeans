        <footer>
            <div class="footer-area">
                <p>© Copyright 2018 Template by <a href="#">Somnium</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/scripts.js"></script>
</body>

</html>

<script type="text/javascript">

     var PreviewImage1 = function(event) {
        var output = document.getElementById('uploadPreview1');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

     var PreviewImageEdit = function(event) {
        var output = document.getElementById('uploadPreviewEdit');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       function konfirmasi(){

        tanya = confirm('Yakin hapus data ini ?');
        if(tanya == true) return true;
        else return false;

    }

    var table;
    $(document).ready(function() {

        //datatables
        table = $('#table').DataTable({ 
     
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
     
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Slider/datatable_slider')?>",
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


        //end datatables

        //slider
        $("#frm-tambahslider").hide();

        $("#modalEditslider").on('show.bs.modal', function(e){
            var rowid = $(e.relatedTarget).data('id');
            //get data
            $.ajax({
                type : "POST",
                url : "<?php echo site_url('Slider/Get_slider');?>",
                data : 'rowid='+rowid,
                success : function(data){
                    $('.fetched-data').html(data);
                }
            })
        });


        table = $('#tableInvoice').DataTable({ 
     
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
     
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Invoice/data_tableInvoice')?>",
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


        //end datatables

        //slider
        $("#frm-tambahslider").hide();

        $("#btn-slidertambah").click(function() {
            $("#frm-tambahslider").toggle('slow');
        });

    });
</script>
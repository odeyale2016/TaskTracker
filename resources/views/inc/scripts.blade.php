<script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>
          <!-- Required datatable js -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>

        <!-- Key Tables -->
        <script src="{{ asset('plugins/datatables/dataTables.keyTable.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

        <!-- Selection table -->
        <script src="{{ asset('plugins/datatables/dataTables.select.min.js') }}"></script>

        <!-- Counter Up  -->
        <script src="{{ asset('plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- circliful Chart -->
        <script src="{{ asset('plugins/jquery-circliful/js/jquery.circliful.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- skycons -->
        <script src="{{ asset('plugins/skyicons/skycons.min.js') }}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

        <!-- dropzone js file upload  -->
         <script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>
         
        <!-- Custom main Js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>
        
        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

<script type="text/javascript">

   let bar = document.getElementById('pb');
   let stat = document.getElementById('stat');


    console.log(bar.className)

    if (bar.style.width <= 45+'px') {
    bar.className = "progress-bar progress-bar-striped bg-danger progress-bar-animated";
    }else if(bar.style.width <= 65+'px'){
    bar.className = "progress-bar progress-bar-striped bg-info progress-bar-animated";
    }else if(bar.style.width >= 70+'px'){
    bar.className = "progress-bar progress-bar-striped bg-success progress-bar-animated";
    }
    if (stat.textContent == 'Complete') {

        stat.className = 'badge badge-success'
    }else if(stat.textContent == 'Pending') {
        stat.className = 'badge badge-warning'
        
    }else if(stat.textContent == 'Not Treated') {

        stat.className = 'badge badge-danger'
    }

 </script>  
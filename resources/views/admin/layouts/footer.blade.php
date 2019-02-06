<!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  {{-- <script src="{{asset('/admin/lib/jquery/jquery.min.js') }}"></script> --}}

  {{-- <script src="{{asset('/admin/lib/bootstrap/js/bootstrap.min.js') }}"></script> --}}
  <script class="include" type="text/javascript" src="{{asset('/admin/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{asset('/admin/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{asset('/admin/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{asset('/admin/lib/jquery.sparkline.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{asset('/admin/lib/common-scripts.js') }}"></script>
  <script type="text/javascript" src="{{asset('/admin/lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{asset('/admin/lib/gritter-conf.js') }}"></script>
  <!--script for this page-->
  <script src="{{asset('/admin/lib/sparkline-chart.js') }}"></script>
  <script src="{{asset('/admin/lib/zabuto_calendar.js') }}"></script>
  <script src="{{asset('/js/me.js') }}"></script>


{{-- Admin LTE editors Start --}}
  <!-- jQuery 3 -->
{{-- <script src="{{ asset('/admin/lte/bower_components/jquery/dist/jquery.min.js') }}"></script> --}}
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/lte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/lte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/lte/dist/js/demo.js')}}"></script>
<!-- CK Editor -->
<script src="{{asset('admin/lte/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('admin/lte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


  <script type="text/javascript">


    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>


  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  });

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
</script>
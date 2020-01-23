     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
         <div class="container">
             <div class="row">

                 <div class="col-md-5 col-sm-12">
                     <div class="footer-thumb footer-info">
                         <h2>Aam Official</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                 </div>

                 <div class="col-md-5 col-sm-6">
                     <div class="footer-thumb">
                         <h2>Alamat</h2>
                         <p>123 Grand Rama IX, Krung Thep Maha Nakhon 10400</p>
                     </div>
                 </div>

                 <div class="col-md-12 col-sm-12">
                     <div class="footer-bottom">
                         <div class="col-md-6 col-sm-5">
                             <div class="copyright-text">
                                 <p>Copyright &copy; 2020 Aam Official</p>
                             </div>
                         </div>
                         <div class="col-md-6 col-sm-7">
                             <div class="phone-contact">
                                 <p>No. telp <span>(+64) 8954776688</span></p>
                             </div>
                             <ul class="social-icon">
                                 <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                 <li><a href="#" class="fa fa-twitter"></a></li>
                                 <li><a href="#" class="fa fa-instagram"></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </footer>
     <!-- SCRIPTS -->
     <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
     <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
     <script src="<?= base_url(); ?>assets/js/jquery.stellar.min.js"></script>
     <script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
     <script src="<?= base_url(); ?>assets/js/smoothscroll.js"></script>
     <script src="<?= base_url(); ?>assets/js/custom.js"></script>
     <script src="<?= base_url(); ?>assets/js/script.js"></script>
     <script>
         var calendar = $('#calendar').fullCalendar({
             editable: false,
             header: {
                 left: 'prev,next today',
                 center: 'title',
                 right: 'month,agendaWeek,agendaDay'
             },
             events: "http://localhost/aam-app/jadwal/load",
             selectable: true,
             selectHelper: true,
             select: function(start, end, allDay) {
                 <?php if ($this->session->userdata('role_id') == 2) : ?>
                     $('#modal-form').modal('show');
                     var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                     var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                     $('.tgl_mulai').val(start);
                     $('.tgl_akhir').val(end);

                     $.ajax({
                         url: "http://localhost/aam-app/jadwal/insert",
                         type: "POST",
                         data: {
                             start: start,
                             end: end
                         },
                         success: function() {
                             calendar.fullCalendar('refetchEvents');
                         }
                     });
                 <?php else : ?>
                     $('#modal-login').modal('show');
                 <?php endif; ?>

             },
             eventClick: function(event) {
                 $('#pesan').html(`<div class="alert alert-danger alert-dismissible show" role="alert">
			Jadwal <strong>sudah ada</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>`);
             }
         });

         <?php if ($this->session->flashdata('message')) : ?>
             <?php if ($this->session->flashdata('login')) : ?>
                 $('#sign_up').removeClass('active');
                 $('#sign_in').addClass('active');
             <?php endif; ?>
             $('#modal-login').modal('show');
         <?php endif; ?>
     </script>

     </body>

     </html>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from theembazaar.com/demo/themesfolios/intellir-mobile/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 06:29:44 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Kinerja</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/logo1.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/ionicons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/weather-icons.min.css" rel="stylesheet">
	<!--Morris Chart -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/js/index/morris-chart/morris.css">
	<link href="<?php echo base_url()?>assets/css/fullcalendar.css" rel='stylesheet' />
	<link href="<?php echo base_url()?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119595512-1');
</script>
<style type="text/css">
	.act-btn{
            background:green;
            display: block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: white;
            font-size: 30px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            text-decoration: none;
            transition: ease all 0.3s;
            position: fixed;
            right: 30px;
            bottom:30px;
        }
	.act-btn:hover{background: blue}
</style>

	</head>

<body>
	<div id="loader_wrpper">
		<div class="loader_style"></div>
	</div>

	<div class="wrapper">
		<!-- header -->
		<?php $this->load->view('layout/header.php');?>
		<!-- header_End -->
		<!-- Content_right -->
		<div class="container_full">
		<?php $this->load->view('layout/sidebar.php');?>
			<div class="content_wrapper">
				<?php $this->load->view($content);?>
			</div>
		</div>
		<!-- Content_right_End -->
		<!-- Footer -->
		<footer class="footer ptb-20">
			<div class="row">
				<?php $this->load->view('layout/footer.php');?>
			</div>
		</footer>
		<!-- Footer_End -->
	</div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

	<!--Morris Chart-->
	<script src="<?php echo base_url()?>assets/js/index/morris-chart/morris.js"></script>
	<script src="<?php echo base_url()?>assets/js/index/morris-chart/raphael-min.js"></script>
	<!--morris chart initialization-->
	<script src="<?php echo base_url()?>assets/js/index/morris-chart/morris-init.js"></script>
	<!--chartjs Total Profit,New Orders,Yearly Revineue,New Users-->
	<script src="<?php echo base_url()?>assets/js/Chart.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/chartjs-init.js"></script>
	<script src="<?php echo base_url()?>assets/js/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/fullcalendar.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap4.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js" type="text/javascript"></script>
	<script>
        $(document).ready(function () {
            $('#bs4-table').DataTable();
        });
    </script>
    <script type="text/javascript">
		$('#calendar').fullCalendar({
		  header: {
		    left: 'prev,next today',
		    center: 'addEventButton',
		    right: 'month,agendaWeek,agendaDay,listWeek'
		  },
		  defaultDate: '2018-11-16',
		  navLinks: true,
		  editable: true,
		  eventLimit: true,
		  events: [{
		      title: 'Simple static event',
		      start: '2018-11-16',
		      description: 'Super cool event'
		    },

		  ],
		  customButtons: {
		    addEventButton: {
		      text: 'Add new event',
		      click: function () {
		        var dateStr = prompt('Enter date in YYYY-MM-DD format');
		        var date = moment(dateStr);

		        if (date.isValid()) {
		          $('#calendar').fullCalendar('renderEvent', {
		            title: 'Dynamic event',
		            start: date,
		            allDay: true
		          });
		        } else {
		          alert('Invalid Date');
		        }

		      }
		    }
		  },
		  dayClick: function (date, jsEvent, view) {
		    var date = moment(date);

		    if (date.isValid()) {
		      $('#calendar').fullCalendar('renderEvent', {
		        title: 'Dynamic event from date click',
		        start: date,
		        allDay: true
		      });
		    } else {
		      alert('Invalid');
		    }
		  },
		});
    </script>
    

</body>


<!-- Mirrored from theembazaar.com/demo/themesfolios/intellir-mobile/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 06:30:11 GMT -->
</html>

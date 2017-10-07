        <script src="<?php echo $_ind; ?>js/jquery.min.js"></script>
        <script src="<?php echo $_ind; ?>js/tether.min.js"></script>
        <script src="<?php echo $_ind; ?>js/bootstrap.min.js"></script>

        <?php if (isset($orders)): ?>
        <script src="<?php echo $_ind; ?>js/jquery-ui.min.js"></script>
        <script src="<?php echo $_ind; ?>js/moment.min.js"></script>
        <script src="<?php echo $_ind; ?>js/fullcalendar.min.js"></script>
        <script>
        var orders = [];
        var ranges = [];
        <?php

        $orders = $db->prepare('SELECT * FROM orders');
        $orders->execute();
        while ($_orders = $orders->fetch()) {

            $begin = new DateTime( $_orders['startdate'] );
            $end = new DateTime( $_orders['enddate'] );
            $end = $end->modify( '+1 day' );

            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($begin, $interval ,$end);

            foreach($daterange as $date){
                $_y = $date->format("Y");
                $_m = $date->format("m");
                $_d = $date->format("d");
                $_D = $_y . '-' . $_m . '-' . $_d;
                ?>
                var cdate = <?php echo $_y; ?> + '-' + <?php echo $_m; ?> + '-' + <?php echo $_d; ?>;
                orders.push(cdate);
        <?php    }
        }



        ?>
        var _o = [];
        for (var i = 0; i < orders.length; i++) {
            var o = orders[i].split('-');

            for (var j = 0; j < o.length; j++) {
                if( o[j].length < 2) o[j] = '0' + o[j];
            }
            _o.push(o.join('-'));
        }

        orders = _o;
        console.log(orders);
        // function onlyWeekends(date) {
        //   var day = date.getDay();
        //   return [(day == 0 || day == 6), ''];
        // }
        //
        // $('.bookingdate').datepicker({dateFormat: 'dd-mm-yy', ..., beforeShowDay: onlyWeekends});

            $('.sd').datepicker({
                minDate: 0,
                firstDay: 1,
                dateFormat: "yy-mm-dd",
                beforeShowDay: function(date){
                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                    return [ orders.indexOf(string) == -1 ]
                }
            });

            var order = {title: null, opt: null, sdate: null, edate: null, uid: null};
            var opt = {
                navLinks: true, // can click day/week names to navigate views
    			businessHours: true, // display business hours
    			// editable: true,
                eventLimit: true,
                firstDay : 1,
                selectable: true,
                defaultTimedEventDuration: '72:00:00',
                loading: function(isLoading){
                    if (isLoading) {
                        console.log('load');
                    }
                },
                events:[
                    {
                        title: 'Conference',
    					start: '2017-09-18T00:00:00+00:00',
                        className: 'ordered'
                    },
                    {
                        title: 'Mariage',
                        start: '2017-09-22T00:00:00+00:00',
                        className: 'ordered'
                    },
    				{
    					title: 'Party',
    					start: '2017-09-07T00:00:00+00:00',
                        className: 'ordered'
    				}
                ],
                dayClick : function(date){

                    // $('#orderModal').modal('show');
                    // var _d = $.fullCalendar.moment(date._d).format();
                    // var sdate = new Date(_d);
                    // var edate = new Date(_d);
                    // edate.setDate(edate.getDate() + 4);
                    // console.log($.fullCalendar);
                    // $.fullCalendar( 'select', sdate, edate );
                    // console.log('ok');
                    // $('.modal-form').submit(function(event){
                    //     var name = $(this).find('.name').val().trim();
                    //     var _opt = $(this).find('.opt').val().trim();
                    //     var _d = $.fullCalendar.moment(date._d).format();
                    //     var sdate = new Date(_d);
                    //     var edate = new Date(_d);
                    //     edate.setDate(edate.getDate() + parseInt(opt));
                    //     if(name.length > 0 && (opt == 4 || opt == 5))
                    //     {
                    //         order = {
                    //             title: name,
                    //             opt: _opt,
                    //             sdate: sdate,
                    //             edate: edate,
                    //             uid: <?php echo $_SESSION['id']; ?>
                    //         };
                    //     }
                    //     var _sd = $.fullCalendar.moment(sdate).format();
                    //     var _ed = $.fullCalendar.moment(edate).format();
                    //
                    //     var newOrder = {
                    //
                    //         title: name,
                    //         start: '2017-09-10',
                    //         end: '2017-09-15',
                    //         rendering: 'background',
                    //         color: '#F15757'
                    //
                    //     }
                    //     console.log(edate, sdate);
                    //     opt.events.push(newOrder);
                    //     $('#calendar').fullCalendar('updateEvents', opt.events.events);
                    //     return false;
                    // });
                }
            };
            $('#calendar').fullCalendar(opt);


        </script>
        <?php endif; ?>
    </body>
</html>

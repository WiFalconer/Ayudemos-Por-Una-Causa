<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->

<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="-->
<!--        crossorigin="anonymous"></script>-->
<!--    <link rel='stylesheet' href='/assets/css/fullcalendar.css' />-->
<!--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css"-->
<!--        media="print">-->
<!--    <script src='/assets/js/moment.js'></script>-->
<!--    <script src='/assets/js/fullcalendar.js'></script>-->
<!--    <title>Calendar</title>-->
<!--    <script>-->
<!--        $(document).ready(function () {-->

<!--            $('#calendar').fullCalendar({-->
<!--                header: {-->
<!--                    left: 'prev,next today',-->
<!--                    center: 'title',-->
<!--                    right: 'addEventButton'-->
<!--                },-->

<!--                customButtons: {-->
<!--                    addEventButton: {-->
<!--                        text: 'Add Event to Calendar',-->
<!--                        click: function () {-->
<!--                            var dateStr = prompt('Enter a date in YYYY-MM-DD format');-->
<!--                            var date = moment(dateStr);-->

<!--                            if (date.isValid()) {-->
<!--                                $('#calendar').fullCalendar('renderEvent', {-->
<!--                                    title: 'Time Donation',-->
<!--                                    start: date,-->
<!--                                    allDay: true-->
<!--                                });-->
<!--                                alert('Great! Event Added');-->
<!--                            } else {-->
<!--                                alert('Invalid date.');-->
<!--                            }-->
<!--                        }-->
<!--                    }-->
<!--                },-->
                navLinks: true, // can click day/week names to navigate views
<!--                selectable: true,-->
<!--                selectHelper: true,-->
<!--                select: function (start, end) {-->
<!--                    var title = prompt('Event Title:');-->
<!--                    var eventData;-->
<!--                    if (title) {-->
<!--                        eventData = {-->
<!--                            title: title,-->
<!--                            start: start,-->
<!--                            end: end-->
<!--                        };-->
                        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
<!--                    }-->
<!--                    $('#calendar').fullCalendar('unselect');-->
<!--                },-->
<!--                editable: true,-->
                eventLimit: true, // allow "more" link when too many events
<!--                events: []-->
<!--            });-->

<!--        });-->
<!--    </script>-->
<!--    <style>-->
<!--        body {-->
<!--            margin: 40px 10px;-->
<!--            padding: 0;-->
<!--            font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;-->
<!--            font-size: 14px;-->
<!--        }-->

<!--        #calendar {-->
<!--            max-width: 900px;-->
<!--            margin: 0 auto;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->

<!--<body>-->
    <div id="calendar"></div>
<!--</body>-->

<!--</html>-->
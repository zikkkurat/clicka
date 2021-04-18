<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="/favicon.ico">

    <link href='/js/fullcalendar/lib/main.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center">



<div id='calendar-wrap' style="width:750px;float:left">
    <div id='loading'>loading...</div>
    <div id='calendar'></div>


<ul class="list">
    <li><a href="#"><img src="/img/list/l1.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l22.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l3.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l4.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l5.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l6.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l7.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l8.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l9.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l10.svg" alt=""></a></li>
    <li><a href="#"><img src="/img/list/l11.svg" alt=""></a></li>
</ul>
</div>

    <link href='/js/fullcalendar/lib/main.min.css' rel='stylesheet' />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src='/js/fullcalendar/lib/main.min.js'></script>
<script src="/js/fullcalendar/lib/locales/ru.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // var containerEl = document.getElementById('external-events-list');
        // new FullCalendar.Draggable(containerEl, {
        //     itemSelector: '.fc-event',
        //     eventData: function(eventEl) {
        //         return {
        //             title: eventEl.innerText.trim()
        //         }
        //     }
        // });

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'ru',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            // initialDate: '2020-06-12',
            editable: true,
            //droppable: true, // this allows things to be dropped onto the calendar
            //drop: function(arg) {
                // is the "remove after drop" checkbox checked?
            //    if (document.getElementById('drop-remove').checked) {
                    // if so, remove the element from the "Draggable Events" list
            //        arg.draggedEl.parentNode.removeChild(arg.draggedEl);
            //    }
            //},
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.addEvent({
                        title: title,
                        start: arg.start,
                        end: arg.end,
                        allDay: arg.allDay
                    })
                }
                calendar.unselect()
            },
            eventClick: function(arg) {
                // if (confirm('Are you sure you want to delete this event?')) {
                //     arg.event.remove()
                // }
                window.open('https://bbb.alfamart24.ru', '_blank').focus();
            },
            dayMaxEvents: true, // allow "more" link when too many events
            events: {
                url: '/js/fullcalendar/examples/php/get-events.php',
                failure: function() {
                    document.getElementById('script-warning').style.display = 'block'
                }
            },
            loading: function(bool) {
                document.getElementById('loading').style.display =
                    bool ? 'block' : 'none';
            }
        });

        calendar.render();
    });
</script>
<style>
    body {
        background: none;
    }
    .fc .fc-view-harness {
        background: #fff;
    }
    #script-warning {
        display: none;
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        text-align: center;
        font-weight: bold;
        font-size: 12px;
        color: red;
    }

    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    #calendar1 {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 10px;
    }

    #external-events {
        position: absolute;
        left: 20px;
        top: 20px;
        width: 150px;
        padding: 0 10px;
        border: 1px solid #ccc;
        background: #eee;
        text-align: left;
    }

    #external-events h4 {
        font-size: 16px;
        margin-top: 0;
        padding-top: 1em;
    }

    #external-events .fc-event {
        margin: 3px 0;
        cursor: move;
    }

    #external-events p {
        margin: 1.5em 0;
        font-size: 11px;
        color: #666;
    }

    #external-events p input {
        margin: 0;
        vertical-align: middle;
    }

    #calendar-wrap { 
        /* margin-left: 200px; */
        position: relative;
    }
</style>
</body>
</html>
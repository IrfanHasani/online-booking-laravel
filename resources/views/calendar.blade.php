<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />


<div id='calendar'></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>

<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            header: { center: 'month,agendaWeek,list' },
            events : [
                    @foreach($appointments as $appointment)
                {
                    title : '{{ $appointment->user->first_name. ' '. $appointment->user->last_name }}',
                    start : '{{ $appointment->start_time }}',
                    end : '{{ $appointment->finish_time }}'
                },
                @endforeach
            ]
        })
    });
</script>
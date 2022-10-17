<x-app-layout>

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
   

    <div class="container" style="padding: 150px; overflow-x: scroll;">
        <div class="p-5" id='calendar'></div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
    


<script type="text/javascript">
    window.CSRF_TOKEN = '{{ csrf_token() }}';
</script>

<script>

    document.addEventListener('DOMContentLoaded', e => {
        let dataPrograms = fetch('../programs/data' , {
            headers: {"X-CSRF-TOKEN": window.CSRF_TOKEN,},
            type: "GET",})
            .then((response) => response.json())
            .then((data) => {
                console.log(data)
                let value = []
                window.setTimeout(() => {
                    data.forEach(el => {
                      value.push(
                        {title: `${el.name}`,
                        start: el.start_date + ' ' + el.start_time,
                        end: el.finish_date + ' ' + el.finish_time
                        })
                    });
                    
                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                    locale:"es",
                    headerToolbar:{
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth, timeGridWeek'
                    } ,
                    timeZone: "local",
                    events: value,
                        
                    });
                    calendar.render();
                }, 50);
        });
    
    })

  </script>

</x-app-layout>
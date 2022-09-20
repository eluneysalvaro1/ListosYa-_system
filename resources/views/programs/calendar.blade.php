<x-app-layout>

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    {{$programs}}
    <div id="info" class="hidden">
        {{$programs}}
    </div>

    <div class="container sm" style="padding: 150px;">
        <div class="p-7" id='calendar'></div>
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
                let value
                window.setTimeout(() => {
                    data.forEach(el => {
                      value += title: `${el.name}`,
                            start: el.start_date + "T" + el.start_time,
                            end: el.finish_date + "T" + el.finish_time
                    });
                    console.log(value)
                }, 50);

                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale:"es",
                    headerToolbar:{
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth, timeGridWeek'
                    } ,
                    events: value,
                    height: 550,
                
            });
                calendar.render();
        });
    
    })

  </script>

</x-app-layout>
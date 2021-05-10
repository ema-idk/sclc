document.addEventListener('DOMContentLoaded', function() {
    let formulario = document.querySelector("form");
    var calendarEl = document.getElementById('schedule');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        locale : "es",
        headerToolbar: {
            left: 'prev,next,today',
            center: 'title',
            right: 'timeGridWeek, listWeek'
        },
        events: 'http://127.0.0.1:8000/citas/mostrar',
        dateClick:function (info){
            formulario.reset();
            formulario.start.value=info.dateStr;
            formulario.end.value=info.dateStr;
            $("#evento").modal("show");
        },
        eventClick:function (info) {
            var evento = info.event;
            console.log(evento);
            axios.post("http://127.0.0.1:8000/citas/consultar/" + info.event.id).then(
                (respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.servicios.value = respuesta.data.servicios;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;
                    $("#evento").modal("show");
                }
            ).catch(
                error => {
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
        }
    });
    calendar.render();
});

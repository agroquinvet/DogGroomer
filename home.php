<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoogGroomer</title>
    <link rel="stylesheet" href="styles.css">
    <!-- CSS only bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Calendario -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: "es",
                headerToolbar: {
                    rigth: 'prev, next, today',
                    center: 'title',
                    left: 'dayGridMonth, timeGridWeek, timeGridDay'
                },
                
                dateClick: function(info, view, jsEvent) {
                    alert('Día: ' + info.dateStr);
                    var modal = new bootstrap.Modal(document.getElementById('modalId'), {
                keyboard: false
            })
            
            modal.show();
                },
                eventSources:[{
                    events:[
                {
                    title:'Turno corte de pelo',
                    descripcion: 'cliente X',
                    start:'2022-10-28'
                },
                {
                    title:'Turno corte de pelo 2',
                    descripcion: 'cliente Y',
                    start:'2022-10-29',
                    end: '2022-10-30',
                    
                },
                {
                    title:'Turno corte de pelo 3, corte de uñas',
                    descripcion: 'cliente Z',
                    start:'2022-10-31T12:30:00',
                    allDay: false,
                    
                },
               
            ],
            color:"black",
            textColor:"yellow",

            }],
            eventClick: function(info){
            document.querySelector('#tituloEvento').innerHTML = info.event.title;            
            document.querySelector('#descripcionEvento').innerHTML = info.event.extendedProps.description;

          var model = new bootstrap.Modal(document.getElementById('modelId'), {
                keyboard: false
                });
          model.show();
        },
                
            
                selectable: true,

            });
       
        
          
            calendar.render();
            
        });
    </script>

</head>

<!-- Modal -->
<div class="modal" id="modalId" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="tituloEvento"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ture"> &times;</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="descripcionEvento"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sucess">Agregar</button>
                <button type="button" class="btn btn-sucess">Modificar</button>
                <button type="button" class="btn btn-danger">Borrar</button>
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<body id="body">
    <header>
        <div class="container-fluid">
            <!--navbar-->
            <nav class="navbar navbar-expand-md  ">
                <div id="nav" class="container-fluid ">
                    <a class="navbar-brand" href="home.php">
                        <img src="img/logofondoblancomaspeque-removebg-preview.png" alt="Bootstrap" width="100" height="35">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuNavegacion"><span class="navbar-toggler-icon"></span></button>
                    <div id="menuNavegacion" class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav ms-3">
                            <li class="nav-item"><a id="texNav" class="nav-link" href="clientes.php">Clientes</a></li>
                            <li class="nav-item"><a id="texNav" class="nav-link" href="mascotas.php">Mascotas</a></li>
                            <li class="nav-item"><a id="texNav" class="nav-link" href="turnos.php">Turnos</a></li>
                            <li class="nav-item"><a id="texNav" class="nav-link" href="perfil.php">Perfil</a></li>
                            <li class="nav-item"><a id="texNav" class="nav-link" href="index.php">logout</a></li>

                        </ul>

                    </div>

                </div>

            </nav>

        </div>
    </header>

    </hr>
    <main>
        <div class="container">
            <div class="col-md-10 offset-md-2">
                <div id='calendar'></div>
            </div>

        </div>


    </main>


    <!-- JavaScript Bundle with Popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>
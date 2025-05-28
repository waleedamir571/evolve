<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dynamic Calendar</title>
  <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f3f4f6;
    }

    #calendar {
      max-width: 1000px;
      margin: auto;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <h2 style="text-align:center;">📅 Dynamic Standup Calendar</h2>
  <div id="calendar"></div>

  <!-- FullCalendar JS -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const calendarEl = document.getElementById('calendar');

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        slotMinTime: '07:00:00',
        slotMaxTime: '18:00:00',
        nowIndicator: true,
        selectable: true,
        editable: true,
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [
          {
            title: 'Standup',
            start: '2023-03-18T09:00:00',
            end: '2023-03-18T11:00:00',
            color: '#6aa6c9'
          },
          {
            title: 'Standup',
            start: '2023-03-19T09:00:00',
            end: '2023-03-19T11:00:00',
            color: '#2f3e55'
          },
          {
            title: 'Standup',
            start: '2023-03-20T09:00:00',
            end: '2023-03-20T11:00:00',
            color: '#999'
          }
        ],
        dateClick: function(info) {
          const title = prompt('Enter event title:');
          if (title) {
            calendar.addEvent({
              title: title,
              start: info.date,
              allDay: info.allDay
            });
          }
        }
      });

      calendar.render();
    });
  </script>
</body>
</html>

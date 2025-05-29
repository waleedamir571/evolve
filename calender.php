<?php include 'header.php'; ?>

<style>
  
</style>



<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center flex-wrap row">
      <!-- Left Side -->
      <div class="col-auto">
        <h6 class="chats">My bookings</h6>
      </div>

      <!-- Right Side -->
      <div class="col-auto">
        <button class="btn-info12" data-bs-toggle="modal" data-bs-target="#basicModal2">test</button>
        <button type="button" class="btn  btn-info12" data-bs-toggle="modal" data-bs-target="#basicModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
            <path d="M6.5 12H18.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M12.5 18V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg> &nbsp; Add Schedule</button>
      </div>
    </div>


    <div class="col-md-12">
      <div class="card">
        <div class="col-md-12">
          <div class="card-body">
           <div id="calendar" class="app-fullcalendar"></div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>


<div class="modal fade" id="basicModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title myc">My Calendar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal">
        </button>
      </div>
      <div class="modal-body exe">Executive Coaching Session
        <br>
        <br>
        <p class="time">Wednesday, April 9 2:30 PM - 3:00 PM</p>
        <br>
        <button type="button" class=" btn-danger1 " data-bs-dismiss="modal">Join</button>
        <button type="button" class=" btn-primary1">Edit</button>
        <br>
        <br>
        <p class="meeting"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none">
            <path d="M14.99 17.5H16.5C19.52 17.5 22 15.03 22 12C22 8.98 19.53 6.5 16.5 6.5H14.99" stroke="#47B2B0"
              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9 6.5H7.5C4.47 6.5 2 8.97 2 12C2 15.02 4.47 17.5 7.5 17.5H9" stroke="#47B2B0" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8 12H16" stroke="#47B2B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg> meeting.evolvevocational/i/123-4321 &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none">
            <path
              d="M16 12.9V17.1C16 20.6 14.6 22 11.1 22H6.9C3.4 22 2 20.6 2 17.1V12.9C2 9.4 3.4 8 6.9 8H11.1C14.6 8 16 9.4 16 12.9Z"
              stroke="#47B2B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M22 6.9V11.1C22 14.6 20.6 16 17.1 16H16V12.9C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2H17.1C20.6 2 22 3.4 22 6.9Z"
              stroke="#47B2B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg></p>
        <br>
      </div>

      <div class="modal-footer">
        <div class="d-flex justify-content-between align-items-center flex-wrap row">
          <!-- Left Side -->
          <div class="col-auto">
            <div class="profile-card">
              <div class="profile-image">
                <img src="images/home/c1.png" alt="Julia Lee">
              </div>
              <div class="profile-info">
                <div class="name">Julia Lee</div>
                <div class="desc">Lorem Ipsum</div>
              </div>
            </div>
          </div>

          <!-- Right Side -->
          <div class="col-auto">
            <img src="images/home/Group-12.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="basicModal2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title myc">My Calendar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal">
        </button>
      </div>
      <div class="modal-body exe">Executive Coaching Session

        <div class="row">
          <div class="col-md-6">
            <div class="label">Time From</div>
            <div class="input-group">

              <input type="text" placeholder="Time From" value="10:00 PM">
            </div>
          </div>
          <div class="col-md-6">
            <div class="label">Time to</div>
            <div class="input-group">
              <input type="text" placeholder="Time To" value="12:00 PM">
            </div>
          </div>
        </div>



        <div class="label">Select Date</div>
        <div class="input-group">
          <input type="text" placeholder="Select Date" value="Wednesday, Jul 12 2025">
        </div>

        <div class="toggle-group">
          <label>Only Once</label>
          <label class="toggle-switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
        </div>

        <div class="repeating-label">🔁 Repeating</div>

        <div class="day-buttons">
          <button class="selected">Mon</button>
          <button>Tue</button>
          <button class="selected">Wed</button>
          <button>Thu</button>
          <button class="selected">Fri</button>
          <button>Sat</button>
          <button>Sun</button>
        </div>

        <div class="actions">
          <button class="add-btn">Add</button>
          <button class="discard-btn">Discard</button>
        </div>
      </div>


    </div>
  </div>
</div>


 <script>
    document.addEventListener('DOMContentLoaded', function () {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        slotMinTime: '08:00:00',
        slotMaxTime: '15:00:00',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'timeGridWeek'
        },
        events: [
          {
            title: 'Standup',
            start: '2025-03-17T09:00:00',
            end: '2025-03-17T11:00:00',
            extendedProps: {
              attendees: [
                'https://randomuser.me/api/portraits/men/1.jpg',
                'https://randomuser.me/api/portraits/women/2.jpg',
                'https://randomuser.me/api/portraits/men/3.jpg'
              ],
              moreCount: 2
            }
          }
        ],
        eventContent: function (arg) {
          const { attendees, moreCount } = arg.event.extendedProps;

          const container = document.createElement('div');
          container.className = 'custom-event';

          container.innerHTML = `
            <div class="video-icon">📹</div>
            <div class="title">${arg.event.title}</div>
            <div class="time">${arg.timeText}</div>
            <div class="avatars">
              ${attendees.map(url => `<img src="${url}" />`).join('')}
              <div class="more">+${moreCount} More</div>
            </div>
          `;

          return { domNodes: [container] };
        }
      });

      calendar.render();
    });
  </script>

<?php include 'footer.php'; ?>
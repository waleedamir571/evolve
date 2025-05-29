<?php include 'header.php'; ?>
<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->

<style>
    .header-left {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .nav-controls {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .nav-btn {
        background: white;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
    }

    .nav-btn:hover {
        background: #f3f4f6;
    }

    .current-date {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1f2937;
        margin: 0 1rem;
        min-width: 250px;
    }

    .date-indicators {
        display: flex;
        gap: 0.5rem;
    }

    .date-indicator {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .date-indicator:nth-child(1) {
        background: #64748b;
    }

    .date-indicator:nth-child(2) {
        background: #64748b;
    }

    .date-indicator:nth-child(3) {
        background: #1e293b;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .time-badge {
        background: #f97316;
        color: white;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .add-btn {
        background: #475569;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-size: 0.875rem;
        font-weight: 500;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: background 0.2s;
    }

    .add-btn:hover {
        background: #334155;
    }

    .calendar-grid {
        display: flex;
        background: #f9fafb;
    }

    .time-column {
        width: 64px;
        border-right: 1px solid #e5e7eb;
        background: #f9fafb;
    }

    .time-header {
        height: 48px;
        border-bottom: 1px solid #e5e7eb;
    }

    .time-slot {
        height: 64px;
        border-bottom: 1px solid #f3f4f6;
        display: flex;
        align-items: flex-start;
        padding: 0.25rem 0.5rem;
    }

    .time-text {
        font-size: 0.75rem;
        color: #6b7280;
        font-weight: 500;
    }

    .days-grid {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        background: white;
    }

    .day-column {
        border-right: 1px solid #e5e7eb;
        position: relative;
    }

    .day-column:last-child {
        border-right: none;
    }

    .day-header {
        height: 48px;
        border-bottom: 1px solid #e5e7eb;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: white;
    }

    .day-name {
        font-size: 0.75rem;
        font-weight: 500;
        color: #6b7280;
        text-transform: uppercase;
        margin-bottom: 2px;
    }

    .day-number {
        font-size: 1.125rem;
        font-weight: 600;
        color: #1f2937;
    }

    .day-content {
        position: relative;
        height: 640px;
    }

    .hour-slot {
        height: 64px;
        border-bottom: 1px solid #f3f4f6;
        position: relative;
    }

    .current-time-line {
        position: absolute;
        left: 0;
        right: 0;
        height: 2px;
        background: #3b82f6;
        z-index: 20;
        top: 160px;
    }

    .current-time-line::before {
        content: '';
        position: absolute;
        left: -4px;
        top: -3px;
        width: 8px;
        height: 8px;
        background: #3b82f6;
        border-radius: 50%;
    }

    .event {
        position: absolute;
        left: 4px;
        right: 4px;
        border-radius: 0px;
        padding: 8px;
        color: white;
        font-size: 0.75rem;
        z-index: 10;
        cursor: pointer;
        transition: all 0.2s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        opacity: 0.8;
        background: #578096 !important;
        width: 289px;
        height: 130px !important;

    }

    .event:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

   .event-title {
    font-weight: 600;
    margin-bottom: 2px;
    color: #FFF;
  
    font-size: 15.194px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    text-transform: capitalize;
}

   .event-time {
    /* opacity: 0.9; */
    margin-bottom: 6px;
    font-size: 0.675rem;
    color: #FFF;
    font-size: 12.155px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-transform: capitalize;
}
    .event-attendees {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .avatar-group {
    display: flex;
    margin-right: 8px;
    padding-top: 35px;
}

    .avatar {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: white;
        color: #374151;
        font-size: 0.625rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid white;
        margin-left: -4px;
    }

    .avatar:first-child {
        margin-left: 0;
    }

    .more-count {
        font-size: 0.625rem;
        opacity: 0.9;
    }

    /* Event colors */
    .event-blue {
        background: #3b82f6;
    }

    .event-slate {
        background: #0C213F !important;
    }

    .event-gray {
        background: #6b7280;
    }
</style>



<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap row">
            <!-- Left Side -->
            <div class="col-auto">
                <div class="header-left">
                    <div class="nav-controls">
                        <button class="nav-btn" onclick="navigateWeek(-1)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="15,18 9,12 15,6"></polyline>
                            </svg>
                        </button>
                        <div class="current-date" id="currentDate">Monday, 18 March</div>
                        <button class="nav-btn" onclick="navigateWeek(1)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>

                    <div class="date-indicators">
                        <div class="date-indicator">03</div>
                        <div class="date-indicator">03</div>
                        <div class="date-indicator">04</div>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-auto">
                <!-- <button class="btn-info12" data-bs-toggle="modal" data-bs-target="#basicModal2">test</button> -->
                <button type="button" class="btn  btn-info12" data-bs-toggle="modal" data-bs-target="#basicModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M6.5 12H18.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12.5 18V6" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> &nbsp; Add Schedule</button>
                <div class="header-left">



                </div>
            </div>
        </div>

        <br>
        <br>
        <div class="col-md-12">


            <!-- Calendar Grid -->
            <div class="calendar-grid">
                <!-- Time Column -->
                <div class="time-column">
                    <div class="time-header"></div>
                    <div class="time-slot"><span class="time-text">07:00</span></div>
                    <div class="time-slot"><span class="time-text">08:00</span></div>
                    <div class="time-slot"><span class="time-text">09:00</span></div>
                    <div class="time-slot"><span class="time-text">10:00</span></div>
                    <div class="time-slot"><span class="time-text">11:00</span></div>
                    <div class="time-slot"><span class="time-text">12:00</span></div>
                    <div class="time-slot"><span class="time-text">13:00</span></div>
                    <div class="time-slot"><span class="time-text">14:00</span></div>
                    <div class="time-slot"><span class="time-text">15:00</span></div>
                    <div class="time-slot"><span class="time-text">16:00</span></div>
                </div>

                <!-- Days Grid -->
                <div class="days-grid" id="daysGrid">
                    <!-- Days will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>

</div>
</div>


<!--**********************************
            Content body end
        ***********************************-->


<!--**********************************
            Footer start
        ***********************************-->
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
                        <path d="M14.99 17.5H16.5C19.52 17.5 22 15.03 22 12C22 8.98 19.53 6.5 16.5 6.5H14.99"
                            stroke="#47B2B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 6.5H7.5C4.47 6.5 2 8.97 2 12C2 15.02 4.47 17.5 7.5 17.5H9" stroke="#47B2B0"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 12H16" stroke="#47B2B0" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> meeting.evolvevocational/i/123-4321 &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M16 12.9V17.1C16 20.6 14.6 22 11.1 22H6.9C3.4 22 2 20.6 2 17.1V12.9C2 9.4 3.4 8 6.9 8H11.1C14.6 8 16 9.4 16 12.9Z"
                            stroke="#47B2B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M22 6.9V11.1C22 14.6 20.6 16 17.1 16H16V12.9C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2H17.1C20.6 2 22 3.4 22 6.9Z"
                            stroke="#47B2B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></p>
                
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
                <h5 class="modal-title myc">Add Schedule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body exe">

                <div class="row">
                    <div class="col-md-6">
                        <div class="label">Time From</div>
                        <div class="input-group">

                            <input type="time" placeholder="Time From" value="10:00 PM">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">Time to</div>
                        <div class="input-group">
                            <input type="time" placeholder="Time To" value="12:00 PM">
                        </div>
                    </div>
                </div>



                <div class="label">Select Date</div>
                <div class="input-group">
                    <input type="date" placeholder="Select Date" value="Wednesday, Jul 12 2025">
                </div>

                
                <br>
                <div class="toggle-group">
                    <label>Only Once</label>
                    <label class="toggle-switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="toggle-group">
                    <label>Select Available Days</label>
                       <div class="repeating-label">🔁 Repeating</div>
                </div>

            

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
        const weekDays = ['MON', 'TUE', 'WED', 'THU', 'FRI'];
        const weekDaysFull = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        const months = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        let currentWeekStart = new Date(2024, 2, 18); // March 18, 2024 (Monday)

        const events = [
            {
                id: 1,
                title: 'Standup',
                day: 0, // Monday
                startTime: 9,
                duration: 2,
                attendees: ['JD', 'JS', 'MJ'],
                color: 'event-blue'
            },
            {
                id: 2,
                title: 'Standup',
                day: 1, // Tuesday
                startTime: 9,
                duration: 2,
                attendees: ['JD', 'JS', 'SW'],
                color: 'event-slate'
            },
            {
                id: 3,
                title: 'Standup',
                day: 2, // Wednesday
                startTime: 9,
                duration: 2,
                attendees: ['JS', 'MJ', 'SW', 'TB'],
                color: 'event-blue'
            },
            {
                id: 4,
                title: 'Standup',
                day: 3, // Thursday
                startTime: 9,
                duration: 2,
                attendees: ['JD', 'MJ', 'TB'],
                color: 'event-slate'
            },
            {
                id: 5,
                title: 'Standup',
                day: 2, // Wednesday
                startTime: 13,
                duration: 1.5,
                attendees: ['JD', 'JS'],
                color: 'event-gray'
            }
        ];

        function updateCurrentTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            document.getElementById('currentTime').textContent = `${hours}:${minutes}`;
        }

        function getWeekDates(startDate) {
            const dates = [];
            for (let i = 0; i < 5; i++) {
                const date = new Date(startDate);
                date.setDate(startDate.getDate() + i);
                dates.push(date);
            }
            return dates;
        }

        function openEventModal(event) {
            document.getElementById('modalEventTitle').textContent = event.title;
            
            const endHour = event.startTime + event.duration;
            const endHourDisplay = Math.floor(endHour);
            const endMinutes = Math.round((endHour % 1) * 60);
            const endTime = `${endHourDisplay.toString().padStart(2, '0')}:${endMinutes.toString().padStart(2, '0')}`;
            
            document.getElementById('modalEventTime').textContent = 
                `${event.startTime.toString().padStart(2, '0')}:00 - ${endTime}`;
            
            document.getElementById('modalEventDay').textContent = weekDaysFull[event.day];
            
            const attendeesContainer = document.getElementById('modalEventAttendees');
            attendeesContainer.innerHTML = '';
            event.attendees.forEach(attendee => {
                const chip = document.createElement('span');
                chip.className = 'attendee-chip';
                chip.textContent = attendee;
                attendeesContainer.appendChild(chip);
            });
        }

        function renderCalendar() {
            const daysGrid = document.getElementById('daysGrid');
            const weekDates = getWeekDates(currentWeekStart);
            
            // Update header date
            const firstDate = weekDates[0];
            const dateText = `${firstDate.toLocaleDateString('en-US', { weekday: 'long', day: 'numeric', month: 'long' })}`;
            document.getElementById('currentDate').textContent = dateText;

            daysGrid.innerHTML = '';

            weekDates.forEach((date, dayIndex) => {
                const dayColumn = document.createElement('div');
                dayColumn.className = 'day-column';

                // Day header
                const dayHeader = document.createElement('div');
                dayHeader.className = 'day-header';
                dayHeader.innerHTML = `
                    <div class="day-name">${weekDays[dayIndex]}</div>
                    <div class="day-number">${date.getDate()}</div>
                `;

                // Day content with time slots
                const dayContent = document.createElement('div');
                dayContent.className = 'day-content';

                // Create hour slots
                for (let hour = 7; hour <= 16; hour++) {
                    const hourSlot = document.createElement('div');
                    hourSlot.className = 'hour-slot';
                    dayContent.appendChild(hourSlot);
                }

                // Add current time line (only for Wednesday)
                if (dayIndex === 2) {
                    const timeLine = document.createElement('div');
                    timeLine.className = 'current-time-line';
                    dayContent.appendChild(timeLine);
                }

                // Add events for this day
                const dayEvents = events.filter(event => event.day === dayIndex);
                dayEvents.forEach(event => {
                    const eventElement = document.createElement('div');
                    eventElement.className = `event ${event.color}`;
                    
                    // Add modal trigger attributes
                    eventElement.setAttribute('data-bs-toggle', 'modal');
                    eventElement.setAttribute('data-bs-target', '#basicModal2');
                    
                    const topPosition = (event.startTime - 7) * 64;
                    const height = Math.max(event.duration * 64, 60); // Minimum height of 60px
                    
                    eventElement.style.top = `${topPosition}px`;
                    eventElement.style.height = `${height}px`;

                    const attendeeAvatars = event.attendees.slice(0, 3).map(initial => 
                        `<div class="avatar">${initial}</div>`
                    ).join('');

                    const moreCount = event.attendees.length > 3 ? `<span class="more-count">+${event.attendees.length - 3} More</span>` : '';

                    const endHour = event.startTime + event.duration;
                    const endHourDisplay = Math.floor(endHour);
                    const endMinutes = Math.round((endHour % 1) * 60);
                    const endTime = `${endHourDisplay.toString().padStart(2, '0')}:${endMinutes.toString().padStart(2, '0')}`;

                    eventElement.innerHTML = `
                        <div class="event-title">${event.title}</div>
                        <div class="event-time">${event.startTime.toString().padStart(2, '0')}:00 - ${endTime}</div>
                        <div class="event-attendees">
                            <div class="avatar-group"><img src="images/home/3.png" alt=""></div>
                            ${moreCount}
                        </div>
                    `;

                    // Add click event listener to populate modal
                    eventElement.addEventListener('click', () => {
                        openEventModal(event);
                    });

                    dayContent.appendChild(eventElement);
                });

                dayColumn.appendChild(dayHeader);
                dayColumn.appendChild(dayContent);
                daysGrid.appendChild(dayColumn);
            });
        }

        function navigateWeek(direction) {
            currentWeekStart.setDate(currentWeekStart.getDate() + (direction * 7));
            renderCalendar();
        }

        // Initialize calendar
        renderCalendar();
        updateCurrentTime();

        // Update time every minute
        setInterval(updateCurrentTime, 60000);
    </script>

<?php include 'footer.php'; ?>

<script src="vendor/fullcalendar/js/fullcalendar.min.js"></script>
<script src="js/plugins-init/fullcalendar-init.js"></script>
<!-- <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script> -->
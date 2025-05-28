<?php include 'header.php'; ?>

<style>
  .contact-item {
    cursor: pointer;
    transition: background-color 0.2s ease;
  }

  .contact-item:hover {
    background-color: #f8f9fa !important;
  }

  .contact-item.selected {
    /* background-color: #e3f2fd !important; */
    /* border-left: 3px solid #2196f3; */
    border-radius: 14.669px;
    background: rgba(97, 94, 240, 0.06);
  }

  /* Online Indicator */
  .online-indicator {
    width: 12px;
    height: 12px;
    background-color: #28a745;
    border-radius: 50%;
    position: absolute;
    bottom: 2px;
    right: 2px;
    border: 2px solid white;
  }

  /* Message Bubble Styling */
  .message-bubble {
    max-width: 70%;
    padding: 10px 15px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    animation: fadeInUp 0.3s ease;
  }

  .message-own {
    background-color: #0d6efd;
    color: white;
    border-radius: 20px 20px 5px 20px;
    margin-left: auto;
  }

  .message-other {
    background-color: white;
    color: #212529;
    border-radius: 20px 20px 20px 5px;
    margin-right: auto;
  }

  .message-time {
    font-size: 0.75rem;
    text-align: right;
    display: block;
  }

  .message-time-own {
    color: rgba(255, 255, 255, 0.7);
  }

  .message-time-other {
    color: #6c757d;
  }

  /* Animation */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Scrollbar Styling */
  ::-webkit-scrollbar {
    width: 6px;
  }

  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  ::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 3px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #a8a8a8;
  }

  /* Tab Styling */
  .nav-tabs .nav-link {
    color: #495057;
    border: none;
    border-bottom: 2px solid transparent;
    border-radius: 0;
    padding: 8px 16px;
    font-size: 0.9rem;
  }

  .nav-tabs .nav-link:hover {
    border-color: transparent;
    border-bottom: 2px solid #dee2e6;
  }

  .nav-tabs .nav-link.active {
    color: #0d6efd;
    background-color: transparent;
    border-bottom: 2px solid #0d6efd;
    font-weight: 500;
  }

  /* Media Tab */
  .tab-content {
    overflow-y: auto;
  }

  #media .img-fluid,
  #files .list-group-item,
  #links .list-group-item {
    transition: transform 0.2s ease;
  }

  #media .img-fluid:hover,
  #files .list-group-item:hover,
  #links .list-group-item:hover {
    transform: translateY(-2px);
  }
</style>
<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid ">
    <div class="d-flex flex-wrap  row">
					<div class="col-xl-3 col-lg-4 mb-2">
						<h6 class="chats">Chats</h6>
						
					</div>
					<!-- <div class="col-xl-9 col-lg-8 d-flex flex-wrap">
						<div class="me-auto">
							<a href="#" class="btn btn-primary btn-rounded me-2 mb-2">ALL</a>
							<a href="#" class="btn btn-primary btn-rounded me-2 light mb-2">Pending</a>
							<a href="#" class="btn btn-primary btn-rounded me-2 light mb-2">On-Hold</a>
							<a href="#" class="btn btn-primary btn-rounded me-2 light mb-2">Candidate</a>
						</div>
						<div class="dropdown bootstrap-select form-control style-3 default-select mt-3 mt-sm-0 me-3"><select class="form-control style-3 default-select mt-3 mt-sm-0 me-3">
							<option>Newest</option>
							<option>Latest</option>
						</select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Newest"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Newest</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
					</div> -->
				</div>
    <div class="row h-100 g-0">
      <!-- Contacts Sidebar -->
      <div class="col-md-4 bg-white border-end">
        <div class="h-100 d-flex flex-column">
          <!-- Header -->


          <!-- Message Tabs -->
          <div class="p-2 border-bottom">
            <!-- <ul class="nav nav-tabs" id="messageTabs">
              <li class="nav-item">
                <a class="nav-link active" href="#all" data-bs-toggle="tab">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#personal" data-bs-toggle="tab">Personal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#groups" data-bs-toggle="tab">Groups</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#unread" data-bs-toggle="tab">Unread</a>
              </li>
            </ul> -->
          </div>

          <!-- Search -->
          <div class="p-3 border-bottom">
            <div class="position-relative">
              <input type="text" class="form-control rounded-pill ps-4" placeholder="Search conversations..."
                style="background-color: #f8f9fa;">
              <i class="fas fa-search-alt position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
            </div>
          </div>

          <!-- Contacts List -->
          <div class="tab-content flex-grow-1 overflow-auto">
            <!-- All Tab Content -->
            <div class="tab-pane fade show active" id="all">
              <!-- Contact Item 1 -->
              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face"
                      alt="Elmer Laverty" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="elmer">Elmer Laverty</h6>
                      <small class="sm-t">12m</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="sm-t">
                        Haha oh man 😂
                      </p>
                      <span class="badge bg-success rounded-pill ms-2">1 New Message</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Contact Item 2 (Selected) -->
              <div class="p-3 border-bottom contact-item selected">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=40&h=40&fit=crop&crop=face"
                      alt="Florencio Dorrance" class="rounded-circle" width="48" height="48"
                      style="object-fit: cover" />
                    <div class="online-indicator"></div>
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="elmer">Florencio Dorrance</h6>
                      <small class="sm-t">22m</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="sm-t">
                        woohoooo
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Contact Item 3 -->
              <div class="p-3 border-bottom contact-item ">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=40&h=40&fit=crop&crop=face"
                      alt="Florencio Dorrance" class="rounded-circle" width="48" height="48"
                      style="object-fit: cover" />
                    <div class="online-indicator"></div>
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="elmer">Florencio Dorrance</h6>
                      <small class="sm-t">22m</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="sm-t">
                        woohoooo
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Contact Item 4 -->
              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face"
                      alt="Titus Kitamura" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="elmer">Titus Kitamura</h6>
                      <small class="sm-t">5h</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="sm-t">
                        omg, This is
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Contact Item 5 -->
              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1528892952291-009c663ce843?w=40&h=40&fit=crop&crop=face"
                      alt="Geoffrey Mott" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="elmer">Geoffrey Mott</h6>
                      <small class="sm-t">2d</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="sm-t">
                        yo
                      </p>
                      <span class="badge bg-success rounded-pill ms-2">1 New Message</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Personal Tab Content -->
            <div class="tab-pane fade" id="personal">
              <!-- Personal contacts will go here -->
              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=40&h=40&fit=crop&crop=face"
                      alt="Florencio Dorrance" class="rounded-circle" width="48" height="48"
                      style="object-fit: cover" />
                    <div class="online-indicator"></div>
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="mb-1 fw-semibold">Florencio Dorrance</h6>
                      <small class="text-muted">22m</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 text-muted small text-truncate" style="max-width: 200px">
                        woohoooo
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b67fb36c?w=40&h=40&fit=crop&crop=face"
                      alt="Lavern Laboy" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="mb-1 fw-semibold">Lavern Laboy</h6>
                      <small class="text-muted">1h</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 text-muted small text-truncate" style="max-width: 200px">
                        Haha that's terrifying 😱
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Groups Tab Content -->
            <div class="tab-pane fade" id="groups">
              <!-- Group contacts will go here -->
              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1598257006626-48b0c252070d?w=40&h=40&fit=crop&crop=face"
                      alt="Team Alpha" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="mb-1 fw-semibold">Team Alpha</h6>
                      <small class="text-muted">30m</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 text-muted small text-truncate" style="max-width: 200px">
                        Meeting at 3pm today
                      </p>
                      <span class="badge bg-success rounded-pill ms-2">3</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?w=40&h=40&fit=crop&crop=face"
                      alt="Project X" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="mb-1 fw-semibold">Project X</h6>
                      <small class="text-muted">2h</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 text-muted small text-truncate" style="max-width: 200px">
                        Progress updates?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Unread Tab Content -->
            <div class="tab-pane fade" id="unread">
              <!-- Unread messages will go here -->
              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face"
                      alt="Elmer Laverty" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="mb-1 fw-semibold">Elmer Laverty</h6>
                      <small class="text-muted">12m</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 text-muted small text-truncate" style="max-width: 200px">
                        Haha oh man 😂
                      </p>
                      <span class="badge bg-success rounded-pill ms-2">1</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="p-3 border-bottom contact-item">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1528892952291-009c663ce843?w=40&h=40&fit=crop&crop=face"
                      alt="Geoffrey Mott" class="rounded-circle" width="48" height="48" style="object-fit: cover" />
                  </div>
                  <div class="ms-3 flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                      <h6 class="mb-1 fw-semibold">Geoffrey Mott</h6>
                      <small class="text-muted">2d</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 text-muted small text-truncate" style="max-width: 200px">
                        yo
                      </p>
                      <span class="badge bg-success rounded-pill ms-2">1</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Chat Area -->
      <div class="col-md-8 d-flex flex-column h-100">
        <!-- Chat Header -->
        <div class="p-3 bg-white border-bottom" id="chat-header">
          <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=40&h=40&fit=crop&crop=face"
                alt="Florencio Dorrance" class="rounded-circle me-3" width="40" height="40" style="object-fit: cover" />
              <div>
                <h6 class="elmer">Florencio Dorrance</h6>
                <small class="sm-t"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="11"
                    viewBox="0 0 10 11" fill="none">
                    <circle cx="5" cy="5.5" r="5" fill="#68D391" />
                  </svg> Online</small>
              </div>
            </div>
            <button class=" btn-outline-primary1 rounded-pill ">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M11.05 14.95L9.2 16.8C8.81 17.19 8.19 17.19 7.79 16.81C7.68 16.7 7.57 16.6 7.46 16.49C6.44877 15.472 5.5161 14.3789 4.67 13.22C3.85 12.08 3.19 10.94 2.71 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C10.83 13.32 10.94 13.42 11.04 13.52C11.44 13.91 11.45 14.55 11.05 14.95ZM21.97 18.33C21.9687 18.7074 21.8833 19.0798 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C19.39 21.62 19.38 21.63 19.37 21.63C18.78 21.87 18.14 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C10.36 19 9.97 18.71 9.6 18.4L12.87 15.13C13.15 15.34 13.4 15.5 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z"
                  fill="#0C213F" />
              </svg>
              Call
            </button>
          </div>
        </div>

        <!-- Message Tabs -->
        <!-- <div class="p-2 bg-white border-bottom">
          <ul class="nav nav-tabs" id="chatTabs">
            <li class="nav-item">
              <a class="nav-link active" href="#messages" data-bs-toggle="tab">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#media" data-bs-toggle="tab">Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#files" data-bs-toggle="tab">Files</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#links" data-bs-toggle="tab">Links</a>
            </li>
          </ul>
        </div> -->

        <!-- Tab Content -->
        <div class="tab-content flex-grow-1">
          <!-- Messages Tab -->
          <div class="tab-pane fade show active" id="messages">
            <div class="p-3 overflow-auto" style="background-color: #f8f9fa; height: 100%;">
              <!-- Message from other person -->
              <div class="d-flex">
                <div class="message-bubble message-other">
                  <p class="mb-1">omg, this is amazing</p>
                  <small class="message-time message-time-other">2:34 PM</small>
                </div>
              </div>

              <!-- Message from other person -->
              <div class="d-flex">
                <div class="message-bubble message-other">
                  <p class="mb-1">perfect!✅</p>
                  <small class="message-time message-time-other">2:35 PM</small>
                </div>
              </div>

              <!-- Message from other person -->
              <div class="d-flex">
                <div class="message-bubble message-other">
                  <p class="mb-1">Wow, this is really epic</p>
                  <small class="message-time message-time-other">2:36 PM</small>
                </div>
              </div>

              <!-- Message from other person -->
              <div class="d-flex">
                <div class="message-bubble message-other">
                  <p class="mb-1">Just ideas for next time</p>
                  <small class="message-time message-time-other">2:40 PM</small>
                </div>
              </div>

              <!-- Message from other person -->
              <div class="d-flex">
                <div class="message-bubble message-other">
                  <p class="mb-1">I'll be there in 2 mins ⏰</p>
                  <small class="message-time message-time-other">2:41 PM</small>
                </div>
              </div>

              <!-- Message from me -->
              <div class="d-flex">
                <div class="message-bubble message-own">
                  <p class="mb-1">How are you?</p>
                  <small class="message-time message-time-own">2:45 PM</small>
                </div>
              </div>

              <!-- Message from me -->
              <div class="d-flex">
                <div class="message-bubble message-own">
                  <p class="mb-1">woohoooo</p>
                  <small class="message-time message-time-own">2:46 PM</small>
                </div>
              </div>

              <!-- Message from me -->
              <div class="d-flex">
                <div class="message-bubble message-own">
                  <p class="mb-1">Haha oh man</p>
                  <small class="message-time message-time-own">2:47 PM</small>
                </div>
              </div>

              <!-- Message from me -->
              <div class="d-flex">
                <div class="message-bubble message-own">
                  <p class="mb-1">Haha that's terrifying 😱</p>
                  <small class="message-time message-time-own">2:48 PM</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Media Tab -->
          <div class="tab-pane fade" id="media">
            <div class="p-3" style="background-color: #f8f9fa; height: 100%;">
              <div class="row g-3">
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1616147057896-be7d544c62fd?w=100&h=100&fit=crop"
                    class="img-fluid rounded" alt="Media">
                </div>
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1555169062-013468b47731?w=100&h=100&fit=crop"
                    class="img-fluid rounded" alt="Media">
                </div>
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1618514118139-5a0ebb9b2c16?w=100&h=100&fit=crop"
                    class="img-fluid rounded" alt="Media">
                </div>
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1617302683888-ff846b3a66f0?w=100&h=100&fit=crop"
                    class="img-fluid rounded" alt="Media">
                </div>
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1621561548009-d6a6fc4a040b?w=100&h=100&fit=crop"
                    class="img-fluid rounded" alt="Media">
                </div>
                <div class="col-4">
                  <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1604537372129-e7cb7bd6c59a?w=100&h=100&fit=crop"
                      class="img-fluid rounded" alt="Media">
                    <div
                      class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center bg-dark bg-opacity-50 rounded">
                      <span class="text-white">+12</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Files Tab -->
          <div class="tab-pane fade" id="files">
            <div class="p-3" style="background-color: #f8f9fa; height: 100%;">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-file-pdf text-danger me-3 fa-2x"></i>
                    <div>
                      <h6 class="mb-0">Project_Proposal_v2.pdf</h6>
                      <small class="text-muted">2.4 MB • May 15, 2023</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-file-word text-primary me-3 fa-2x"></i>
                    <div>
                      <h6 class="mb-0">Meeting_Notes.docx</h6>
                      <small class="text-muted">1.8 MB • May 10, 2023</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-file-excel text-success me-3 fa-2x"></i>
                    <div>
                      <h6 class="mb-0">Budget_Q2_2023.xlsx</h6>
                      <small class="text-muted">3.2 MB • Apr 28, 2023</small>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <!-- Links Tab -->
          <div class="tab-pane fade" id="links">
            <div class="p-3" style="background-color: #f8f9fa; height: 100%;">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-link text-info me-3"></i>
                    <div>
                      <h6 class="mb-0">GitHub Repository</h6>
                      <small class="text-muted">github.com/project/repo</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-link text-info me-3"></i>
                    <div>
                      <h6 class="mb-0">Project Documentation</h6>
                      <small class="text-muted">docs.example.com/project</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-link text-info me-3"></i>
                    <div>
                      <h6 class="mb-0">Meeting Link</h6>
                      <small class="text-muted">meet.google.com/abc-defg-hij</small>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Message Input -->
        <div class="p-3 bg-white border-top">
          <div class="d-flex align-items-center gap-2">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path
                d="M11.97 12V15.5C11.97 17.43 13.54 19 15.47 19C17.4 19 18.97 17.43 18.97 15.5V10C18.97 6.13 15.84 3 11.97 3C8.09997 3 4.96997 6.13 4.96997 10V16C4.96997 19.31 7.65997 22 10.97 22"
                stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <div class="flex-grow-1">
              <input type="text" class="form-control rounded-pill" placeholder="Type a message"
                style="border: 1px solid #e9ecef;">
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path
                d="M16.1401 2.96004L7.11012 5.96004C1.04012 7.99004 1.04012 11.3 7.11012 13.32L9.79012 14.21L10.6801 16.89C12.7001 22.96 16.0201 22.96 18.0401 16.89L21.0501 7.87004C22.3901 3.82004 20.1901 1.61004 16.1401 2.96004ZM16.4601 8.34004L12.6601 12.16C12.5101 12.31 12.3201 12.38 12.1301 12.38C11.9401 12.38 11.7501 12.31 11.6001 12.16C11.4606 12.0189 11.3824 11.8285 11.3824 11.63C11.3824 11.4316 11.4606 11.2412 11.6001 11.1L15.4001 7.28004C15.6901 6.99004 16.1701 6.99004 16.4601 7.28004C16.7501 7.57004 16.7501 8.05004 16.4601 8.34004Z"
                fill="#0C213F" />
            </svg>

          </div>
        </div>
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

<?php include 'footer.php'; ?>

<script>
  // Data
  const contacts = [
    {
      id: 1,
      name: "Elmer Laverty",
      avatar: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face",
      lastMessage: "Haha oh man 😂",
      timestamp: "12m",
      unreadCount: 1,
      isOnline: false,
      type: "personal"
    },
    {
      id: 2,
      name: "Florencio Dorrance",
      avatar: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=40&h=40&fit=crop&crop=face",
      lastMessage: "woohoooo",
      timestamp: "22m",
      isOnline: true,
      type: "personal"
    },
    {
      id: 3,
      name: "Lavern Laboy",
      avatar: "https://images.unsplash.com/photo-1494790108755-2616b67fb36c?w=40&h=40&fit=crop&crop=face",
      lastMessage: "Haha that's terrifying 😱",
      timestamp: "1h",
      isOnline: false,
      type: "personal"
    },
    {
      id: 4,
      name: "Titus Kitamura",
      avatar: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face",
      lastMessage: "omg, This is ",
      timestamp: "5h",
      isOnline: false,
      type: "personal"
    },
    {
      id: 5,
      name: "Geoffrey Mott",
      avatar: "https://images.unsplash.com/photo-1528892952291-009c663ce843?w=40&h=40&fit=crop&crop=face",
      lastMessage: "yo",
      timestamp: "2d",
      unreadCount: 1,
      isOnline: false,
      type: "personal"
    },
    {
      id: 6,
      name: "Alfonzo Schuessler",
      avatar: "https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=40&h=40&fit=crop&crop=face",
      lastMessage: "perfect",
      timestamp: "1m",
      isOnline: false,
      type: "personal"
    },
    {
      id: 7,
      name: "John Mitchell",
      avatar: "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=40&h=40&fit=crop&crop=face",
      lastMessage: "",
      timestamp: "1m",
      isOnline: false,
      type: "personal"
    },
    {
      id: 8,
      name: "Team Alpha",
      avatar: "https://images.unsplash.com/photo-1598257006626-48b0c252070d?w=40&h=40&fit=crop&crop=face",
      lastMessage: "Meeting at 3pm today",
      timestamp: "30m",
      unreadCount: 3,
      isOnline: false,
      type: "group"
    },
    {
      id: 9,
      name: "Project X",
      avatar: "https://images.unsplash.com/photo-1596524430615-b46475ddff6e?w=40&h=40&fit=crop&crop=face",
      lastMessage: "Progress updates?",
      timestamp: "2h",
      isOnline: false,
      type: "group"
    }
  ];

  const messagesData = [
    { id: 1, text: "omg, this is amazing", timestamp: "2:34 PM", isOwn: false },
    { id: 2, text: "perfect!✅", timestamp: "2:35 PM", isOwn: false },
    { id: 3, text: "Wow, this is really epic", timestamp: "2:36 PM", isOwn: false },
    { id: 4, text: "Just ideas for next time", timestamp: "2:40 PM", isOwn: false },
    { id: 5, text: "I'll be there in 2 mins ⏰", timestamp: "2:41 PM", isOwn: false },
    { id: 6, text: "How are you?", timestamp: "2:45 PM", isOwn: true },
    { id: 7, text: "woohoooo", timestamp: "2:46 PM", isOwn: true },
    { id: 8, text: "Haha oh man", timestamp: "2:47 PM", isOwn: true },
    { id: 9, text: "Haha that's terrifying 😱", timestamp: "2:48 PM", isOwn: true }
  ];

  // Initialize Bootstrap tabs 
  document.addEventListener('DOMContentLoaded', () => {
    // Initialize all Bootstrap tabs
    const allTabs = document.querySelectorAll('a[data-bs-toggle="tab"]');
    allTabs.forEach(tab => {
      tab.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));

        // Remove active class from all tabs
        this.closest('.nav-tabs').querySelectorAll('.nav-link').forEach(t => {
          t.classList.remove('active');
        });

        // Remove active class from all tab panes
        const container = target.closest('.tab-content');
        container.querySelectorAll('.tab-pane').forEach(p => {
          p.classList.remove('show', 'active');
        });

        // Add active class to selected tab and tab pane
        this.classList.add('active');
        target.classList.add('show', 'active');
      });
    });

    // Default select second contact (Florencio)
    const secondContact = document.querySelector('.contact-item:nth-child(2)');
    if (secondContact) {
      secondContact.classList.add('selected');
    }
  });

  // Handle sending messages
  const messageInput = document.querySelector('.form-control[placeholder="Type a message..."]');
  const sendButton = document.querySelector('.btn-primary');

  if (messageInput && sendButton) {
    // Enable/disable send button based on input
    messageInput.addEventListener('input', () => {
      sendButton.disabled = messageInput.value.trim() === '';
    });

    // Send message on button click
    sendButton.addEventListener('click', sendMessage);

    // Send message on Enter key
    messageInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendMessage();
      }
    });
  }

  function sendMessage() {
    const text = messageInput.value.trim();
    if (!text) return;

    // Create new message
    const messagesContainer = document.querySelector('#messages > div');
    const messageElement = document.createElement('div');
    messageElement.className = 'd-flex';

    const timestamp = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

    messageElement.innerHTML = `
    <div class="message-bubble message-own">
      <p class="mb-1">${text}</p>
      <small class="message-time message-time-own">${timestamp}</small>
    </div>
  `;

    messagesContainer.appendChild(messageElement);

    // Clear input
    messageInput.value = '';
    sendButton.disabled = true;

    // Scroll to bottom
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }

  // Handle contact selection
  const contactItems = document.querySelectorAll('.contact-item');
  contactItems.forEach(item => {
    item.addEventListener('click', () => {
      // Deselect previously selected contact
      document.querySelectorAll('.contact-item.selected').forEach(selected => {
        selected.classList.remove('selected');
      });

      // Select clicked contact
      item.classList.add('selected');
    });
  });
</script>
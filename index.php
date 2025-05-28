<?php include 'header.php'; ?>
<!--**********************************
			Sidebar end
		***********************************-->

<!--**********************************
			Content body start
		***********************************-->
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
				<button type="button" class="btn  btn-info12"><svg xmlns="http://www.w3.org/2000/svg" width="25"
						height="24" viewBox="0 0 25 24" fill="none">
						<path
							d="M17.2297 10.8L13.5758 14.4539V3.07266C13.5758 2.47031 13.086 1.98047 12.4836 1.98047C11.8813 1.98047 11.3915 2.47031 11.3915 3.07266V14.4539L7.73989 10.8C7.31333 10.3734 6.62192 10.3734 6.19536 10.8C5.7688 11.2266 5.7688 11.918 6.19536 12.3445L11.7125 17.8617C11.8133 17.9625 11.9352 18.0445 12.0711 18.0984C12.0758 18.1008 12.0829 18.1008 12.0875 18.1031C12.2118 18.1523 12.3454 18.1805 12.486 18.1805C12.6266 18.1805 12.7602 18.1523 12.8844 18.1031C12.8891 18.1008 12.8961 18.1008 12.9008 18.0984C13.0368 18.0422 13.1563 17.9625 13.2594 17.8617L18.7766 12.3445C19.2032 11.918 19.2032 11.2266 18.7766 10.8C18.3477 10.3734 17.6563 10.3734 17.2297 10.8ZM18.0008 18.2906H6.96645C6.36411 18.2906 5.87427 18.7805 5.87427 19.3828C5.87427 19.9852 6.36411 20.475 6.96645 20.475H18.0008C18.6032 20.475 19.093 19.9852 19.093 19.3828C19.093 18.7805 18.6055 18.2906 18.0008 18.2906Z"
							fill="white" />
					</svg> &nbsp; download report</button>
			</div>
		</div>


		<div class="col-md-12">
			<div class="card">
				 <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <div class="period-container">
                            <span class="period">Period:</span>
                            <img src="images/home/calener.png" alt="Calendar"
                                class="calendar-icon">

                            <input type="date" class="date-input" id="start-date" value="2025-03-01">
                            <span>–</span>
                            <input type="date" class="date-input" id="end-date" value="2025-03-14">
                        </div>
                    </h4>
                </div>
              
            </div>
        </div>
				<div class="card-body">
					<canvas id="myChart"></canvas>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="d-flex justify-content-between align-items-center flex-wrap row">
						<!-- Left Side -->
						<div class="col-auto">
							<h6 class="card-title">Arriving toady</h6>
						</div>

						<!-- Right Side -->
						<div class="col-auto">
							<p class="show">show all &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
									fill="none">
									<path d="M1 1L8 8L1 15" stroke="#578096" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" />
								</svg></p>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-responsive-md">
								<thead>
									<!-- <tr>
										<th class="width80"><strong>#</strong></th>
										<th><strong>PATIENT</strong></th>
										<th><strong>DR NAME</strong></th>
										<th><strong>DATE</strong></th>
										<th><strong>STATUS</strong></th>
										<th><strong>PRICE</strong></th>
										<th></th>
									</tr> -->
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="profile-card">
												<div class="profile-image">
													<img src="images/home/c1.png" alt="Julia Lee">
												</div>
												<div class="profile-info">
													<div class="name">Julia Lee</div>
													<div class="desc">Lorem Ipsum</div>
												</div>
											</div>


										</td>
										<td><button type="button" class="btn light btn-info">Approved</button></td>
										<td>
											<p class="price">$580</p>
										</td>
										<td>
											<p class="date">March 6,at 12:00</p>
										</td>
										<td><img src="images/home/calener.png" alt=""></td>

										<td>
											<div class="dropdown">
												<button type="button" class="btn btn-success1 light sharp"
													data-bs-toggle="dropdown">
													<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
															fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<circle fill="#000000" cx="5" cy="12" r="2" />
															<circle fill="#000000" cx="12" cy="12" r="2" />
															<circle fill="#000000" cx="19" cy="12" r="2" />
														</g>
													</svg>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="profile-card">
												<div class="profile-image">
													<img src="images/home/c1.png" alt="Julia Lee">
												</div>
												<div class="profile-info">
													<div class="name">Julia Lee</div>
													<div class="desc">Lorem Ipsum</div>
												</div>
											</div>


										</td>
										<td><button type="button" class="btn light btn-info">Approved</button></td>
										<td>
											<p class="price">$580</p>
										</td>
										<td>
											<p class="date">March 6,at 12:00</p>
										</td>
										<td><img src="images/home/calener.png" alt=""></td>

										<td>
											<div class="dropdown">
												<button type="button" class="btn btn-success1 light sharp"
													data-bs-toggle="dropdown">
													<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
															fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<circle fill="#000000" cx="5" cy="12" r="2" />
															<circle fill="#000000" cx="12" cy="12" r="2" />
															<circle fill="#000000" cx="19" cy="12" r="2" />
														</g>
													</svg>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="profile-card">
												<div class="profile-image">
													<img src="images/home/c1.png" alt="Julia Lee">
												</div>
												<div class="profile-info">
													<div class="name">Julia Lee</div>
													<div class="desc">Lorem Ipsum</div>
												</div>
											</div>


										</td>
										<td><button type="button" class="btn light btn-info">Approved</button></td>
										<td>
											<p class="price">$580</p>
										</td>
										<td>
											<p class="date">March 6,at 12:00</p>
										</td>
										<td><img src="images/home/calener.png" alt=""></td>

										<td>
											<div class="dropdown">
												<button type="button" class="btn btn-success1 light sharp"
													data-bs-toggle="dropdown">
													<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
															fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<circle fill="#000000" cx="5" cy="12" r="2" />
															<circle fill="#000000" cx="12" cy="12" r="2" />
															<circle fill="#000000" cx="19" cy="12" r="2" />
														</g>
													</svg>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
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
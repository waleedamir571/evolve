        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>
            </div>
        </div> -->
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
				

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	 
    <script src="vendor/global/global.min.js"></script>
	 <!-- <script src="vendor/morris/raphael-min.js"></script>
    <script src="vendor/morris/morris.min.js"></script>
    <script src="js/plugins-init/morris-init.js"></script> -->
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- <script src="vendor/chart.js/Chart.bundle.min.js"></script> -->
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
   
	
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
	 <script>
  document.addEventListener('DOMContentLoaded', function () {
    const imageContainer = document.getElementById('imageContainer');
    const fileInput = document.getElementById('fileInput');
    const uploadedImage = document.getElementById('uploadedImage');
    const placeholder = document.getElementById('placeholder');
    const uploadButton = document.getElementById('uploadButton');

    imageContainer.addEventListener('click', () => fileInput.click());
    uploadButton.addEventListener('click', () => fileInput.click());

    fileInput.addEventListener('change', function (e) {
      const file = e.target.files[0];
      if (!file) return;

      if (!file.type.startsWith("image/")) {
        alert("Invalid file type. Please upload an image.");
        return;
      }

      if (file.size > 5 * 1024 * 1024) {
        alert("File too large. Max size is 5MB.");
        return;
      }

      const reader = new FileReader();
      reader.onload = function (event) {
        uploadedImage.src = event.target.result;
        uploadedImage.style.display = 'block';
        placeholder.style.display = 'none';  // ✅ Hides the text
      };
      reader.readAsDataURL(file);
    });
  });
</script>

	 <script>

		
    const ctx = document.getElementById('myChart').getContext('2d');

    const labels = Array.from({ length: 22 }, (_, i) => (i + 1).toString());

    const data = {
      labels: labels,
      datasets: [{
        label: 'Earned',
        data: [
          1200, 1500, 2700, 1400, 2000, 1950, 1300, 1600, 2200,
          1400, 1350, 1380, 1984.83, 1700, 2100, 1200, 1600, 2300,
          1450, 1430, 1980, 1300
        ],
        backgroundColor: ctx => ctx.dataIndex === 12 ? '#2c3e50' : '#bfe3f9',
        borderRadius: 4,
        barPercentage: 0.5,
        categoryPercentage: 0.6 // 👈 space between bars
      }]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {
        responsive: true,
        maintainAspectRatio: false, // 👈 Allows custom height
        scales: {
          y: {
            beginAtZero: true,
            max: 3000,
            ticks: {
              stepSize: 1000,
              callback: value => '$' + value
            },
            grid: {
              drawBorder: false
            }
          },
          x: {
            grid: {
              display: false
            }
          }
        },
        plugins: {
          tooltip: {
            callbacks: {
              label: context => `$${context.raw.toFixed(2)} Total Per Day`
            }
          },
          legend: {
            display: false
          }
        }
      }
    };

    new Chart(ctx, config);
  </script>
	<script>
		  
		
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			function checkDirection() {
				var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
				if(htmlClassName == 'rtl') {
					return true;
				} else {
					return false;
				
				}
			}
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: false,
				left:true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					800:{
						items:2
					},	
					991:{
						items:2
					},			
					
					1200:{
						items:2
					},
					1600:{
						items:2
					}
				}
			})		
			jQuery('.testimonial-two').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: true,
				left:true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},	
					991:{
						items:3
					},			
					
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})					
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
</body>


</html>
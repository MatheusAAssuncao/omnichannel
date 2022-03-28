	</div>
	<div class="footer">
		<em class="copyright">&copy; Cofidis 2022. Developed by <a href="https://www.salesgroup.pt/" target="_blank">Salesgroup</a></em>		
	</div>

	<script type="text/javascript">
		configureSavedStatusSidebar();

		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
				toggleArrows();
			});
			$('#sidebarCollapseMobile').on('click', function () {
				$('#sidebar').toggleClass('active');
				toggleArrows();
			});

			var url = window.location.pathname.split('/');
			$("#sidebar ul.components li a").each(function() {
				if (this.href.indexOf(url[1]) >= 0) {
					$(this).closest("li").addClass("hvr");
				}
			}); 
		});

		function configureSavedStatusSidebar() {
			var sidebarElementClasses = document.getElementById("sidebar").classList;
			if (checkCookie('sidebar') != 'expanded') {
				sidebarElementClasses.add("active");
			} else {
				sidebarElementClasses.remove("active");
			}
			toggleArrows();
		}

		function toggleArrows() {
			if ($('#sidebar')[0].classList.contains('active')) {
				$("#sideBarArrowRight").show();
				$("#sideBarArrowLeft").hide();

				$("#sideBarMobileArrowRight").hide();
				$("#sideBarMobileArrowLeft").show();

				setCookie('sidebar', 'reduced');
			} else {
				$("#sideBarArrowRight").hide();
				$("#sideBarArrowLeft").show();

				$("#sideBarMobileArrowRight").show();
				$("#sideBarMobileArrowLeft").hide();

				setCookie('sidebar', 'expanded');
			}
		}

		function setCookie(cname, cvalue) {
			const d = new Date();
			d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
			let expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function getCookie(cname) {
			let name = cname + "=";
			let cookies = document.cookie.split(';');
			for(let i = 0; i < cookies.length; i++) {
				let c = cookies[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}

		function checkCookie(cname) {
			let sidebar = getCookie(cname);
			if (sidebar == "") {
				setCookie(cname, "expanded");
				return "expanded";
			} else {
				return getCookie(cname);
			}
		}
	</script>
</body>
</html>

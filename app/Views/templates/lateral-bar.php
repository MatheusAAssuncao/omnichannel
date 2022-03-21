<style>

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
	position: relative;
	z-index: 200;
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #263238;
    color: #fff;
    /* transition: all 0.3s; */
	z-index: 1001;
}

#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

#sidebar.active .sidebar-header .img-logo {
    display: block;
	width: 55px;
}

#sidebar ul.components li:hover {
    border-left: solid #FFBE00;
}

#sidebar ul.components .hvr {
    border-left: solid #FFBE00;
}

#sidebar.active ul {
    padding-left: 0px !important;
    margin-left: 0px !important;
}

#sidebar.active ul li {
    display: flex;
    flex-direction: row;
    justify-content: center;
}

#sidebar.active ul li a {
    padding-left: 0px !important;
    margin-left: 0px !important;
    font-size: 0.85em;
}

#sidebar.active ul li a span {
    display: none;
}

#sidebar.active ul li a i {
    margin-right:  0;
    display: block;
    font-size: 1.8em;
    margin-bottom: 5px;
}

#sidebar.active a[aria-expanded="false"]::before, #sidebar.active a[aria-expanded="true"]::before {
    top: auto;
    bottom: 5px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar .sidebar-header {
    padding: 20px;
	padding-bottom: 8px;
    background: #263238;
	display: flex;
    flex-direction: row;
    justify-content: flex-end;
}

#sidebar .sidebar-header strong {
    display: none;
    font-size: 1.8em;
}

#sidebar ul.components {
	list-style-type: none;
}

#sidebar:not(.active) ul.components {
    padding-top: 20px;
	padding-left: 20px;
}

#sidebar ul.components li {
    margin-top: 8px;
    margin-bottom: 8px;
}

#sidebar ul.components li a {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    padding-left: 26px;
    padding-right: 0px;
    padding-top: 10px;
    padding-bottom: 10px;
    color: white;
	text-decoration: none;
}

#sidebar ul.components span {
    font-family: 'Roboto', sans-serif !important;
    color: white !important;

}

#sidebar:not(.active) ul.components li:hover {
    background: rgba(0, 0, 0, 0.1);
}

#sidebar ul.components .hvr {
    background: rgba(0, 0, 0, 0.1);
}

#sidebar ul.components li img {
	margin-right: 14px;
}

#sidebar ul.components li span {
	padding-right: 20px;
}

#sidebar ul li a i {
    margin-right: 10px;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #263238;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}

#divSidebarCollapse {
	display: block;
	margin-top: 7px;
	margin-right: 10px;
	margin-left: 10px;
	display: flex;
    flex-direction: row;
    justify-content: flex-end;
}

#sidebarCollapse .fa-angle-right {
	display: none;
}

#sidebarCollapse {
	cursor: pointer;
	text-decoration: none;
}

#sidebarCollapseMobile {
    padding-left: 15px !important;
    padding-right: 15px !important;
    opacity: 0.5 !important;
	display: none;
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
	margin-top: 45px;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
        margin-left: -80px !important;
    }
    a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
        top: auto;
        bottom: 5px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    #sidebar.active {
        margin-left: 0 !important;
    }
    #sidebar ul.components li a span {
        display: none !important;
    }
    #sidebar .sidebar-header strong {
        display: block;
    }

	#sidebar .sidebar-header .img-logo {
		display: block;
		width: 55px;
	}

    #sidebar ul li a {
        padding: 20px 10px;
    }

    #sidebar ul li a span {
        font-size: 0.85em;
    }

    #sidebar ul li a i {
        margin-right:  0;
        display: block;
    }

    #sidebar ul li a i {
        font-size: 1.3em;
    }
    #sidebarCollapse {
        display: none;
    }
	#sidebarCollapseMobile {
        display: block;
        position: fixed;
    }
}
</style>
<div class="wrapper">
	<!-- Sidebar Holder -->
	<nav id="sidebar" class="active">
		<div id="divSidebarCollapse">
			<a id="sidebarCollapse">
				<i id="sideBarArrowRight" class="fa-solid fa-angle-right"></i>
				<i id="sideBarArrowLeft" class="fa-solid fa-angle-left"></i>
			</a>
		</div>
		<div class="sidebar-header">
			<img class="img-logo" width="125px" src="assets/images/sidebar/cofidis-logo.png" alt="logo Cofidis"/>
		</div>

		<ul class="components">
			<li>
				<a href="/campaigns">
					<img src="assets/images/sidebar/megaphone.svg" alt="campanhas" title="Campanhas"/>
					<span>Campanhas</span>
				</a>
			</li>
			<li>
				<a href="/new-campaign">
                    <img src="assets/images/sidebar/megaphone-new.svg" alt="nova campanha" title="Nova Campanha"/>
					<span>Nova Campanha</span>
				</a>
			</li>
			<li>
				<a href="/workflows">
                    <img src="assets/images/sidebar/workflows.svg" alt="workflows" title="Workflows"/>
					<span>Workflows</span>
				</a>
			</li>
			<li>
				<a href="/templates">
					<img src="assets/images/sidebar/templates.svg" alt="templates" title="Templates"/>
					<span>Templates</span>
				</a>
			</li>
			<li>
				<a href="/statistics">
                    <img src="assets/images/sidebar/statistics.svg" alt="estatísticas" title="Estatísticas"/>
					<span>Estatísticas</span>
				</a>
			</li>
		</ul>
	</nav>
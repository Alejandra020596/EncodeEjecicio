 <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
		
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i>ESCUELA<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{route('school.formEscuela')}}">ALTA</a>
								</li>
								<li>
									<a href="{{route('school.schoolIndex')}}">CONSULTA</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-book nav_icon"></i>MAESTROS <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{route('teacher.teacherForm')}}">ALTA</a>
								</li>
								<li>
									<a href="{{route('teacher.teacherIndex')}}">CONSULTA</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-th-large nav_icon"></i>MATERIA<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{route('materia.materiaForm')}}">ALTA</a>
								</li>
								<li>
									<a href="{{route('materia.materiaIndex')}}">CONSULTA</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-th-large nav_icon"></i>TEMARIO<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{route('temario.temarioForm')}}">ALTA</a>
								</li>
								<li>
									<a href="{{route('temario.temarioIndex')}}">CONSULTA</a>
								</li>
							</ul>
						</li>

					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
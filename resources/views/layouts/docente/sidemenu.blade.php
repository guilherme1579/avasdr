<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
        
        <li><a><i class="fa fa-home"></i> Home </a></li>
        <li><a href="{{url('docente/post')}}" ><i class="fa fa-newspaper-o"></i> Post </a> </li>
        <li><a href="{{url('docente/questao')}}"><i class="fa fa-edit"></i> Questões</a></li>
        <li><a><i class="fa fa-edit"></i> Questinário <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{url('docente/questionario')}}">Listar</a></li>
            <li><a href="{{url('docente/questionario/create')}}">Criar</a></li>
          </ul>
        </li>
      
      
    </ul>
  </div>
  

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Lock">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>
<!-- /menu footer buttons -->
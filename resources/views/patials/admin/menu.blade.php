<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="">
            <a href="{{ url('admin/dashboard') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
                <b class="arrow"></b>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url('admin/group') }}">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> Groups </span>
            </a>
            <b class="arrow"></b>
        </li>
        
        <li class="">
            <a href="{{ url('admin/user') }}">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Users </span>
            </a>
        </li>

        <li class="">
            <a href="{{ url('admin/category') }}">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> Categories </span>
            </a>
        </li>

        <li class="">
            <a href="{{ url('admin/product') }}">
                <i class="menu-icon fa fa-product-hunt"></i>
                <span class="menu-text"> Products </span>
            </a>
        </li>
        
        <li class="">
            <a href="{{ url('admin/supplier') }}">
                <i class="menu-icon fa fa-phone-square"></i>
                <span class="menu-text"> Suppliers </span>
            </a>
        </li>
        
        <li class="">
            <a href="{{ url('admin/type') }}">
                <i class="menu-icon fa fa-check-square-o"></i>
                <span class="menu-text"> Types </span>
            </a>
        </li>
        
        <li class="">
            <a href="{{ url('admin/order') }}">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Orders </span>
            </a>
        </li>
        
        <li class="">
            <a href="{{ url('admin/new') }}">
                <i class="menu-icon fa fa-newspaper-o"></i>
                <span class="menu-text"> News </span>
            </a>
        </li>
        
        
        <li class="">
            <a href="{{ url('admin/export') }}">
                <i class="menu-icon fa fa-upload"></i>
                <span class="menu-text"> Export Invoice </span>
            </a>
        </li>
        
        <li class="">
            <a href="{{ url('admin/slide') }}">
                <i class="menu-icon fa fa-sliders"></i>
                <span class="menu-text"> Slide </span>
            </a>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
           data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
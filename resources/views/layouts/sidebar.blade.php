<!-- Main Sidebar Container -->
<div class="main-sidebar">
    <!-- Brand Logo -->
    <a href="{{ route('vehicle') }}" class="brand-link">
      <img src="" alt="Kamion" class="brand-image" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{!! route('vehicle') !!}" class="nav-link text-center {!! classActiveSegment(1, '') !!}">
                      <span> Find a Vehicle</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{!! route('vehicle') !!}" class="nav-link text-center {!! classActiveSegment(1, 'vehicle') !!}">
                      <span> My Loads</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{!! route('vehicle') !!}" class="nav-link text-center {!! classActiveSegment(1, 'vehicle') !!}">
                      <span> Notifications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{!! route('vehicle') !!}" class="nav-link text-center {!! classActiveSegment(1, 'vehicle') !!}">
                      <span> Account</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{!! route('vehicle') !!}" class="nav-link text-center {!! classActiveSegment(1, 'vehicle') !!}">
                      <span> Help</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <div class="siderbar-footer">
        <p class="sider-footer">Power by <span>KAMION</span></p>
    </div>
</div>

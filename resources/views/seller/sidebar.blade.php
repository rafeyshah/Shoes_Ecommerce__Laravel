<div id="sidebar">
    <div class="sidebar__title">
        <div class="sidebar__img">
            <h1>Codersbite</h1>
        </div>
        <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
    </div>

    <div class="sidebar__menu">
        <div class="sidebar__link ">
            <i class="fa fa-home"></i>
            <a href="{{url('home')}}">Dashboard</a>
        </div>
        <div class="sidebar__link">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <a href="{{url('product')}}">Add Products</a>
        </div>
        <div class="sidebar__link">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <a href="{{url('show_orders')}}">Orders</a>
        </div>
       
    </div>
</div>
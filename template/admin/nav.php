<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/admin">RightStreet Admin</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li<?php if (!isset($uri[2]) || $uri[2] == '' || $uri[2] == 'dashboard') echo ' class="active"'; ?>><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'vendors') echo ' class="active"'; ?>><a href="/admin/vendors"><span class="glyphicon glyphicon-tasks"></span> Vendors</a></li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'zines') echo ' class="active"'; ?>><a href="/admin/zines"><span class="glyphicon glyphicon-briefcase"></span> Zines</a></li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'transactions') echo ' class="active"'; ?>><a href="/admin/reports/transactions"><span class="glyphicon glyphicon-transfer"></span> Transactions</a></li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'settings') echo ' class="active"'; ?>><a href="/admin/settings"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'vendor') echo ' class="active"'; ?>><a href="/admin/reports/vendor"><span class="glyphicon glyphicon-list-alt"></span> Vendor Report</a></li>
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'transactions') echo ' class="active"'; ?>><a href="/admin/reports/transactions"><span class="glyphicon glyphicon-transfer"></span> Transactions Report</a></li>
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'analytics') echo ' class="active"'; ?>><a href="/admin/reports/analytics"><span class="glyphicon glyphicon-stats"></span> Site Analytics</a></li>
            <li class="divider"></li>
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'settings') echo ' class="active"'; ?>><a href="/admin/reports/settings"><span class="glyphicon glyphicon-wrench"></span> Report Settings</a></li>
          </ul>
        </li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'logout') echo ' class="active"'; ?>><a href="/admin/logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
      </ul>
    </div>

  </div>
</nav>
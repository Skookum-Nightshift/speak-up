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
        <li<?php if (!isset($uri[2]) || $uri[2] == '' || $uri[2] == 'dashboard') echo ' class="active"'; ?>><a href="/admin/dashboard">Dashboard</a></li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'vendors') echo ' class="active"'; ?>><a href="/admin/vendors">Vendors</a></li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'zines') echo ' class="active"'; ?>><a href="/admin/zines">Zines</a></li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'transactions') echo ' class="active"'; ?>><a href="/admin/reports/transactions">Transactions</a></li>
        <li><a href="/admin/settings">Settings</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'vendor') echo ' class="active"'; ?>><a href="/admin/reports/vendor">Vendor Report</a></li>
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'transactions') echo ' class="active"'; ?>><a href="/admin/reports/transactions">Transactions Report</a></li>
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'analytics') echo ' class="active"'; ?>><a href="/admin/reports/analytics">Site Analytics</a></li>
            <li class="divider"></li>
            <li<?php if (isset($uri[2]) && $uri[2] == 'reports' && $uri[3] == 'settings') echo ' class="active"'; ?>><a href="/admin/reports/settings">Report Settings</a></li>
          </ul>
        </li>
        <li<?php if (isset($uri[2]) && $uri[2] == 'logout') echo ' class="active"'; ?>><a href="/admin/logout">Logout</a></li>
      </ul>
    </div>

  </div>
</nav>
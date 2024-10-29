<?php
header('X-Frame-Options: SAMEORIGIN');
$request = $_SERVER['REQUEST_URI'];
$required = true;

// default routing
switch ($request) {
  case '/CrosswalkAgency/login.php':
    require __DIR__ . '/web/login.php';
    break;

  case '/CrosswalkAgency/dashboard.php':
    require __DIR__ . '/web/dashboard.php';
    break;
  case '/CrosswalkAgency/emp.php':
    require __DIR__ . '/web/emp.php';
    break;
  case '/CrosswalkAgency/emp1.php':
    require __DIR__ . '/web/emp/emp1.php';
    break;
  case '/CrosswalkAgency/information.php':
    require __DIR__ . '/web/information.php';
    break;
  case '/CrosswalkAgency/information1.php':
    require __DIR__ . '/web/emp/information1.php';
    break;
  case '/CrosswalkAgency/Service-information.php':
    require __DIR__ . '/web/Service-information.php';
    break;
  case '/CrosswalkAgency/Pay-salary.php':
    require __DIR__ . '/web/Pay-salary.php';
    break;
  case '/CrosswalkAgency/receipt.php':
    require __DIR__ . '/web/receipt.php';
    break;
  case '/CrosswalkAgency/project.php':
    require __DIR__ . '/web/project.php';
    break;
  case '/CrosswalkAgency/Sales-order.php':
    require __DIR__ . '/web/Sales-order.php';
    break;
  case '/CrosswalkAgency/Invoice.php':
    require __DIR__ . '/web/Invoice.php';
    break;
  case '/CrosswalkAgency/Manage.php':
    require __DIR__ . '/web/Manage.php';
    break;
  case '/CrosswalkAgency/above.php':
    require __DIR__ . '/web/above.php';
    break;
  case '/CrosswalkAgency/Setting.php':
    require __DIR__ . '/web/Setting.php';
    break;
  case '/CrosswalkAgency/paste-leaves.php':
    require __DIR__ . '/web/paste-leaves.php';
    break;
  case '/CrosswalkAgency/admin':
    require __DIR__ . '/web/admin/index.php';
    break;
  case '/CrosswalkAgency/Sales-order-1.php':
    require __DIR__ . '/web/emp/Sales-order-1.php';
    break;
  case '/CrosswalkAgency/paste-leaves1.php':
    require __DIR__ . '/web/emp/paste-leaves1.php';
    break;
  case '/CrosswalkAgency/receipt1.php':
    require __DIR__ . '/web/emp/receipt1.php';
    break;
  case '/CrosswalkAgency/paste-leaves2.php':
    require __DIR__ . '/web/emp/paste-leaves2.php';
    break;
  case '/CrosswalkAgency/Sales-order-2.php':
    require __DIR__ . '/web/emp/Sales-order-2.php';
    break;

  case '/CrosswalkAgency/above1.php':
    require __DIR__ . '/web/emp/above1.php';
    break;
  case '/CrosswalkAgency/Invoice1.php':
    require __DIR__ . '/web/emp/Invoice1.php';
    break;
    // case '/CrosswalkAgency/test':
    //   require __DIR__ . '/web/test.php';
    //   break;

    // default:
    //   require __DIR__ . '/web/404.php';
    //   break;
}

<?php


return [
    [
      'title' => 'dashboard.nav.home',
      'icon' => 'nav-icon fas fa-tachometer-alt',
      'route'=> 'dashboard.index',
    ],
    [
      'title' => 'dashboard.nav.faculties',
      'icon' => 'nav-icon fas fa-university',
      'route'=> 'dashboard.faculties.index',
    ],
    [
      'title' => 'dashboard.nav.departments',
      'icon' => 'nav-icon fas fa-building',
      'route'=> 'dashboard.departments.index',
    ],
    [
      'title' => 'dashboard.nav.students',
      'icon' => 'nav-icon fas fa-user-graduate',
      'route'=> 'dashboard.students.index',
    ],
    [
      'title' => 'dashboard.nav.two_factor',
      'icon' => 'nav-icon fas fa-lock',
      'route'=> 'dashboard.two-factor-auth.index',
    ],
    
];
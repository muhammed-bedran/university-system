<?php


return [
    [
      'title' => 'الصفحة الرئيسية',
      'icon' => 'nav-icon fas fa-tachometer-alt',
      'route'=> 'dashboard.index',
    ],
    [
      'title' => 'قائمة الكليات',
      'icon' => 'nav-icon fas fa-university',
      'route'=> 'dashboard.faculties.index',
    ],
    [
      'title' => 'قائمة الأقسام',
      'icon' => 'nav-icon fas fa-building',
      'route'=> 'dashboard.departments.index',
    ],
    [
      'title' => 'قائمة الطلاب',
      'icon' => 'nav-icon fas fa-user-graduate',
      'route'=> 'dashboard.students.index',
    ],
    [
      'title' => 'التحقق بخطوتين',
      'icon' => 'nav-icon fas fa-lock',
      'route'=> 'dashboard.two-factor-auth.index',
    ],
    
];
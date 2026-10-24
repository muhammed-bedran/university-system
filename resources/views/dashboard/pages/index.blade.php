@extends('layouts.dashboard.index')

@section('title', ' الصفحة الرئيسية')

@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">الصفحة الرئيسية </a>
    </li>
@endsection

@section('content')
 

        <div class="home-topbar">
            <div>
                <h1>نظرة عامة أكاديمية</h1>
                <p class="home-sub">العام الجامعي 2025 / 2026 — متابعة القبول والجداول والطلبات</p>
            </div>
            <div class="home-topbar-meta">
                <span class="home-chip">الفصل الدراسي الأول</span>
                <span class="home-chip open">التسجيل مفتوح</span>
                <span class="home-chip">الأربعاء 14 أكتوبر</span>
            </div>
        </div>

        <div class="home-metrics">
            <div class="home-metric">
                <div class="value">4,280</div>
                <div class="label">الطلاب المسجلون</div>
                <div class="hint">+142 هذا الفصل</div>
            </div>
            <div class="home-metric">
                <div class="value">312</div>
                <div class="label">أعضاء هيئة التدريس</div>
                <div class="hint">عبر 8 كليات</div>
            </div>
            <div class="home-metric">
                <div class="value">186</div>
                <div class="label">مقررات نشطة</div>
                <div class="hint">12 مقرر جديد</div>
            </div>
            <div class="home-metric">
                <div class="value">67</div>
                <div class="label">طلبات بانتظار الاعتماد</div>
                <div class="hint">تحتاج متابعة اليوم</div>
            </div>
        </div>

        <div class="home-layout">
            <section class="home-panel">
                <div class="home-panel-head">
                    <h3>أجندة الأسبوع الأكاديمي</h3>
                    <a href="#">عرض التقويم</a>
                </div>
                <div class="home-panel-body">
                    <div class="schedule-day">
                        <div class="schedule-date">
                            <span class="day">الأربعاء</span>
                            <span class="num">14</span>
                        </div>
                        <div class="schedule-events">
                            <div class="schedule-event">
                                <div>
                                    <p class="title">اجتماع عمادة القبول والتسجيل</p>
                                    <p class="meta">قاعة الاجتماعات — المبنى الإداري</p>
                                </div>
                                <span class="time">10:00 ص</span>
                            </div>
                            <div class="schedule-event alt">
                                <div>
                                    <p class="title">اعتماد درجات كلية الحاسب</p>
                                    <p class="meta">مراجعة نهائية قبل النشر</p>
                                </div>
                                <span class="time">1:30 م</span>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-day">
                        <div class="schedule-date">
                            <span class="day">الخميس</span>
                            <span class="num">15</span>
                        </div>
                        <div class="schedule-events">
                            <div class="schedule-event">
                                <div>
                                    <p class="title">فتح التسجيل للمقررات الاختيارية</p>
                                    <p class="meta">لجميع الكليات</p>
                                </div>
                                <span class="time">8:00 ص</span>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-day">
                        <div class="schedule-date">
                            <span class="day">الأحد</span>
                            <span class="num">18</span>
                        </div>
                        <div class="schedule-events">
                            <div class="schedule-event alt">
                                <div>
                                    <p class="title">نشر جدول امتحانات منتصف الفصل</p>
                                    <p class="meta">كلية الهندسة والعلوم</p>
                                </div>
                                <span class="time">9:00 ص</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-panel">
                <div class="home-panel-head">
                    <h3>بانتظار الاعتماد</h3>
                    <a href="#">عرض الكل</a>
                </div>
                <div class="home-panel-body">
                    <ul class="pending-list">
                        <li>
                            <div>
                                <p class="pending-title">12 طلب قبول جديد — كلية الحاسب</p>
                                <p class="pending-meta">عمادة القبول · منذ ساعة</p>
                            </div>
                            <span class="pending-badge urgent">عاجل</span>
                        </li>
                        <li>
                            <div>
                                <p class="pending-title">اعتماد خطة مقررات قسم الرياضيات</p>
                                <p class="pending-meta">الشؤون الأكاديمية · منذ 3 ساعات</p>
                            </div>
                            <span class="pending-badge warn">متوسط</span>
                        </li>
                        <li>
                            <div>
                                <p class="pending-title">رفع درجات مقرر هياكل البيانات</p>
                                <p class="pending-meta">د. أحمد محمد · منذ 5 ساعات</p>
                            </div>
                            <span class="pending-badge">عادي</span>
                        </li>
                        <li>
                            <div>
                                <p class="pending-title">تعديل جدول محاضرات كلية التربية</p>
                                <p class="pending-meta">إدارة الجداول · منذ يوم</p>
                            </div>
                            <span class="pending-badge">عادي</span>
                        </li>
                        <li>
                            <div>
                                <p class="pending-title">طلب إيقاف أكاديمي لـ 4 طلاب</p>
                                <p class="pending-meta">شؤون الطلاب · منذ يومين</p>
                            </div>
                            <span class="pending-badge warn">متوسط</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="home-bottom">
            <section class="home-panel">
                <div class="home-panel-head">
                    <h3>توزيع الطلاب حسب الكلية</h3>
                    <a href="#">التفاصيل</a>
                </div>
                <div class="home-panel-body">
                    <div class="college-bars">
                        <div class="college-bar-row">
                            <div class="name"><span>كلية الحاسب</span><span class="count">1,120</span></div>
                            <div class="college-track">
                                <div class="college-fill" style="width: 86%"></div>
                            </div>
                        </div>
                        <div class="college-bar-row">
                            <div class="name"><span>كلية الهندسة</span><span class="count">980</span></div>
                            <div class="college-track">
                                <div class="college-fill" style="width: 74%"></div>
                            </div>
                        </div>
                        <div class="college-bar-row">
                            <div class="name"><span>كلية الإدارة</span><span class="count">740</span></div>
                            <div class="college-track">
                                <div class="college-fill" style="width: 58%"></div>
                            </div>
                        </div>
                        <div class="college-bar-row">
                            <div class="name"><span>كلية العلوم</span><span class="count">620</span></div>
                            <div class="college-track">
                                <div class="college-fill" style="width: 48%"></div>
                            </div>
                        </div>
                        <div class="college-bar-row">
                            <div class="name"><span>كلية التربية</span><span class="count">510</span></div>
                            <div class="college-track">
                                <div class="college-fill" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="college-bar-row">
                            <div class="name"><span>كلية الآداب</span><span class="count">310</span></div>
                            <div class="college-track">
                                <div class="college-fill" style="width: 28%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-panel">
                <div class="home-panel-head">
                    <h3>آخر التسجيلات</h3>
                    <a href="table.html">إدارة الطلاب</a>
                </div>
                <div class="home-panel-body">
                    <div class="table-responsive">
                        <table class="table home-table">
                            <thead>
                                <tr>
                                    <th>الطالب</th>
                                    <th>الرقم الجامعي</th>
                                    <th>الكلية</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="student-name">سارة أحمد الحربي</td>
                                    <td>20241001</td>
                                    <td>كلية الحاسب</td>
                                    <td><span class="badge badge-success">منتظم</span></td>
                                </tr>
                                <tr>
                                    <td class="student-name">خالد عبدالله العمري</td>
                                    <td>20241002</td>
                                    <td>كلية الهندسة</td>
                                    <td><span class="badge badge-success">منتظم</span></td>
                                </tr>
                                <tr>
                                    <td class="student-name">نورة فهد السالم</td>
                                    <td>20231045</td>
                                    <td>كلية الإدارة</td>
                                    <td><span class="badge badge-warning">مراجعة</span></td>
                                </tr>
                                <tr>
                                    <td class="student-name">عبدالله ناصر القحطاني</td>
                                    <td>20241033</td>
                                    <td>كلية الحاسب</td>
                                    <td><span class="badge badge-success">منتظم</span></td>
                                </tr>
                                <tr>
                                    <td class="student-name">أحمد ماجد الغامدي</td>
                                    <td>20231090</td>
                                    <td>كلية الحاسب</td>
                                    <td><span class="badge badge-success">منتظم</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

    
@endsection
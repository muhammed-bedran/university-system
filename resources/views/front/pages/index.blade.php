@extends('layouts.website.index')

@section('content')
    <main id="top">
        <div class="hero">
            <div class="wrap">
                <div>
                    <h1>{{ __('website.University Education') }}</h1>
                    <p>{{ __('website.Four colleges') }}</p>
                    <a class="btn" href="#apply">قدّم على القبول</a>
                    <a class="btn ghost" href="#faculties">استعرض الكليات</a>
                </div>
                <div class="arch" aria-hidden="true"><span>منذ عام ١٩٩٨</span></div>
            </div>
        </div>

        <section id="faculties" class="alt">
            <div class="wrap">
                <h2>الكليات</h2>
                <div class="grid">
                    <div class="fac">
                        <h3>كلية الهندسة</h3>
                        <p>الحاسوب، المدني، الكهرباء، والعمارة.</p>
                    </div>
                    <div class="fac">
                        <h3>كلية العلوم</h3>
                        <p>الرياضيات، الفيزياء، الكيمياء، والأحياء.</p>
                    </div>
                    <div class="fac">
                        <h3>كلية الاقتصاد والإدارة</h3>
                        <p>المحاسبة، التسويق، وإدارة الأعمال.</p>
                    </div>
                    <div class="fac">
                        <h3>كلية الآداب</h3>
                        <p>اللغة العربية، الإنجليزية، والإعلام.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="news">
            <div class="wrap">
                <h2>آخر الأخبار</h2>
                <div class="news">
                    <a href="#news"><time>١٢ تشرين الثاني</time><strong>افتتاح مختبر الذكاء الاصطناعي في كلية
                            الهندسة</strong></a>
                    <a href="#news"><time>٥ تشرين الثاني</time><strong>فتح باب التقديم على المنح الدراسية للفصل
                            الثاني</strong></a>
                    <a href="#news"><time>٢٨ تشرين الأول</time><strong>معرض التوظيف السنوي بمشاركة أكثر من ٤٠
                            شركة</strong></a>
                </div>
            </div>
        </section>

        <section id="apply" class="apply alt">
            <div class="wrap">
                <div>
                    <h2>القبول والتسجيل</h2>
                    <p>التقديم مفتوح حتى نهاية الشهر. جهّز شهادتك وصورة الهوية وقدّم عبر الإنترنت.</p>
                </div>
                <a class="btn" href="#contact">ابدأ التقديم</a>
            </div>
        </section>
    </main>
@endsection
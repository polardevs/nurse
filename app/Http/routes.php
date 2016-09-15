<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/history', function () {
    return view('pages.about.history');
});
Route::get('/manager', function () {
    return view('pages.about.manager');
});

//      S T A F F     //

Route::get('/familyMidwife', function () {
    return view('pages.about.staff.familyMidwife');
});
Route::get('/adultOld', function () {
    return view('pages.about.staff.adultOld');
});
Route::get('/childTeen', function () {
    return view('pages.about.staff.childTeen');
});
Route::get('/mentalHealth', function () {
    return view('pages.about.staff.mentalHealth');
});
Route::get('/communityHealth', function () {
    return view('pages.about.staff.communityHealth');
});
Route::get('/secretariat', function () {
    return view('pages.about.staff.secretariat');
});
Route::get('/OfficeSecrerariat', function () {
    return view('pages.OfficeSecrerariat.index');
});



Route::get('/news/student_news/', function () {
    return view('pages.news.StudentNews');
});
Route::get('/news/student_fund/', function () {
    return view('pages.news.StudentFund');
});
Route::get('/news/student_portfolio/', function () {
    return view('pages.news.StudentPortfolio');
});
Route::get('/news/student_gallery/', function () {
    return view('pages.news.StudentGallery');
});



Route::get('/contactus', function () {
    return view('pages.contactus.index');
});

//     D R G R E E     //
Route::get('/degree/bachelor', function () {
    return view('pages.degree.bachelor.index');
});
Route::get('/degree/bachelor/curriculum', function () {
    return view('pages.degree.bachelor.curriculum');
});
Route::get('/degree/bachelor/selective', function () {
    return view('pages.degree.bachelor.selective');
});
Route::get('/degree/bachelor/rules', function () {
    return view('pages.degree.bachelor.rules');
});
Route::get('/degree/bachelor/academic', function () {
    return view('pages.degree.bachelor.activity.academic');
});
Route::get('/degree/bachelor/sport', function () {
    return view('pages.degree.bachelor.activity.sport');
});
Route::get('/degree/bachelor/outreach', function () {
    return view('pages.degree.bachelor.activity.outreach');
});
Route::get('/degree/bachelor/ethics', function () {
    return view('pages.degree.bachelor.activity.ethics');
});
Route::get('/degree/bachelor/culture', function () {
    return view('pages.degree.bachelor.activity.culture');
});
Route::get('/degree/bachelor/gallery', function () {
    return view('pages.degree.bachelor.activity.gallery');
});
Route::get('/degree/bachelor/gallery/activity1', function () {
    return view('pages.degree.bachelor.activity.activity1');
});
Route::get('/degree/bachelor/gallery/activity2', function () {
    return view('pages.degree.bachelor.activity.activity2');
});
Route::get('/degree/bachelor/gallery/activity3', function () {
    return view('pages.degree.bachelor.activity.activity3');
});
Route::get('/degree/bachelor/gallery/activity4', function () {
    return view('pages.degree.bachelor.activity.activity4');
});
Route::get('/degree/bachelor/prophylactic', function () {
    return view('pages.degree.bachelor.prophylactic');
});
Route::get('/degree/bachelor/healthCare', function () {
    return view('pages.degree.bachelor.healthCare');
});
Route::get('/degree/bachelor/consultCare', function () {
    return view('pages.degree.bachelor.consultCare');
});
Route::get('/degree/bachelor/advisors', function () {
    return view('pages.degree.bachelor.advisors');
});
Route::get('/degree/bachelor/masterClass', function () {
    return view('pages.degree.bachelor.masterClass');
});
Route::get('/degree/bachelor/assistantLecturer', function () {
    return view('pages.degree.bachelor.assistantLecturer');
});
//      B U R S A R Y      //
Route::get('/degree/bursary/faculty', function () {
    return view('pages.degree.bachelor.bursary.faculty');
});
Route::get('/degree/bursary/university', function () {
    return view('pages.degree.bachelor.bursary.university');
});
Route::get('/degree/bursary/hospital', function () {
    return view('pages.degree.bachelor.bursary.hospital');
});
Route::get('/degree/bursary/employ', function () {
    return view('pages.degree.bachelor.bursary.employ');
});
Route::get('/degree/bursary/ICL', function () {
    return view('pages.degree.bachelor.bursary.ICL');
});
Route::get('/degree/bursary/SLF', function () {
    return view('pages.degree.bachelor.bursary.SLF');
});

Route::get('/degree/shouldKnow/1', function () {
    return view('pages.degree.bachelor.shouldKnow.1');
});
Route::get('/degree/shouldKnow/2', function () {
    return view('pages.degree.bachelor.shouldKnow.2');
});
Route::get('/degree/shouldKnow/3', function () {
    return view('pages.degree.bachelor.shouldKnow.3');
});
Route::get('/degree/shouldKnow/4', function () {
    return view('pages.degree.bachelor.shouldKnow.4');
});
Route::get('/degree/shouldKnow/5', function () {
    return view('pages.degree.bachelor.shouldKnow.5');
});
Route::get('/degree/shouldKnow/6', function () {
    return view('pages.degree.bachelor.shouldKnow.6');
});
Route::get('/degree/shouldKnow/7', function () {
    return view('pages.degree.bachelor.shouldKnow.7');
});

//     D E V E L O P M E N T   //

Route::get('/development/structure', function () {
    return view('pages.development.structure');
});
Route::get('/development/goal', function () {
    return view('pages.development.goal');
});
Route::get('/development/board', function () {
    return view('pages.development.board');
});
Route::get('/development/advisors', function () {
    return view('pages.development.advisors');
});
Route::get('/development/identity', function () {
    return view('pages.development.identity');
});
Route::get('/development/progress', function () {
    return view('pages.development.progress');
});
Route::get('/development/calendar', function () {
    return view('pages.development.calendar');
});
Route::get('/development/scholarship', function () {
    return view('pages.development.scholarship');
});
Route::get('/development/merit', function () {
    return view('pages.development.merit');
});
Route::get('/development/manual', function () {
    return view('pages.development.manual');
});
Route::get('/development/contact', function () {
    return view('pages.development.contact');
});
Route::get('/development/alumnus', function () {
    return view('pages.development.alumnus');
});







//     D R G R E E  P H D    //
Route::get('/degree/phd', function () {
    return view('pages.degree.phd.index');
});
Route::get('/degree/phd/curriculum', function () {
    return view('pages.degree.phd.curriculum');
});
Route::get('/degree/phd/selective', function () {
    return view('pages.degree.phd.selective');
});
Route::get('/degree/phd/rules', function () {
    return view('pages.degree.phd.rules');
});


//     A R T I C L E S     //
Route::get('/articles', function () {
    return view('pages.articles.index');
});

Route::get('/degree/master', function () {
    return view('pages.degree.master.index');
});


Route::get('/test', function () {
    return view('test.index');
});



// O f f i c e S e c r e r a r i a t


// O f f i c e S e c r e r a r i a t   G a l l e r y

Route::get('/OfficeSecrerariat/gallery', function () {
    return view('pages.OfficeSecrerariat.gallery.index');
});

Route::get('/OfficeSecrerariat/gallery/activity1', function () {
    return view('pages.OfficeSecrerariat.gallery.activity1');
});
Route::get('/OfficeSecrerariat/gallery/activity2', function () {
    return view('pages.OfficeSecrerariat.gallery.activity2');
});
Route::get('/OfficeSecrerariat/gallery/activity3', function () {
    return view('pages.OfficeSecrerariat.gallery.activity3');
});
Route::get('/OfficeSecrerariat/gallery/activity4', function () {
    return view('pages.OfficeSecrerariat.gallery.activity4');
});

// M a n a g e A n d  H R
Route::get('/OfficeSecrerariat/ManageAndHr/Archives', function () {
    return view('pages.OfficeSecrerariat.ManageAndHr.Archives.index');
});

Route::get('/OfficeSecrerariat/ManageAndHr/BuildAndCar', function () {
    return view('pages.OfficeSecrerariat.ManageAndHr.BuildAndCar.index');
});


Route::get('/OfficeSecrerariat/ManageAndHr/GeneralAffairs', function () {
    return view('pages.OfficeSecrerariat.ManageAndHr.GeneralAffairs.index');
});

Route::get('/OfficeSecrerariat/ManageAndHr/MadePaper', function () {
    return view('pages.OfficeSecrerariat.ManageAndHr.MadePaper.index');
});

// End M a n a g e A n d  H R




// P l a n t s And B u d g e t s


Route::get('/OfficeSecrerariat/PlantsAndBudgets/Finance', function () {
    return view('pages.OfficeSecrerariat.PlantsAndBudgets.Finance.index');
});

Route::get('/OfficeSecrerariat/PlantsAndBudgets/Parcel', function () {
    return view('pages.OfficeSecrerariat.PlantsAndBudgets.Parcel.index');
});

Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan', function () {
    return view('pages.OfficeSecrerariat.PlantsAndBudgets.Budgetsplan.index');
});

Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning', function () {
    return view('pages.OfficeSecrerariat.PlantsAndBudgets.PolicyAndPlanning.index');
});

//End  P l a n t s And B u d g e t s






// T e c h n i c a l A n d Q u a l i t y I m p r o v e m e n t

Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation', function () {
    return view('pages.OfficeSecrerariat.TechnicalAndQualityImprovement.DevelopQualityEducation.index');
});

Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor', function () {
    return view('pages.OfficeSecrerariat.TechnicalAndQualityImprovement.EducationServiceBachelor.index');
});

Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster', function () {
    return view('pages.OfficeSecrerariat.TechnicalAndQualityImprovement.EducationServiceMaster.index');
});

Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd', function () {
    return view('pages.OfficeSecrerariat.TechnicalAndQualityImprovement.EducationServicePhd.index');
});


// End T e c h n i c a l A n d Q u a l i t y I m p r o v e m e n t

Route::get('/OfficeSecrerariat/InternationalAffair/Affair', function () {
    return view('pages.OfficeSecrerariat.InternationalAffair.Affair.index');
});

Route::get('/OfficeSecrerariat/InternationalAffair/Research', function () {
    return view('pages.OfficeSecrerariat.InternationalAffair.Research.index');
});



Route::get('/OfficeSecrerariat/news', function () {
    return view('pages.OfficeSecrerariat.news.index');
});
Route::get('/OfficeSecrerariat/news/news1', function () {
    return view('pages.OfficeSecrerariat.news.news1');
});

// I n t e r n a t i o n a l A f f a i r










// End  I n t e r n a t i o n a l A f f a i r



//     Q u a l i t y 
Route::get('/quality/board', function () {
    return view('pages.quality.board');
});
Route::get('/quality/quality', function () {
    return view('pages.quality.quality');
});
Route::get('/quality/assessment', function () {
    return view('pages.quality.assessment');
});
Route::get('/quality/result', function () {
    return view('pages.quality.result');
});

//     A c t i v i t y
Route::get('/activity/calendar', function () {
    return view('pages.activity.calendar');
});
Route::get('/activity/eventsOfMonth', function () {
    return view('pages.activity.eventsOfMonth');
});
Route::get('/activity/gallery', function () {
    return view('pages.activity.gallery');
});
Route::get('/activity/gallery/activity1', function () {
    return view('pages.activity.gallery.activity1');
});
Route::get('/activity/gallery/activity2', function () {
    return view('pages.activity.gallery.activity2');
});
Route::get('/activity/gallery/activity3', function () {
    return view('pages.activity.gallery.activity3');
});
Route::get('/activity/gallery/activity4', function () {
    return view('pages.activity.gallery.activity4');
});
Route::get('/activity/alumnus', function () {
    return view('pages.activity.alumnus');
});








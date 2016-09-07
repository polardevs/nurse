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



// I n t e r n a t i o n a l A f f a i r










// End  I n t e r n a t i o n a l A f f a i r

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
    return view('pages.officeSecrerariat.index');
});



Route::get('/news/student_news/', function () {
    return view('pages.news.studentNews');
});
Route::get('/news/student_fund/', function () {
    return view('pages.news.studentFund');
});
Route::get('/news/student_portfolio/', function () {
    return view('pages.news.studentPortfolio');
});
Route::get('/news/student_gallery/', function () {
    return view('pages.news.studentGallery');
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
Route::get('/development/shouldKnow', function () {
    return view('pages.development.shouldKnow.index');
});
Route::get('/development/shouldKnow/1', function () {
    return view('pages.development.shouldKnow.1');
});
Route::get('/development/shouldKnow/2', function () {
    return view('pages.development.shouldKnow.2');
});
Route::get('/development/shouldKnow/3', function () {
    return view('pages.development.shouldKnow.3');
});
Route::get('/development/shouldKnow/4', function () {
    return view('pages.development.shouldKnow.4');
});
Route::get('/development/shouldKnow/5', function () {
    return view('pages.development.shouldKnow.5');
});
Route::get('/development/shouldKnow/6', function () {
    return view('pages.development.shouldKnow.6');
});
Route::get('/development/shouldKnow/7', function () {
    return view('pages.development.shouldKnow.7');
});
Route::get('/development/bursary', function () {
    return view('pages.development.bursary.index');
});
Route::get('/development/bursary/faculty', function () {
    return view('pages.development.bursary.faculty');
});
Route::get('/development/bursary/university', function () {
    return view('pages.development.bursary.university');
});
Route::get('/development/bursary/hospital', function () {
    return view('pages.development.bursary.hospital');
});
Route::get('/development/bursary/employ', function () {
    return view('pages.development.bursary.employ');
});
Route::get('/development/bursary/ICL', function () {
    return view('pages.development.bursary.ICL');
});
Route::get('/development/bursary/SLF', function () {
    return view('pages.development.bursary.SLF');
});
Route::get('/development/healthCare', function () {
    return view('pages.development.healthCare.index');
});
Route::get('/development/healthCare/prophylactic', function () {
    return view('pages.development.healthCare.prophylactic');
});
Route::get('/development/healthCare/healthCare', function () {
    return view('pages.development.healthCare.healthCare');
});
Route::get('/development/healthCare/consultCare', function () {
    return view('pages.development.healthCare.consultCare');
});
Route::get('/development/suggestion', function () {
    return view('pages.development.advisors.index');
});
Route::get('/development/advisors/advisors', function () {
    return view('pages.development.advisors.advisors');
});
Route::get('/development/advisors/masterClass', function () {
    return view('pages.development.advisors.masterClass');
});
Route::get('/development/advisors/assistantLecturer', function () {
    return view('pages.development.advisors.assistantLecturer');
});

Route::get('/development/activity', function () {
    return view('pages.development.activity.index');
});
Route::get('/development/academic', function () {
    return view('pages.development.activity.academic');
});
Route::get('/development/sport', function () {
    return view('pages.development.activity.sport');
});
Route::get('/development/outreach', function () {
    return view('pages.development.activity.outreach');
});
Route::get('/development/ethics', function () {
    return view('pages.development.activity.ethics');
});
Route::get('/development/culture', function () {
    return view('pages.development.activity.culture');
});
Route::get('/development/gallery', function () {
    return view('pages.development.activity.gallery');
});
Route::get('/development/gallery/activity1', function () {
    return view('pages.development.activity.activity1');
});
Route::get('/development/gallery/activity2', function () {
    return view('pages.development.activity.activity2');
});
Route::get('/development/gallery/activity3', function () {
    return view('pages.development.activity.activity3');
});
Route::get('/development/gallery/activity4', function () {
    return view('pages.development.activity.activity4');
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
    return view('pages.officeSecrerariat.gallery.index');
});

Route::get('/OfficeSecrerariat/gallery/activity1', function () {
    return view('pages.officeSecrerariat.gallery.activity1');
});
Route::get('/OfficeSecrerariat/gallery/activity2', function () {
    return view('pages.officeSecrerariat.gallery.activity2');
});
Route::get('/OfficeSecrerariat/gallery/activity3', function () {
    return view('pages.officeSecrerariat.gallery.activity3');
});
Route::get('/OfficeSecrerariat/gallery/activity4', function () {
    return view('pages.officeSecrerariat.gallery.activity4');
});

// M a n a g e A n d  H R
Route::get('/OfficeSecrerariat/ManageAndHr/Archives', function () {
    return view('pages.officeSecrerariat.manageAndHr.archives.index');
});


Route::get('/OfficeSecrerariat/ManageAndHr/BuildAndCar', function () {
    return view('pages.officeSecrerariat.manageAndHr.buildAndCar.index');
});
Route::get('/OfficeSecrerariat/ManageAndHr/BuildAndCar/Forms/meetingRoom', function () {
    return view('pages.officeSecrerariat.manageAndHr.buildAndCar.forms.meetingRoom');
});
Route::get('/OfficeSecrerariat/ManageAndHr/BuildAndCar/Forms/car', function () {
    return view('pages.officeSecrerariat.manageAndHr.buildAndCar.forms.car');
});
Route::get('/OfficeSecrerariat/ManageAndHr/BuildAndCar/Schedule/meetingRoom', function () {
    return view('pages.officeSecrerariat.manageAndHr.buildAndCar.schedule.meetingRoom');
});
Route::get('/OfficeSecrerariat/ManageAndHr/BuildAndCar/Schedule/car', function () {
    return view('pages.officeSecrerariat.manageAndHr.buildAndCar.schedule.car');
});


Route::get('/OfficeSecrerariat/ManageAndHr/GeneralAffairs', function () {
    return view('pages.officeSecrerariat.manageAndHr.generalAffairs.index');
});
Route::get('/OfficeSecrerariat/ManageAndHr/GeneralAffairs/Rules/content1', function () {
    return view('pages.officeSecrerariat.manageAndHr.generalAffairs.rules.content1');
});
Route::get('/OfficeSecrerariat/ManageAndHr/GeneralAffairs/Rules/content2', function () {
    return view('pages.officeSecrerariat.manageAndHr.generalAffairs.rules.content2');
});

Route::get('/OfficeSecrerariat/ManageAndHr/GeneralAffairs/Advancement/content1', function () {
    return view('pages.officeSecrerariat.manageAndHr.generalAffairs.advancement.content1');
});
Route::get('/OfficeSecrerariat/ManageAndHr/GeneralAffairs/Advancement/content2', function () {
    return view('pages.officeSecrerariat.manageAndHr.generalAffairs.advancement.content2');
});

Route::get('/OfficeSecrerariat/ManageAndHr/GeneralAffairs/Forms/', function () {
    return view('pages.officeSecrerariat.manageAndHr.generalAffairs.forms.index');
});

Route::get('/OfficeSecrerariat/ManageAndHr/MadePaper', function () {
    return view('pages.officeSecrerariat.manageAndHr.madePaper.index');
});
Route::get('/OfficeSecrerariat/ManageAndHr/MadePaper/copying', function () {
    return view('pages.officeSecrerariat.manageAndHr.madePaper.copying');
});
Route::get('/OfficeSecrerariat/ManageAndHr/MadePaper/snack', function () {
    return view('pages.officeSecrerariat.manageAndHr.madePaper.snack');
});

Route::get('/OfficeSecrerariat/ManageAndHr/Jobs', function () {
    return view('pages.officeSecrerariat.manageAndHr.jobs.index');
});

// End M a n a g e A n d  H R




// P l a n t s And B u d g e t s


Route::get('/OfficeSecrerariat/PlantsAndBudgets/Finance', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.finance.index');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Finance/budgets', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.finance.budgets');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Finance/rule', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.finance.rule');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Finance/download', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.finance.download');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Finance/news', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.finance.news');
});


Route::get('/OfficeSecrerariat/PlantsAndBudgets/Parcel', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.parcel.index');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Parcel/rule', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.parcel.rule');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Parcel/download', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.parcel.download');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Parcel/news', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.parcel.news');
});

Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.index');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan/system', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.system');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan/table', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.table');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan/schedule', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.schedule');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan/form', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.form');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan/otherNews', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.otherNews');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan/news', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.news');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/Budgetsplan/report', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.budgetsplan.report');
});

Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.policyAndPlanning.index');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning/manual', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.policyAndPlanning.manual');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning/plan', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.policyAndPlanning.plan');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning/calendar', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.policyAndPlanning.calendar');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning/detail', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.policyAndPlanning.detail');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning/news', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.policyAndPlanning.news');
});
Route::get('/OfficeSecrerariat/PlantsAndBudgets/PolicyAndPlanning/report', function () {
    return view('pages.officeSecrerariat.plantsAndBudgets.policyAndPlanning.report');
});

//End  P l a n t s And B u d g e t s

// A c a d e m i c
Route::get('/OfficeSecrerariat/Academic/Bachelor', function () {
    return view('pages.officeSecrerariat.academic.bachelor');
});
Route::get('/OfficeSecrerariat/Academic/Graduate', function () {
    return view('pages.officeSecrerariat.academic.graduate');
});
Route::get('/OfficeSecrerariat/Academic/Affairs', function () {
    return view('pages.officeSecrerariat.academic.affairs');
});
Route::get('/OfficeSecrerariat/Academic/IT', function () {
    return view('pages.officeSecrerariat.academic.it');
});





// T e c h n i c a l A n d Q u a l i t y I m p r o v e m e n t

Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.index');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/insurance', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.insurance');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/ska', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.ska');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/certification', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.certification');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/aun', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.aun');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/sar', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.sar');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/tuOnline', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.tuOnline');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/cheOnline', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.cheOnline');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/qsRanking', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.qsRanking');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/DevelopQualityEducation/assessment', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.developQualityEducation.assessment');
});



Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.index');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/plan', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.plan');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/gallery', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.gallery.index');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/gallery/activity1', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.gallery.activity1');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/gallery/activity2', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.gallery.activity2');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/gallery/activity3', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.gallery.activity3');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/gallery/activity4', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.gallery.activity4');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/board', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.board');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/Form/teacher', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.form.teacher');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/Form/student', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.form.student');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/Download/teacher', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.download.teacher');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/Download/student', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.download.student');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceBachelor/contact', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceBachelor.contact');
});




Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.index');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/plan', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.plan');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.gallery.index');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity1', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.gallery.activity1');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity2', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.gallery.activity2');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity3', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.gallery.activity3');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/gallery/activity4', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.gallery.activity4');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/board', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.board');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/Form/teacher', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.form.teacher');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/Form/student', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.form.student');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/Download/teacher', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.download.teacher');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/Download/student', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.download.student');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServiceMaster/contact', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.contact');
});


Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.index');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/plan', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.plan');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/gallery', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.gallery.index');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/gallery/activity1', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.gallery.activity1');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/gallery/activity2', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.gallery.activity2');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/gallery/activity3', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.gallery.activity3');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/gallery/activity4', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.gallery.activity4');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/board', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.board');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/Form/teacher', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.form.teacher');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/Form/student', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.form.student');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/Download/teacher', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.download.teacher');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/Download/student', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServicePhd.download.student');
});
Route::get('/OfficeSecrerariat/TechnicalAndQualityImprovement/EducationServicePhd/contact', function () {
    return view('pages.officeSecrerariat.technicalAndQualityImprovement.educationServiceMaster.contact');
});


// End T e c h n i c a l A n d Q u a l i t y I m p r o v e m e n t

Route::get('/OfficeSecrerariat/InternationalAffair/Affair', function () {
    return view('pages.officeSecrerariat.internationalAffair.affair.index');
});

Route::get('/OfficeSecrerariat/InternationalAffair/Research', function () {
    return view('pages.officeSecrerariat.internationalAffair.research.index');
});
Route::get('/OfficeSecrerariat/InternationalAffair/media', function () {
    return view('pages.officeSecrerariat.internationalAffair.media.index');
});


Route::get('/OfficeSecrerariat/news', function () {
    return view('pages.officeSecrerariat.news.index');
});
Route::get('/OfficeSecrerariat/news/news1', function () {
    return view('pages.officeSecrerariat.news.news1');
});

Route::get('/OfficeSecrerariat/calendar', function () {
    return view('pages.officeSecrerariat.calendar');
});
Route::get('/OfficeSecrerariat/download', function () {
    return view('pages.officeSecrerariat.download');
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

Route::get('/managementEducation', function () {
    return view('pages.education.index');
});
Route::get('/socialServices', function () {
    return view('pages.socialServices.index');
});
Route::get('/thammasatUniversity', function () {
    return view('pages.thammasatUniversity.index');
});


Route::get('/projectKm', function () {
    return view('pages.projectKm.index');
});
Route::get('/projectKm/1', function () {
    return view('pages.projectKm.1');
});
Route::get('/projectKm/2', function () {
    return view('pages.projectKm.2');
});
Route::get('/projectKm/3', function () {
    return view('pages.projectKm.3');
});
Route::get('/projectKm/4', function () {
    return view('pages.projectKm.4');
});
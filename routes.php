//avatar upload
Route::post('/uploading-file-api', [\App\Http\Controllers\HomeController::class, 'uploadAvatar'])->name('upload_avatar');

Route::post('/general_settings', [\App\Http\Controllers\HomeController::class, 'getSettings'])->name('get_settings');

//location
Route::post('/countries/list', [\App\Http\Controllers\HomeController::class, 'getCountries'])->name('countries');
Route::post('/districts/list', [\App\Http\Controllers\HomeController::class, 'getDistricts'])->name('districts');


//candidates
Route::post('/featured-candidates', [\App\Http\Controllers\CandidateController::class, 'getFeaturedCandidates'])->name('get_featured_candidates');
Route::post('/candidates/list', [\App\Http\Controllers\CandidateController::class, 'getCandidates'])->name('get_candidates');

//candidate profile
Route::post('/update-candidate-profile', [\App\Http\Controllers\CandidateController::class, 'updateProfile'])->name('update_profile');
Route::post('/update-candidate-profile-address', [\App\Http\Controllers\CandidateController::class, 'updateProfileAddress'])->name('update_profile_address');

//employers
Route::post('/employers/list', [\App\Http\Controllers\EmployerController::class, 'getEmployers'])->name('get_employers');
Route::post('/featured-employers', [\App\Http\Controllers\EmployerController::class, 'getFeaturedEmployers'])->name('get_featured_employers');
Route::post('/employee-details', [\App\Http\Controllers\EmployerController::class, 'getEmployerById'])->name('get_employee');

//list data of sectors and others
Route::post('/sectors', [\App\Http\Controllers\HomeController::class, 'sectors'])->name('sectors');
Route::post('/all-sectors', [\App\Http\Controllers\HomeController::class, 'allSectors'])->name('all_sectors');
Route::post('/industry/list', [\App\Http\Controllers\HomeController::class, 'getIndustries'])->name('get_industries');


//Payments
Route::post('/payment-config', [\App\Http\Controllers\PaymentController::class, 'getPaymentConfig']);

Route::post('/profile-data', [\App\Http\Controllers\HomeController::class, 'getProfile'])->name('get_profile');

//job attributes
Route::post('/job-shifts/list', [\App\Http\Controllers\HomeController::class, 'getJobShifts'])->name('shifts');
Route::post('/job-types/list', [\App\Http\Controllers\HomeController::class, 'getJobTypes'])->name('types');
Route::post('/salary-periods/list', [\App\Http\Controllers\HomeController::class, 'getSalaryPeriods'])->name('salary_periods');
Route::post('/experiences/list', [\App\Http\Controllers\HomeController::class, 'getExperiences'])->name('experiences');
Route::post('/job-levels/list', [\App\Http\Controllers\HomeController::class, 'getJobLevels'])->name('job_levels');
Route::post('/job-create', [\App\Http\Controllers\Admin\JobController::class, 'createJob'])->name('jobs_create');


//Packages
Route::post('/packages/list', [\App\Http\Controllers\HomeController::class, 'getPackages'])->name('packages');
Route::post('/user-subscription/package', [\App\Http\Controllers\SubscriptionController::class, 'getUserPackages'])->name('get_user_packages');

//subscribe
Route::post('/subscribe/package', [\App\Http\Controllers\SubscriptionController::class, 'subscribe'])->name('subscribe');


//Resume Builder
Route::post('/update-cover-letter', [\App\Http\Controllers\ResumeController::class, 'updateCoverLetter'])->name('update_cover_letter');
Route::post('/education-levels', [\App\Http\Controllers\ResumeController::class, 'getEducationsLevel'])->name('educations_level');
Route::post('/degree-titles', [\App\Http\Controllers\ResumeController::class, 'getDegreeByEducation'])->name('degree_titles');
Route::post('/results', [\App\Http\Controllers\ResumeController::class, 'getResultList'])->name('results');
Route::post('/years', [\App\Http\Controllers\ResumeController::class, 'getYearsList'])->name('years');


//education
Route::post('/add-education', [\App\Http\Controllers\ResumeController::class, 'educationStore'])->name('add_education');
Route::post('/user-educations', [\App\Http\Controllers\ResumeController::class, 'getUserEducations'])->name('usr_educations');

//Experience
Route::post('/update-experiences', [\App\Http\Controllers\ResumeController::class, 'experienceUpdate'])->name('user_experiences_update');
Route::post('/add-experiences', [\App\Http\Controllers\ResumeController::class, 'experienceStore'])->name('user_experiences_store');
Route::post('/user-experiences', [\App\Http\Controllers\ResumeController::class, 'getUserExperiences'])->name('usr_experiences');
Route::post('/get-experience', [\App\Http\Controllers\ResumeController::class, 'getUserExperienceById'])->name('get_user_experience');

//skill
Route::post('/add-user-skill', [\App\Http\Controllers\ResumeController::class, 'userSkillStore'])->name('add_user_skill');
Route::post('/get-user-skill', [\App\Http\Controllers\ResumeController::class, 'getSkill'])->name('get_user_skill');

Route::post('/update-employer-profile', [\App\Http\Controllers\EmployerController::class, 'updateProfile'])->name('employer_profile');
Route::post('/how-to-use', [\App\Http\Controllers\HomeController::class, 'getHowToUse']);
Route::post('/why-choose-us', [\App\Http\Controllers\HomeController::class, 'getWhyChooseUs']);
Route::post('/testimonials', [\App\Http\Controllers\HomeController::class, 'getTestimonials']);

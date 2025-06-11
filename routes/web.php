<?php
use App\Http\Controllers\{WelcomeController, AboutController, ContactController, RodoController, StatuteController, FaqsController, CookiesController, 
    Error404Controller, Error403Controller, ClassesController, MyClassesController, ClassCreateController, ClassDetailsController, ClassRegisterDetailsController, 
    ClassManagingController, PresenceController, LoginController, RegisterController, PasswordResetController, PasswordResetAfterEmailController,
    AccountController, AccountUpdateController, AdminUsersController, AdminCreateUserController, KidsController, ClassMembersController};

use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
Route::post('/welcome', [WelcomeController::class, 'send'])->name('welcome.send');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/rodo', [RodoController::class, 'index'])->name('rodo');
Route::get('/statute', [StatuteController::class, 'index'])->name('statute');
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');
Route::get('/cookies', [CookiesController::class, 'index'])->name('cookies');
Route::get('/404', [Error404Controller::class, 'index'])->name('404');
Route::get('/403', [Error403Controller::class, 'index'])->name('403');
Route::get('/classes', [ClassesController::class, 'index'])->name('classes');
Route::get('/class-register-details/{id}', [ClassesController::class, 'show'])->name('class.register.details');
Route::get('/class-register-details', [ClassRegisterDetailsController::class, 'index'])->name('class-register-details');
Route::get('/class-register-details/{id}', [ClassRegisterDetailsController::class, 'show'])->name('class.register.details');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/password-reset', [PasswordResetController::class, 'index'])->name('password-reset');
Route::get('/password-reset-after-email', [PasswordResetAfterEmailController::class, 'index'])->name('password-reset-after-email');
Route::get('/password-reset-sent', function () {return view('auth.password-reset-sent');})->name('password-reset.sent');

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/class-details', [ClassDetailsController::class, 'index'])->name('class-details');
    Route::get('/class-details/{id}', [ClassDetailsController::class, 'show'])->name('class-details.show');
    Route::post('/class-details/{classId}/unsubscribe', [ClassDetailsController::class, 'unsubscribe'])->name('class-details.unsubscribe');
    Route::post('/classes/{id}/register', [ClassRegisterDetailsController::class, 'store'])->name('class-register.store');
    Route::get('/kids', [KidsController::class, 'index'])->name('kids.index');
    Route::post('/kids', [KidsController::class, 'store'])->name('kids.store');
});

Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/class-create', [ClassCreateController::class, 'index'])->name('class-create');
    Route::post('/class-create', [ClassCreateController::class, 'store'])->name('class.store');
    Route::get('/class-managing/{class}', [ClassManagingController::class, 'index'])->name('class-managing.index');
    Route::post('/class-managing/{class}/update-schedule', [ClassManagingController::class, 'updateSchedule'])->name('class-managing.updateSchedule');
    Route::post('/class-managing/{class}/add-lesson', [ClassManagingController::class, 'addLesson'])->name('class-managing.addLesson');
    Route::delete('/class-managing/{class}', [ClassManagingController::class, 'destroy'])->name('class-managing.destroy');
    Route::get('/class-managing/{class}/students', [ClassManagingController::class, 'students'])->name('class-managing.students');
    Route::get('/presence/{schedule}', [PresenceController::class, 'show'])->name('presence.show');
    Route::post('/presence/{schedule}', [PresenceController::class, 'save'])->name('presence.save');
    Route::post('/presence', [PresenceController::class, 'show'])->name('presence');
    Route::get('/lesson-report/{schedule}', [ClassManagingController::class, 'lessonReport'])->name('lesson.report');
    Route::get('/class-members/{class}', [ClassMembersController::class, 'members'])->name('class-members.members');
    Route::post('/class-members/{class}/move-to-group/{member}', [ClassMembersController::class, 'moveToGroup'])->name('class-members.moveToGroup');
    Route::delete('/class-members/{class}/remove-member/{member}', [ClassMembersController::class, 'removeMember'])->name('class-members.removeMember');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin/users')->name('admin.users.')->group(function () {
        Route::get('/', [AdminUsersController::class, 'index'])->name('index');
        Route::get('/{user}', [AdminUsersController::class, 'show'])->name('show');
        Route::get('/{user}/edit', [AdminUsersController::class, 'edit'])->name('edit');
        Route::delete('/{user}', [AdminUsersController::class, 'destroy'])->name('destroy');
        Route::put('/{user}', [AdminUsersController::class, 'update'])->name('update');
    });
    Route::get('/admin-create-user', [AdminCreateUserController::class, 'index'])->name('admin-create-user');
    Route::post('/admin-create-user', [AdminCreateUserController::class, 'store'])->name('admin-create-user.store');
});

Route::middleware(['auth', 'role:user,teacher'])->group(function () {
    Route::get('/my-classes', [MyClassesController::class, 'index'])->name('my-classes');
});

Route::middleware(['auth', 'role:user,teacher,admin'])->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::get('/account/update', [AccountUpdateController::class, 'index'])->name('account-update');
    Route::put('/account/update', [AccountUpdateController::class, 'update']);
});

//Route::get('/class-managing', [ClassManagingController::class, 'index'])->name('class-managing');

require __DIR__.'/auth.php';

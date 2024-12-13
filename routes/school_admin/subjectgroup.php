<?php

use App\Http\Controllers\SchoolAdmin\SubjectGroupController;
use App\Http\Controllers\SchoolAdmin\SubjectTeacherController;

Route::resource('subject-groups', SubjectGroupController::class);
Route::post('subject-groups/get', [SubjectGroupController::class, 'getAllSubjectsGroup'])->name('subject-groups.get');

Route::prefix('subject-teachers')->group(function () {
    Route::get('assign/{subjectGroupId}/{classId}/{sectionId}', [SubjectTeacherController::class, 'assignTeachers'])
    ->name('subject-teachers.assign');
    Route::post('/store', [SubjectTeacherController::class, 'storeAssignTeachers'])->name('subject-teachers.store');
    Route::get('/data/{subjectGroupId}', [SubjectTeacherController::class, 'getAssignedTeachers'])->name('subject-teachers.data');
    Route::get('/edit/{id}', [SubjectTeacherController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [SubjectTeacherController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [SubjectTeacherController::class, 'destroy'])->name('delete');
    Route::get('/class-section', [SubjectTeacherController::class, 'index'])->name('class.section');
    Route::post('/get-sections', [SubjectTeacherController::class, 'getSections'])->name('get.sections');

});

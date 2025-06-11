<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('RoleID');
            $table->string('RoleName', 100);
            $table->boolean('Active')->default(true);
            $table->dateTime('DateAdd')->useCurrent();
            $table->date('ActiveTo')->nullable();
        });

        Schema::create('users_roles', function (Blueprint $table) {
            $table->id('UserRoleID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('RoleID');
            $table->dateTime('DateAssignment')->useCurrent();
            $table->dateTime('DateRevoke')->nullable();

            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreign('RoleID')->references('RoleID')->on('roles');
        });

        Schema::create('events_news', function (Blueprint $table) {
            $table->id('PostID');
            $table->unsignedBigInteger('UserID');
            $table->string('Title');
            $table->string('MainPhoto')->nullable();
            $table->text('Description')->nullable();
            $table->date('DateEvent')->nullable();
            $table->enum('Type', ['Event', 'News']);

            $table->foreign('UserID')->references('UserID')->on('users');
        });

        Schema::create('gallery', function (Blueprint $table) {
            $table->id('PhotoID');
            $table->unsignedBigInteger('PostID');
            $table->string('PhotoName')->nullable();

            $table->foreign('PostID')->references('PostID')->on('events_news');
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->id('ClassID');
            $table->string('Title');
            $table->string('MainPhoto')->nullable();
            $table->text('Description')->nullable();
            $table->integer('MaxAttendees')->default(0);
            $table->integer('CurrentAttendees')->default(0);
            $table->integer('TotalRegistered')->default(0);
        });

        Schema::create('classes_members', function (Blueprint $table) {
            $table->id('MemberID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('ClassID');

            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreign('ClassID')->references('ClassID')->on('classes');
        });

        Schema::create('schedule', function (Blueprint $table) {
            $table->id('ScheduleID');
            $table->unsignedBigInteger('ClassID');
            $table->date('Date');
            $table->time('StartTime');
            $table->time('EndTime');

            $table->foreign('ClassID')->references('ClassID')->on('classes');
        });

        Schema::create('attendance', function (Blueprint $table) {
            $table->id('AttendanceID');
            $table->unsignedBigInteger('MemberID');
            $table->unsignedBigInteger('ScheduleID');
            $table->enum('Attendance', ['Present', 'Absent']);

            $table->foreign('MemberID')->references('MemberID')->on('classes_members');
            $table->foreign('ScheduleID')->references('ScheduleID')->on('schedule');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendance');
        Schema::dropIfExists('schedule');
        Schema::dropIfExists('classes_members');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('gallery');
        Schema::dropIfExists('events_news');
        Schema::dropIfExists('users_roles');
        Schema::dropIfExists('roles');
    }
};

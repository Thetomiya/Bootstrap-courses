<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Practice;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showController extends Controller
{
    public function showLessonsList()
    {
        $pageTitle = 'Основы адаптивной верстки на Bootstrap';
        return view('lessonsList', compact('pageTitle'));
    }

    public function showTestsList()
    {
        $pageTitle = 'Тесты';
        return view('testsList', compact('pageTitle'));
    }

    public function showGame()
    {
        $pageTitle = 'Интерактив';
        return view('pairs', compact('pageTitle'));
    }

    public function showPracticeList()
    {
        $pageTitle = 'Практика';
        return view('practiceList', compact('pageTitle'));
    }

    public function showPractice(Practice $practice)
    {
        $pageTitle = $practice->title;
        return view('practice', compact('practice', 'pageTitle'));
    }

    public function showLoginForm()
    {
        Auth::logout();
        $pageTitle = 'Войти в профиль';
        return view('login', compact('pageTitle'));
    }

    public function showRegistrationForm()
    {
        Auth::logout();
        $pageTitle = 'Зарегистрироваться';
        return view('registration', compact('pageTitle'));
    }

    public function showProfile()
    {
        $user = Auth::user();
        $pageTitle = 'Профиль';
        return view('profile', compact('pageTitle', 'user'));
    }

    public function showLesson(Lesson $lesson)
    {
        $pageTitle = $lesson->title;
        return view('lesson', compact('lesson', 'pageTitle'));
    }

    public function showTest($testNum)
    {
        $testContent = Test::find($testNum);
        $pageTitle = "Тест по модулю {$testContent->module}";
        return view('test', compact( 'pageTitle', 'testContent'));
    }
}

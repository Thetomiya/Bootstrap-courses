<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class testHandlerController extends Controller
{
    public function testHandle(Request $request)
    {
        $module = $request->input('module');
        $rightAnswers = Test::where('module', $module)->value('answer');
        $rightAnswers = base64_decode($rightAnswers);




        $rightAnswers = explode(" ", $rightAnswers);
        $userAnswer = [
            $request->input('question-1'),
            $request->input('question-2'),
            $request->input('question-3'),
            $request->input('question-4'),
            $request->input('question-5'),
            $request->input('question-6'),
            $request->input('question-7'),
            $request->input('question-8'),
            $request->input('question-9'),
            $request->input('question-10'),
            $request->input('question-11'),
            $request->input('question-12'),
            $request->input('question-13'),
            $request->input('question-14'),
            $request->input('question-15'),
            $request->input('question-16'),
            $request->input('question-17'),
            $request->input('question-18'),
            $request->input('question-19'),
            $request->input('question-20'),

        ];
        $userMultiAnswers = [
            $request->input('question-21') ?? [],
            $request->input('question-22') ?? [],
            $request->input('question-23') ?? [],
        ];


        $correctAnswers = 0;
        foreach ($rightAnswers as $rAnswer) {
            foreach ($userAnswer as $uAnswer) {
                $uAnswer = strtolower(str_replace(' ', '', $uAnswer));
                if ($rAnswer == $uAnswer) {
                    $correctAnswers = $correctAnswers + 1;
                    break;
                }
            }
        }


        foreach ($rightAnswers as $rAnswer) {
            foreach ($userMultiAnswers as $uMultiAnswer) {
                sort($uMultiAnswer);
                $uMultiAnswer = implode(',', $uMultiAnswer);


                if ($rAnswer == $uMultiAnswer) {
                    $correctAnswers = $correctAnswers + 1;
                    break;
                }
            }
        }


        $mark = 2;
        if (($correctAnswers >= 12) && ($correctAnswers < 17)) $mark = 3;
        if (($correctAnswers >= 17) && ($correctAnswers < 21)) $mark = 4;
        if ($correctAnswers >= 21) $mark = 5;


        $user = Auth::user();
        if ($module == 1) {
            if ($mark > $user->module_1_mark) {
                $user->module_1_mark = $mark;
                $user->save();

            }
        }
        if ($module == 2) {
            if ($mark > $user->module_2_mark) {
                $user->module_2_mark = $mark;
                $user->save();

            }
        }
        if ($module == 3) {
            if ($mark > $user->module_3_mark) {
                $user->module_3_mark = $mark;
                $user->save();

            }
        }

        return redirect('profile')->with([
            'mark' => $mark,
            'answers' => $correctAnswers
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class changeNameController extends Controller
{
    public function __invoke(Request $request)
    {
        // TODO: Implement __invoke() method.
        $user = Auth::user();

        $messages = [
            'edited-name.required' => 'ФИО не может быть пустым.',
            'edited-name.string' => 'Поле "ФИО" должно быть строкой.',
            'edited-name.regex' => 'Поле "ФИО" должно содержать фамилию имя и отчество по примеру "Иванов Иван Иванович".',
        ];
        $data = $request->validate([
            'edited-name' => 'required|string|regex:/^[А-Яа-яA-Za-z]{2,30}+\s[А-Яа-яA-Za-z]{2,30}+\s[А-Яа-яA-Za-z]{2,30}+$/u',
        ], $messages);
        $user->full_name = $data['edited-name'];
        $user->save();
        return redirect()->route('profile');
    }
}

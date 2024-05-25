<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function registration(Request $request)
    {
        Auth::logout();
        $messages = [
            'full_name.required' => 'Поле "ФИО" обязательно для заполнения.',
            'full_name.string' => 'Поле "ФИО" должно быть строкой.',
            'full_name.regex' => 'Поле "ФИО" должно содержать фамилию имя и отчество по примеру "Иванов Иван Иванович".',
            'email.required' => 'Адрес электронной почты обязателен для заполнения.',
            'email.email' => 'Неправильный формат почты.',
            'email.unique' => 'Такая почта уже зарегистрирована.',
            'password.required' => 'Поле "Пароль" обязательно для заполнения.',
            'password.min' => 'Пароль должен содержать минимум 8 символов.',
            'password.regex' => 'Пароль должен содержать минимум 8 символов латинского алфавита и совмещать в себе маленькие и большие символы, цифры а так же спецсимволы.',
            'passwordConfirm.required' => 'Поле обязательно для заполнения.',
            'passwordConfirm.same' => 'Пароли не совпадают.',
        ];

        $data = $request->validate([
            'full_name' => 'required|string|regex:/^[А-Яа-яA-Za-z]{2,30}\s[А-Яа-яA-Za-z]{2,30}\s?[А-Яа-яA-Za-z]{2,30}?$/u',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'passwordConfirm' => 'required|same:password',
        ], $messages);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        if ($user) {
            Auth::login($user);
            return redirect()->route('profile');
        }
        return redirect()->route('registrationPage')->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя',
        ]);

    }

    public function login(Request $request)
    {
        Auth::logout();

        $data = $request->only(['email', 'password']);
        if (Auth::attempt($data)) {
            return redirect()->route('profile');
        }
        return redirect()->route('login')->withErrors([
            'error' => 'Неверная почта или пароль',
        ])->withInput();
    }
}

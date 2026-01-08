<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // Tampilkan halaman form login
        return view('auth/login');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // CREDENTIAL ADMIN SEDERHANA (UNTUK TUGAS SAJA)
        $validUsername = 'ibam';
        $validPassword = 'ibam321';

        if ($username === $validUsername && $password === $validPassword) {
            // Set session kalau login berhasil
            $session = session();
            $session->set([
                'isLoggedIn' => true,
                'username'   => $username,
            ]);

            return redirect()->to('/admin/services');
        }

        // Login gagal
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

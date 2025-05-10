<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user() === null) {
            return redirect()->route('login');
        }

        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard').'?verified=1');
        }

        if ($user->markEmailAsVerified()) {
            /** @var MustVerifyEmail $user */
            event(new Verified($user));
        }

        return redirect()->intended(route('dashboard').'?verified=1');
    }
}

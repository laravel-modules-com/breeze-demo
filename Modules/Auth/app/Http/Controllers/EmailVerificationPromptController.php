<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    public function __invoke(Request $request): RedirectResponse|View
    {
        /** @var \App\Models\User $user */
        $user = $request->user();

        return $user->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard'))
                    : view('auth::verify-email');
    }
}

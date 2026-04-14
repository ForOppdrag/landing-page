<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): RedirectResponse
    {
        $this->guardAgainstSpam($request);

        $request->validateWithBag('newsletter', [
            'newsletter_email' => ['required', 'email:rfc,filter', 'max:255'],
        ]);

        return back()->with('newsletter_success', 'Merci. Votre inscription a bien été prise en compte.');
    }

    private function guardAgainstSpam(Request $request): void
    {
        $request->validateWithBag('newsletter', [
            'company_website' => ['nullable', 'max:0'],
            'form_started_at' => ['required', 'integer'],
        ]);

        $startedAt = (int) $request->input('form_started_at');
        $elapsed = now()->timestamp - $startedAt;

        if ($elapsed < 2 || $elapsed > 7200) {
            throw ValidationException::withMessages([
                'newsletter_email' => 'Soumission invalide. Merci de réessayer.',
            ])->errorBag('newsletter');
        }
    }
}

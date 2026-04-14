<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $this->guardAgainstSpam($request);

        $request->validateWithBag('contact', [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:rfc,filter', 'max:255'],
            'need' => [
                'required',
                'string',
                'max:255',
                Rule::in(['Mission freelance', 'Pack preuve de concept', 'Équipe dédiée pilotée', 'Autre besoin']),
            ],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ]);

        $data = [
            'name' => trim($request->string('name')->squish()->toString()),
            'email' => strtolower(trim($request->string('email')->toString())),
            'need' => trim($request->string('need')->squish()->toString()),
            'message' => trim($request->string('message')->toString()),
        ];

        Mail::send('emails.contact', $data, function ($mail) use ($data) {
            $mail->to('contact@oppdrag.tech')
                ->from('no-reply@oppdrag.tech', 'oppdrag.tech')
                ->replyTo($data['email'], $data['name'])
                ->subject('Nouveau message contact - oppdrag.tech');
        });

        return back()->with('success', 'Votre message a bien été envoyé.');
    }

    private function guardAgainstSpam(Request $request): void
    {
        $request->validateWithBag('contact', [
            'company_website' => ['nullable', 'max:0'],
            'form_started_at' => ['required', 'integer'],
        ]);

        $startedAt = (int) $request->input('form_started_at');
        $elapsed = now()->timestamp - $startedAt;

        if ($elapsed < 2 || $elapsed > 7200) {
            throw ValidationException::withMessages([
                'message' => 'Soumission invalide. Merci de réessayer.',
            ])->errorBag('contact');
        }
    }
}

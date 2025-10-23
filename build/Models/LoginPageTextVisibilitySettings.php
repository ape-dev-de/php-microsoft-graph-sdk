<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPageTextVisibilitySettings
 */
class LoginPageTextVisibilitySettings
{
    /** Option to hide the self-service password reset (SSPR) hyperlinks such as 'Can't access your account?', 'Forgot my password' and 'Reset it now' on the sign-in form. */
    public ?bool $hideAccountResetCredentials = null;

    /** Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form. */
    public ?bool $hideCannotAccessYourAccount = null;

    /** Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form. */
    public ?bool $hideForgotMyPassword = null;

    /** Option to hide the 'Privacy & Cookies' hyperlink in the footer. */
    public ?bool $hidePrivacyAndCookies = null;

    /** Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form. */
    public ?bool $hideResetItNow = null;

    /** Option to hide the 'Terms of Use' hyperlink in the footer. */
    public ?bool $hideTermsOfUse = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['hideAccountResetCredentials'])) {
            $this->hideAccountResetCredentials = $data['hideAccountResetCredentials'];
        }
        if (isset($data['hideCannotAccessYourAccount'])) {
            $this->hideCannotAccessYourAccount = $data['hideCannotAccessYourAccount'];
        }
        if (isset($data['hideForgotMyPassword'])) {
            $this->hideForgotMyPassword = $data['hideForgotMyPassword'];
        }
        if (isset($data['hidePrivacyAndCookies'])) {
            $this->hidePrivacyAndCookies = $data['hidePrivacyAndCookies'];
        }
        if (isset($data['hideResetItNow'])) {
            $this->hideResetItNow = $data['hideResetItNow'];
        }
        if (isset($data['hideTermsOfUse'])) {
            $this->hideTermsOfUse = $data['hideTermsOfUse'];
        }
    }
}

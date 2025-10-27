<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPageTextVisibilitySettings
 */
class LoginPageTextVisibilitySettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['hideAccountResetCredentials'])) {
            $this->hideAccountResetCredentials = is_bool($data['hideAccountResetCredentials']) ? $data['hideAccountResetCredentials'] : (bool)$data['hideAccountResetCredentials'];
        }
        if (isset($data['hideCannotAccessYourAccount'])) {
            $this->hideCannotAccessYourAccount = is_bool($data['hideCannotAccessYourAccount']) ? $data['hideCannotAccessYourAccount'] : (bool)$data['hideCannotAccessYourAccount'];
        }
        if (isset($data['hideForgotMyPassword'])) {
            $this->hideForgotMyPassword = is_bool($data['hideForgotMyPassword']) ? $data['hideForgotMyPassword'] : (bool)$data['hideForgotMyPassword'];
        }
        if (isset($data['hidePrivacyAndCookies'])) {
            $this->hidePrivacyAndCookies = is_bool($data['hidePrivacyAndCookies']) ? $data['hidePrivacyAndCookies'] : (bool)$data['hidePrivacyAndCookies'];
        }
        if (isset($data['hideResetItNow'])) {
            $this->hideResetItNow = is_bool($data['hideResetItNow']) ? $data['hideResetItNow'] : (bool)$data['hideResetItNow'];
        }
        if (isset($data['hideTermsOfUse'])) {
            $this->hideTermsOfUse = is_bool($data['hideTermsOfUse']) ? $data['hideTermsOfUse'] : (bool)$data['hideTermsOfUse'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

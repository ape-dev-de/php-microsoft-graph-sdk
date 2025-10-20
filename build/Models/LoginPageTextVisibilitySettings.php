<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPageTextVisibilitySettings
 */
class LoginPageTextVisibilitySettings
{
    /**
     * Option to hide the self-service password reset (SSPR) hyperlinks such as ''Can''t access your account?'', ''Forgot my password'' and ''Reset it now'' on the sign-in form.
     */
    private ?bool $hideAccountResetCredentials;

    /**
     * Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
     */
    private ?bool $hideCannotAccessYourAccount;

    /**
     * Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
     */
    private ?bool $hideForgotMyPassword;

    /**
     * Option to hide the 'Privacy & Cookies' hyperlink in the footer.
     */
    private ?bool $hidePrivacyAndCookies;

    /**
     * Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
     */
    private ?bool $hideResetItNow;

    /**
     * Option to hide the 'Terms of Use' hyperlink in the footer.
     */
    private ?string $hideTermsOfUse;

    public function getHideAccountResetCredentials(): ?bool
    {
        return $this->hideAccountResetCredentials;
    }

    public function setHideAccountResetCredentials(?bool $hideAccountResetCredentials): self
    {
        $this->hideAccountResetCredentials = $hideAccountResetCredentials;
        return $this;
    }

    public function getHideCannotAccessYourAccount(): ?bool
    {
        return $this->hideCannotAccessYourAccount;
    }

    public function setHideCannotAccessYourAccount(?bool $hideCannotAccessYourAccount): self
    {
        $this->hideCannotAccessYourAccount = $hideCannotAccessYourAccount;
        return $this;
    }

    public function getHideForgotMyPassword(): ?bool
    {
        return $this->hideForgotMyPassword;
    }

    public function setHideForgotMyPassword(?bool $hideForgotMyPassword): self
    {
        $this->hideForgotMyPassword = $hideForgotMyPassword;
        return $this;
    }

    public function getHidePrivacyAndCookies(): ?bool
    {
        return $this->hidePrivacyAndCookies;
    }

    public function setHidePrivacyAndCookies(?bool $hidePrivacyAndCookies): self
    {
        $this->hidePrivacyAndCookies = $hidePrivacyAndCookies;
        return $this;
    }

    public function getHideResetItNow(): ?bool
    {
        return $this->hideResetItNow;
    }

    public function setHideResetItNow(?bool $hideResetItNow): self
    {
        $this->hideResetItNow = $hideResetItNow;
        return $this;
    }

    public function getHideTermsOfUse(): ?string
    {
        return $this->hideTermsOfUse;
    }

    public function setHideTermsOfUse(?string $hideTermsOfUse): self
    {
        $this->hideTermsOfUse = $hideTermsOfUse;
        return $this;
    }

}

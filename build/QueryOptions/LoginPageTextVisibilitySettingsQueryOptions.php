<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LoginPageTextVisibilitySettings resources
 *
 * Available select fields:
 * - hideAccountResetCredentials
 * - hideCannotAccessYourAccount
 * - hideForgotMyPassword
 * - hidePrivacyAndCookies
 * - hideResetItNow
 * - hideTermsOfUse
 */
class LoginPageTextVisibilitySettingsQueryOptions extends QueryOptions
{
    public const FIELD_HIDE_ACCOUNT_RESET_CREDENTIALS = 'hideAccountResetCredentials';
    public const FIELD_HIDE_CANNOT_ACCESS_YOUR_ACCOUNT = 'hideCannotAccessYourAccount';
    public const FIELD_HIDE_FORGOT_MY_PASSWORD = 'hideForgotMyPassword';
    public const FIELD_HIDE_PRIVACY_AND_COOKIES = 'hidePrivacyAndCookies';
    public const FIELD_HIDE_RESET_IT_NOW = 'hideResetItNow';
    public const FIELD_HIDE_TERMS_OF_USE = 'hideTermsOfUse';

    /**
     * Select specific LoginPageTextVisibilitySettings properties
     * 
     * @param array<string> $select Use LoginPageTextVisibilitySettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Authentication resources
 *
 * Available select fields:
 * - emailMethods
 * - fido2Methods
 * - methods
 * - microsoftAuthenticatorMethods
 * - operations
 * - passwordMethods
 * - phoneMethods
 * - platformCredentialMethods
 * - softwareOathMethods
 * - temporaryAccessPassMethods
 * - windowsHelloForBusinessMethods
 */
class AuthenticationQueryOptions extends QueryOptions
{
    public const FIELD_EMAIL_METHODS = 'emailMethods';
    public const FIELD_FIDO2METHODS = 'fido2Methods';
    public const FIELD_METHODS = 'methods';
    public const FIELD_MICROSOFT_AUTHENTICATOR_METHODS = 'microsoftAuthenticatorMethods';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_PASSWORD_METHODS = 'passwordMethods';
    public const FIELD_PHONE_METHODS = 'phoneMethods';
    public const FIELD_PLATFORM_CREDENTIAL_METHODS = 'platformCredentialMethods';
    public const FIELD_SOFTWARE_OATH_METHODS = 'softwareOathMethods';
    public const FIELD_TEMPORARY_ACCESS_PASS_METHODS = 'temporaryAccessPassMethods';
    public const FIELD_WINDOWS_HELLO_FOR_BUSINESS_METHODS = 'windowsHelloForBusinessMethods';

    /**
     * Select specific Authentication properties
     * 
     * @param array<string> $select Use AuthenticationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

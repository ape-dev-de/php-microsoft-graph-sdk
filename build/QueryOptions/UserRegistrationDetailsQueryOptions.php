<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationDetails resources
 *
 * Available select fields:
 * - isAdmin
 * - isMfaCapable
 * - isMfaRegistered
 * - isPasswordlessCapable
 * - isSsprCapable
 * - isSsprEnabled
 * - isSsprRegistered
 * - isSystemPreferredAuthenticationMethodEnabled
 * - lastUpdatedDateTime
 * - methodsRegistered
 * - systemPreferredAuthenticationMethods
 * - userDisplayName
 * - userPreferredMethodForSecondaryAuthentication
 * - userPrincipalName
 * - userType
 */
class UserRegistrationDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserRegistrationDetails
     */
    public const FIELD_IS_ADMIN = 'isAdmin';
    public const FIELD_IS_MFA_CAPABLE = 'isMfaCapable';
    public const FIELD_IS_MFA_REGISTERED = 'isMfaRegistered';
    public const FIELD_IS_PASSWORDLESS_CAPABLE = 'isPasswordlessCapable';
    public const FIELD_IS_SSPR_CAPABLE = 'isSsprCapable';
    public const FIELD_IS_SSPR_ENABLED = 'isSsprEnabled';
    public const FIELD_IS_SSPR_REGISTERED = 'isSsprRegistered';
    public const FIELD_IS_SYSTEM_PREFERRED_AUTHENTICATION_METHOD_ENABLED = 'isSystemPreferredAuthenticationMethodEnabled';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_METHODS_REGISTERED = 'methodsRegistered';
    public const FIELD_SYSTEM_PREFERRED_AUTHENTICATION_METHODS = 'systemPreferredAuthenticationMethods';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_PREFERRED_METHOD_FOR_SECONDARY_AUTHENTICATION = 'userPreferredMethodForSecondaryAuthentication';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_USER_TYPE = 'userType';

    /**
     * Select specific UserRegistrationDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

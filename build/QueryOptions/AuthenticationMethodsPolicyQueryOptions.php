<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodsPolicy resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - lastModifiedDateTime
 * - policyMigrationState
 * - policyVersion
 * - reconfirmationInDays
 * - registrationEnforcement
 * - authenticationMethodConfigurations
 */
class AuthenticationMethodsPolicyQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_POLICY_MIGRATION_STATE = 'policyMigrationState';
    public const FIELD_POLICY_VERSION = 'policyVersion';
    public const FIELD_RECONFIRMATION_IN_DAYS = 'reconfirmationInDays';
    public const FIELD_REGISTRATION_ENFORCEMENT = 'registrationEnforcement';
    public const FIELD_AUTHENTICATION_METHOD_CONFIGURATIONS = 'authenticationMethodConfigurations';

    /**
     * Select specific AuthenticationMethodsPolicy properties
     * 
     * @param array<string> $select Use AuthenticationMethodsPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

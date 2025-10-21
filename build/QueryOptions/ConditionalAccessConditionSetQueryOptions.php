<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessConditionSet resources
 *
 * Available select fields:
 * - applications
 * - authenticationFlows
 * - clientApplications
 * - clientAppTypes
 * - devices
 * - insiderRiskLevels
 * - locations
 * - platforms
 * - servicePrincipalRiskLevels
 * - signInRiskLevels
 * - userRiskLevels
 * - users
 */
class ConditionalAccessConditionSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessConditionSet
     */
    public const FIELD_APPLICATIONS = 'applications';
    public const FIELD_AUTHENTICATION_FLOWS = 'authenticationFlows';
    public const FIELD_CLIENT_APPLICATIONS = 'clientApplications';
    public const FIELD_CLIENT_APP_TYPES = 'clientAppTypes';
    public const FIELD_DEVICES = 'devices';
    public const FIELD_INSIDER_RISK_LEVELS = 'insiderRiskLevels';
    public const FIELD_LOCATIONS = 'locations';
    public const FIELD_PLATFORMS = 'platforms';
    public const FIELD_SERVICE_PRINCIPAL_RISK_LEVELS = 'servicePrincipalRiskLevels';
    public const FIELD_SIGN_IN_RISK_LEVELS = 'signInRiskLevels';
    public const FIELD_USER_RISK_LEVELS = 'userRiskLevels';
    public const FIELD_USERS = 'users';

    /**
     * Select specific ConditionalAccessConditionSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

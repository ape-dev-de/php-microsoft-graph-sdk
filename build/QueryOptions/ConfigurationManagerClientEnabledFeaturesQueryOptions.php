<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConfigurationManagerClientEnabledFeatures resources
 *
 * Available select fields:
 * - compliancePolicy
 * - deviceConfiguration
 * - inventory
 * - modernApps
 * - resourceAccess
 * - windowsUpdateForBusiness
 */
class ConfigurationManagerClientEnabledFeaturesQueryOptions extends QueryOptions
{
    public const FIELD_COMPLIANCE_POLICY = 'compliancePolicy';
    public const FIELD_DEVICE_CONFIGURATION = 'deviceConfiguration';
    public const FIELD_INVENTORY = 'inventory';
    public const FIELD_MODERN_APPS = 'modernApps';
    public const FIELD_RESOURCE_ACCESS = 'resourceAccess';
    public const FIELD_WINDOWS_UPDATE_FOR_BUSINESS = 'windowsUpdateForBusiness';

    /**
     * Select specific ConfigurationManagerClientEnabledFeatures properties
     * 
     * @param array<string> $select Use ConfigurationManagerClientEnabledFeaturesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

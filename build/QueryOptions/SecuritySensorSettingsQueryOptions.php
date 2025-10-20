<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySensorSettings resources
 *
 * Available select fields:
 * - description
 * - domainControllerDnsNames
 * - isDelayedDeploymentEnabled
 * - networkAdapters
 */
class SecuritySensorSettingsQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DOMAIN_CONTROLLER_DNS_NAMES = 'domainControllerDnsNames';
    public const FIELD_IS_DELAYED_DEPLOYMENT_ENABLED = 'isDelayedDeploymentEnabled';
    public const FIELD_NETWORK_ADAPTERS = 'networkAdapters';

    /**
     * Select specific SecuritySensorSettings properties
     * 
     * @param array<string> $select Use SecuritySensorSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

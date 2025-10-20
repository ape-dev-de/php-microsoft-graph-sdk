<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityVmMetadata resources
 *
 * Available select fields:
 * - cloudProvider
 * - resourceId
 * - subscriptionId
 * - vmId
 */
class SecurityVmMetadataQueryOptions extends QueryOptions
{
    public const FIELD_CLOUD_PROVIDER = 'cloudProvider';
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_SUBSCRIPTION_ID = 'subscriptionId';
    public const FIELD_VM_ID = 'vmId';

    /**
     * Select specific SecurityVmMetadata properties
     * 
     * @param array<string> $select Use SecurityVmMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcSourceDeviceImage resources
 *
 * Available select fields:
 * - displayName
 * - resourceId
 * - subscriptionDisplayName
 * - subscriptionId
 */
class CloudPcSourceDeviceImageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcSourceDeviceImage
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_SUBSCRIPTION_DISPLAY_NAME = 'subscriptionDisplayName';
    public const FIELD_SUBSCRIPTION_ID = 'subscriptionId';

    /**
     * Select specific CloudPcSourceDeviceImage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

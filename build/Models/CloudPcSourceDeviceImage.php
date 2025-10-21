<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcSourceDeviceImage
 */
class CloudPcSourceDeviceImage
{
    public function __construct(
        /** The display name for the source image. Read-only. */
        public ?string $displayName = null,
        /** The fully qualified unique identifier (ID) of the source image resource in Azure. The ID format is: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'. Read-only. */
        public ?string $resourceId = null,
        /** The display name of the subscription that hosts the source image. Read-only. */
        public ?string $subscriptionDisplayName = null,
        /** The unique identifier (ID) of the subscription that hosts the source image. Read-only. */
        public ?string $subscriptionId = null
    ) {}
}

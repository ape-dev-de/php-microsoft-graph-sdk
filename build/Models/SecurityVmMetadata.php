<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityVmMetadata
 */
class SecurityVmMetadata
{
    public function __construct(
        /**  */
        public ?string $cloudProvider = null,
        /** Unique identifier of the Azure resource. */
        public ?string $resourceId = null,
        /** Unique identifier of the Azure subscription the customer tenant belongs to. */
        public ?string $subscriptionId = null,
        /** Unique identifier of the virtual machine instance. */
        public ?string $vmId = null
    ) {}
}

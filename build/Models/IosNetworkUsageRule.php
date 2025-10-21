<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosNetworkUsageRule
 */
class IosNetworkUsageRule
{
    public function __construct(
        /** If set to true, corresponding managed apps will not be allowed to use cellular data at any time. */
        public ?bool $cellularDataBlocked = null,
        /** If set to true, corresponding managed apps will not be allowed to use cellular data when roaming. */
        public ?bool $cellularDataBlockWhenRoaming = null,
        /** Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements. */
        public array $managedApps = []
    ) {}
}

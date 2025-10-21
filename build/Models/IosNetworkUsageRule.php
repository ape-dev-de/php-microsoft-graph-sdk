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
        /** @var string[] Network Usage Rules allow enterprises to specify how managed apps use networks, such as cellular data networks. */
        public array $managedApps = []
    ) {}
}

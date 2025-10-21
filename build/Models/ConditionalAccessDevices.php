<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessDevices
 */
class ConditionalAccessDevices
{
    public function __construct(
        /** Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them. */
        public ?ConditionalAccessFilter $deviceFilter = null
    ) {}
}

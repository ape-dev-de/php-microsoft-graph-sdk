<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DevicesFilter
 */
class DevicesFilter
{
    public function __construct(
        /** Determines whether devices that satisfy the rule should be allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue. */
        public ?string $mode = null,
        /** Defines the rule to filter the devices. For example, device.deviceAttribute2 -eq 'PrivilegedAccessWorkstation'. */
        public ?string $rule = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceMetadata
 */
class DeviceMetadata
{
    public function __construct(
        /** Optional. The general type of the device (for example, ''Managed'', ''Unmanaged''). */
        public ?string $deviceType = null,
        /** The Internet Protocol (IP) address of the device. */
        public ?string $ipAddress = null,
        /** Details about the operating system platform and version. */
        public ?string $operatingSystemSpecifications = null
    ) {}
}

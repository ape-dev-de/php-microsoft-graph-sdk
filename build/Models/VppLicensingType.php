<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppLicensingType
 */
class VppLicensingType
{
    public function __construct(
        /** Whether the program supports the device licensing type. */
        public ?bool $supportsDeviceLicensing = null,
        /** Contains properties for iOS Volume-Purchased Program (Vpp) Licensing Type. */
        public ?string $supportsUserLicensing = null
    ) {}
}

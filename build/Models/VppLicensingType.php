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
        /** Whether the program supports the user licensing type. */
        public ?bool $supportsUserLicensing = null
    ) {}
}

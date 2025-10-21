<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityVendorInformation
 */
class SecurityVendorInformation
{
    public function __construct(
        /** Specific provider (product/service - not vendor company); for example, WindowsDefenderATP. */
        public ?string $provider = null,
        /** Version of the provider or subprovider, if it exists, that generated the alert. Required */
        public ?string $providerVersion = null,
        /** Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen. */
        public ?string $subProvider = null,
        /** Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required */
        public ?string $vendor = null
    ) {}
}

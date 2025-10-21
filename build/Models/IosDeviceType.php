<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceType
 */
class IosDeviceType
{
    public function __construct(
        /** Whether the app should run on iPads. */
        public ?bool $iPad = null,
        /** Whether the app should run on iPhones and iPods. */
        public ?bool $iPhoneAndIPod = null
    ) {}
}

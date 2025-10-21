<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessApp
 */
class MicrosoftStoreForBusinessApp
{
    public function __construct(
        /**  */
        public ?string $licenseType = null,
        /** The app package identifier */
        public ?string $packageIdentityName = null,
        /** The app product key */
        public ?string $productKey = null,
        /** The total number of Microsoft Store for Business licenses. */
        public ?float $totalLicenseCount = null,
        /** Microsoft Store for Business Apps. This class does not support Create, Delete, or Update. */
        public ?string $usedLicenseCount = null
    ) {}
}

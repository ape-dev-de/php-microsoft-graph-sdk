<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EditionUpgradeConfiguration
 */
class EditionUpgradeConfiguration
{
    public function __construct(
        /** Edition Upgrade License File Content. */
        public ?string $license = null,
        /**  */
        public ?string $licenseType = null,
        /** Edition Upgrade Product Key. */
        public ?string $productKey = null,
        /** Windows 10 Edition Upgrade configuration. */
        public ?string $targetEdition = null
    ) {}
}

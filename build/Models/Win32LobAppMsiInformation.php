<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppMsiInformation
 */
class Win32LobAppMsiInformation
{
    public function __construct(
        /**  */
        public ?string $packageType = null,
        /** The MSI product code. */
        public ?string $productCode = null,
        /** The MSI product name. */
        public ?string $productName = null,
        /** The MSI product version. */
        public ?string $productVersion = null,
        /** The MSI publisher. */
        public ?string $publisher = null,
        /** Whether the MSI app requires the machine to reboot to complete installation. */
        public ?bool $requiresReboot = null,
        /** Contains MSI app properties for a Win32 App. */
        public ?string $upgradeCode = null
    ) {}
}

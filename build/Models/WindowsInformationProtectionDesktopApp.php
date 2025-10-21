<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionDesktopApp
 */
class WindowsInformationProtectionDesktopApp
{
    public function __construct(
        /** If true, app is denied protection or exemption. */
        public ?bool $denied = null,
        /** The app's description. */
        public ?string $description = null,
        /** App display name. */
        public ?string $displayName = null,
        /** The product name. */
        public ?string $productName = null,
        /** App for Windows information protection */
        public ?string $publisherName = null,
        /** The binary name. */
        public ?string $binaryName = null,
        /** The high binary version. */
        public ?string $binaryVersionHigh = null,
        /** Desktop App for Windows information protection */
        public ?string $binaryVersionLow = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionDesktopApp
 */
class WindowsInformationProtectionDesktopApp
{
    public function __construct(
        /** The binary name. */
        public ?string $binaryName = null,
        /** The high binary version. */
        public ?string $binaryVersionHigh = null,
        /** Desktop App for Windows information protection */
        public ?string $binaryVersionLow = null
    ) {}
}

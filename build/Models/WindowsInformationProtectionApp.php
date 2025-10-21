<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionApp
 */
class WindowsInformationProtectionApp
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
        public ?string $publisherName = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMobileMSI
 */
class WindowsMobileMSI
{
    public function __construct(
        /** The command line. */
        public ?string $commandLine = null,
        /** A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature. */
        public ?bool $ignoreVersionDetection = null,
        /** The product code. */
        public ?string $productCode = null,
        /** Contains properties and inherited properties for Windows Mobile MSI Line Of Business apps. */
        public ?string $productVersion = null
    ) {}
}

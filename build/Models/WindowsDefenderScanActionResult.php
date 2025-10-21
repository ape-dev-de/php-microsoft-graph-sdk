<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDefenderScanActionResult
 */
class WindowsDefenderScanActionResult
{
    public function __construct(
        /** Windows Defender last scan result */
        public ?string $scanType = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDefenderScanActionResult
 */
class WindowsDefenderScanActionResult
{
    public function __construct(
        /** Action name */
        public ?string $actionName = null,
        /**  */
        public ?string $actionState = null,
        /** Time the action state was last updated */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Device action result */
        public ?\DateTimeInterface $startDateTime = null,
        /** Windows Defender last scan result */
        public ?string $scanType = null
    ) {}
}

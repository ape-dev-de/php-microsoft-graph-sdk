<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceActionResult
 */
class DeviceActionResult
{
    public function __construct(
        /** Action name */
        public ?string $actionName = null,
        /**  */
        public ?string $actionState = null,
        /** Time the action state was last updated */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Time the action was initiated */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocateDeviceActionResult
 */
class LocateDeviceActionResult
{
    public function __construct(
        /** Action name */
        public ?string $actionName = null,
        /**  */
        public ?ActionState $actionState = null,
        /** Time the action state was last updated */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Time the action was initiated */
        public ?\DateTimeInterface $startDateTime = null,
        /** device location */
        public ?DeviceGeoLocation $deviceLocation = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteLockActionResult
 */
class RemoteLockActionResult
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
        /** Pin to unlock the client */
        public ?string $unlockPin = null
    ) {}
}

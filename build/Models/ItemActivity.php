<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActivity
 */
class ItemActivity
{
    public function __construct(
        /** An item was accessed. */
        public ?string $access = null,
        /** Details about when the activity took place. Read-only. */
        public ?\DateTimeInterface $activityDateTime = null,
        /** Identity of who performed the action. Read-only. */
        public ?string $actor = null,
        /** Exposes the driveItem that was the target of this activity. */
        public ?string $driveItem = null
    ) {}
}

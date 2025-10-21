<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActionStat
 */
class ItemActionStat
{
    public function __construct(
        /** The number of times the action took place. Read-only. */
        public ?float $actionCount = null,
        /** The number of distinct actors that performed the action. Read-only. */
        public ?string $actorCount = null
    ) {}
}

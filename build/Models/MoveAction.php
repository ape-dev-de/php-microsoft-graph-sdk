<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MoveAction
 */
class MoveAction
{
    public function __construct(
        /** The name of the location the item was moved from. */
        public ?string $from = null,
        /** The name of the location the item was moved to. */
        public ?string $to = null
    ) {}
}

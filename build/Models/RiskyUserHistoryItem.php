<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyUserHistoryItem
 */
class RiskyUserHistoryItem
{
    public function __construct(
        /** The activity related to user risk level change. */
        public ?string $activity = null,
        /** The ID of actor that does the operation. */
        public ?string $initiatedBy = null,
        /** The ID of the user. */
        public ?string $userId = null
    ) {}
}

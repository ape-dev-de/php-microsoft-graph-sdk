<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FollowupFlag
 */
class FollowupFlag
{
    public function __construct(
        /** The date and time that the follow-up was finished. */
        public ?string $completedDateTime = null,
        /** The date and time that the follow-up is to be finished. Note: To set the due date, you must also specify the startDateTime; otherwise, you get a 400 Bad Request response. */
        public ?string $dueDateTime = null,
        /** The status for follow-up for an item. Possible values are notFlagged, complete, and flagged. */
        public ?string $flagStatus = null,
        /** The date and time that the follow-up is to begin. */
        public ?string $startDateTime = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarSharingMessage
 */
class CalendarSharingMessage
{
    public function __construct(
        /**  */
        public ?bool $canAccept = null,
        /**  */
        public ?string $sharingMessageAction = null,
        /**  */
        public array $sharingMessageActions = [],
        /**  */
        public ?string $suggestedCalendarName = null
    ) {}
}

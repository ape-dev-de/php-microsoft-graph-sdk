<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarSharingMessageAction
 */
class CalendarSharingMessageAction
{
    public function __construct(
        /**  */
        public ?string $action = null,
        /**  */
        public ?string $actionType = null,
        /**  */
        public ?string $importance = null
    ) {}
}

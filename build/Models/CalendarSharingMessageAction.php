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
        public ?CalendarSharingAction $action = null,
        /**  */
        public ?CalendarSharingActionType $actionType = null,
        /**  */
        public ?CalendarSharingActionImportance $importance = null
    ) {}
}

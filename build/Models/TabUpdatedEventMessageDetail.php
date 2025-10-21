<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TabUpdatedEventMessageDetail
 */
class TabUpdatedEventMessageDetail
{
    public function __construct(
        /** Initiator of the event. */
        public ?string $initiator = null,
        /** Unique identifier of the tab. */
        public ?string $tabId = null
    ) {}
}

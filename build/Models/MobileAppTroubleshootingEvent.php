<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppTroubleshootingEvent
 */
class MobileAppTroubleshootingEvent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates collection of App Log Upload Request. */
        public array $appLogCollectionRequests = []
    ) {}
}

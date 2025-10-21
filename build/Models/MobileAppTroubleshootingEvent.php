<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppTroubleshootingEvent
 */
class MobileAppTroubleshootingEvent
{
    public function __construct(
        /** @var string[] Indicates collection of App Log Upload Request. */
        public array $appLogCollectionRequests = []
    ) {}
}

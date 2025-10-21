<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementTroubleshootingEvent
 */
class DeviceManagementTroubleshootingEvent
{
    public function __construct(
        /** Id used for tracing the failure in the service. */
        public ?string $correlationId = null,
        /** Event representing an general failure. */
        public ?\DateTimeInterface $eventDateTime = null
    ) {}
}

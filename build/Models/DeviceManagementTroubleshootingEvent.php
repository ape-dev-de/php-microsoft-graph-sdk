<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementTroubleshootingEvent
 */
class DeviceManagementTroubleshootingEvent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Id used for tracing the failure in the service. */
        public ?string $correlationId = null,
        /** Time when the event occurred . */
        public ?\DateTimeInterface $eventDateTime = null
    ) {}
}

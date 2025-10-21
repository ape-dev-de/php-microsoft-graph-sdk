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
        /** Event representing an general failure. */
        public ?\DateTimeInterface $eventDateTime = null
    ) {}
}

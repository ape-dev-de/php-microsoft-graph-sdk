<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditEvent
 */
class AuditEvent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Friendly name of the activity. */
        public ?string $activity = null,
        /** The date time in UTC when the activity was performed. */
        public ?\DateTimeInterface $activityDateTime = null,
        /** The HTTP operation type of the activity. */
        public ?string $activityOperationType = null,
        /** The result of the activity. */
        public ?string $activityResult = null,
        /** The type of activity that was being performed. */
        public ?string $activityType = null,
        /** AAD user and application that are associated with the audit event. */
        public ?string $actor = null,
        /** Audit category. */
        public ?string $category = null,
        /** Component name. */
        public ?string $componentName = null,
        /** The client request Id that is used to correlate activity within the system. */
        public ?string $correlationId = null,
        /** Event display name. */
        public ?string $displayName = null,
        /** @var string[] A class containing the properties for Audit Event. */
        public array $resources = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditEvent
 */
class CloudPcAuditEvent
{
    public function __construct(
        /** The friendly name of the audit activity. */
        public ?string $activity = null,
        /** The date time in UTC when the activity was performed. Read-only. */
        public ?\DateTimeInterface $activityDateTime = null,
        /**  */
        public ?string $activityOperationType = null,
        /**  */
        public ?string $activityResult = null,
        /** The type of activity that was performed. Read-only. */
        public ?string $activityType = null,
        /**  */
        public ?string $actor = null,
        /**  */
        public ?string $category = null,
        /** The component name for the audit event. Read-only. */
        public ?string $componentName = null,
        /** The client request ID that is used to correlate activity within the system. Read-only. */
        public ?string $correlationId = null,
        /** The display name for the audit event. Read-only. */
        public ?string $displayName = null,
        /** @var string[] The list of cloudPcAuditResource objects. Read-only. */
        public array $resources = []
    ) {}
}

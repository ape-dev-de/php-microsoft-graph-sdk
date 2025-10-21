<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotification
 */
class EndUserNotification
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the user who created the notification. */
        public ?EmailIdentity $createdBy = null,
        /** Date and time when the notification was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description of the notification as defined by the user. */
        public ?string $description = null,
        /** Name of the notification as defined by the user. */
        public ?string $displayName = null,
        /** Identity of the user who last modified the notification. */
        public ?EmailIdentity $lastModifiedBy = null,
        /** Date and time when the notification was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Type of notification. Possible values are: unknown, positiveReinforcement, noTraining, trainingAssignment, trainingReminder, unknownFutureValue. */
        public ?EndUserNotificationType $notificationType = null,
        /** The source of the content. Possible values are: unknown, global, tenant, unknownFutureValue. */
        public ?SimulationContentSource $source = null,
        /** The status of the notification. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue. */
        public ?SimulationContentStatus $status = null,
        /** @var string[] Supported locales for endUserNotification content. */
        public array $supportedLocales = [],
        /**  */
        public array $details = []
    ) {}
}

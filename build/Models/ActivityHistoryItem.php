<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityHistoryItem
 */
class ActivityHistoryItem
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime. */
        public ?float $activeDurationSeconds = null,
        /** Set by the server. DateTime in UTC when the object was created on the server. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Optional. UTC DateTime when the activityHistoryItem will undergo hard-delete. Can be set by the client. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Optional. UTC DateTime when the activityHistoryItem (activity session) was last understood as active or finished - if null, activityHistoryItem status should be Ongoing. */
        public ?\DateTimeInterface $lastActiveDateTime = null,
        /** Set by the server. DateTime in UTC when the object was modified on the server. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Required. UTC DateTime when the activityHistoryItem (activity session) was started. Required for timeline history. */
        public ?\DateTimeInterface $startedDateTime = null,
        /** Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored. */
        public ?Status $status = null,
        /** Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation. */
        public ?string $userTimezone = null,
        /**  */
        public ?UserActivity $activity = null
    ) {}
}

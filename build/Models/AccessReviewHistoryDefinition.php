<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryDefinition
 */
class AccessReviewHistoryDefinition
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $createdBy = null,
        /** Timestamp when the access review definition was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions are included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified. */
        public array $decisions = [],
        /** Name for the access review history data collection. Required. */
        public ?string $displayName = null,
        /** A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings isn't defined. */
        public ?\DateTimeInterface $reviewHistoryPeriodEndDateTime = null,
        /** A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings isn't defined. */
        public ?\DateTimeInterface $reviewHistoryPeriodStartDateTime = null,
        /** The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime aren't defined. Not supported yet. */
        public ?string $scheduleSettings = null,
        /** Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required. */
        public array $scopes = [],
        /** Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. */
        public ?string $status = null,
        /** If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that doesn't recur will have exactly one instance. */
        public array $instances = []
    ) {}
}

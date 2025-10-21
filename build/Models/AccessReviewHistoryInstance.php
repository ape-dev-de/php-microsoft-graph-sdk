<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryInstance
 */
class AccessReviewHistoryInstance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Uri that can be used to retrieve review history data. This URI will be active for 24 hours after being generated. Required. */
        public ?string $downloadUri = null,
        /** Timestamp when this instance and associated data expires and the history is deleted. Required. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Timestamp when all of the available data for this instance was collected and is set after this instance's status is set to done. Required. */
        public ?\DateTimeInterface $fulfilledDateTime = null,
        /** Timestamp reviews ending on or before this date will be included in the fetched history data. */
        public ?\DateTimeInterface $reviewHistoryPeriodEndDateTime = null,
        /** Timestamp reviews starting on or after this date will be included in the fetched history data. */
        public ?\DateTimeInterface $reviewHistoryPeriodStartDateTime = null,
        /** Timestamp when the instance's history data is scheduled to be generated. */
        public ?\DateTimeInterface $runDateTime = null,
        /** Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance's data by calling generateDownloadUri method. */
        public ?AccessReviewHistoryStatus $status = null
    ) {}
}

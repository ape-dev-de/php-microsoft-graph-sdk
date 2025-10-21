<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestHistory
 */
class SubjectRightsRequestHistory
{
    public function __construct(
        /** Identity of the user who changed the  subject rights request. */
        public ?string $changedBy = null,
        /** Data and time when the entity was changed. */
        public ?\DateTimeInterface $eventDateTime = null,
        /** The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: approval. */
        public ?string $stage = null,
        /** The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue. */
        public ?string $stageStatus = null,
        /** Type of history. */
        public ?string $type = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestStageDetail
 */
class SubjectRightsRequestStageDetail
{
    public function __construct(
        /** Describes the error, if any, for the current stage. */
        public ?PublicError $error = null,
        /** The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: approval. */
        public ?SubjectRightsRequestStage $stage = null,
        /** Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue. */
        public ?SubjectRightsRequestStageStatus $status = null
    ) {}
}

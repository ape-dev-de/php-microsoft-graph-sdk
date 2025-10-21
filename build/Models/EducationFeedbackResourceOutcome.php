<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedbackResourceOutcome
 */
class EducationFeedbackResourceOutcome
{
    public function __construct(
        /** The actual feedback resource. */
        public ?string $feedbackResource = null,
        /** The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, unknownFutureValue. */
        public ?string $resourceStatus = null
    ) {}
}

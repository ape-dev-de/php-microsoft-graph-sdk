<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCaseSettings
 */
class SecurityEdiscoveryCaseSettings
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?SecurityCaseType $caseType = null,
        /** The OCR (Optical Character Recognition) settings for the case. */
        public ?SecurityOcrSettings $ocr = null,
        /** The redundancy (near duplicate and email threading) detection settings for the case. */
        public ?SecurityRedundancyDetectionSettings $redundancyDetection = null,
        /** The settings of the review set for the case. Possible values are: none, disableGrouping, unknownFutureValue. */
        public ?SecurityReviewSetSettings $reviewSetSettings = null,
        /** The Topic Modeling (Themes) settings for the case. */
        public ?SecurityTopicModelingSettings $topicModeling = null
    ) {}
}

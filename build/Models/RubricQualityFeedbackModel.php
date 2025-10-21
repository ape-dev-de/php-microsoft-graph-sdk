<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQualityFeedbackModel
 */
class RubricQualityFeedbackModel
{
    public function __construct(
        /** Specific feedback for one quality of this rubric. */
        public ?string $feedback = null,
        /** The ID of the rubricQuality that this feedback is related to. */
        public ?string $qualityId = null
    ) {}
}

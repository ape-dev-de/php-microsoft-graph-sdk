<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQualityFeedbackModel
 */
class RubricQualityFeedbackModel
{
    /**
     * Specific feedback for one quality of this rubric.
     */
    private ?string $feedback;

    /**
     * The ID of the rubricQuality that this feedback is related to.
     */
    private ?string $qualityId;


    public function getFeedback(): ?string
    {
        return $this->feedback;
    }

    public function setFeedback(?string $feedback): self
    {
        $this->feedback = $feedback;
        return $this;
    }

    public function getQualityId(): ?string
    {
        return $this->qualityId;
    }

    public function setQualityId(?string $qualityId): self
    {
        $this->qualityId = $qualityId;
        return $this;
    }

}

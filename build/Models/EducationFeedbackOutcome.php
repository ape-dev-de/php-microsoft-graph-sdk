<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedbackOutcome
 */
class EducationFeedbackOutcome
{
    /**
     * Teacher's written feedback to the student.
     */
    private ?string $feedback;

    /**
     * A copy of the feedback property that is made when the grade is released to the student.
     */
    private ?string $publishedFeedback;

    public function getFeedback(): ?string
    {
        return $this->feedback;
    }

    public function setFeedback(?string $feedback): self
    {
        $this->feedback = $feedback;
        return $this;
    }

    public function getPublishedFeedback(): ?string
    {
        return $this->publishedFeedback;
    }

    public function setPublishedFeedback(?string $publishedFeedback): self
    {
        $this->publishedFeedback = $publishedFeedback;
        return $this;
    }

}

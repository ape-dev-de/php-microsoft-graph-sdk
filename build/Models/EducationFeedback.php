<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedback
 */
class EducationFeedback
{
    /**
     * User who created the feedback.
     */
    private ?string $feedbackBy;

    /**
     * Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $feedbackDateTime;

    /**
     * Feedback.
     */
    private ?string $text;


    public function getFeedbackBy(): ?string
    {
        return $this->feedbackBy;
    }

    public function setFeedbackBy(?string $feedbackBy): self
    {
        $this->feedbackBy = $feedbackBy;
        return $this;
    }

    public function getFeedbackDateTime(): ?\DateTimeInterface
    {
        return $this->feedbackDateTime;
    }

    public function setFeedbackDateTime(?\DateTimeInterface $feedbackDateTime): self
    {
        $this->feedbackDateTime = $feedbackDateTime;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

}

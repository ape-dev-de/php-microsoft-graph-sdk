<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentGrade
 */
class EducationAssignmentGrade
{
    /**
     * User who did the grading.
     */
    private ?string $gradedBy;

    /**
     * Moment in time when the grade was applied to this submission object. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $gradedDateTime;


    public function getGradedBy(): ?string
    {
        return $this->gradedBy;
    }

    public function setGradedBy(?string $gradedBy): self
    {
        $this->gradedBy = $gradedBy;
        return $this;
    }

    public function getGradedDateTime(): ?\DateTimeInterface
    {
        return $this->gradedDateTime;
    }

    public function setGradedDateTime(?\DateTimeInterface $gradedDateTime): self
    {
        $this->gradedDateTime = $gradedDateTime;
        return $this;
    }

}

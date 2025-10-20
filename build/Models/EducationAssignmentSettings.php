<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentSettings
 */
class EducationAssignmentSettings
{
    /**
     * Indicates whether to show the turn-in celebration animation. If true, indicates to skip the animation. The default value is false.
     */
    private ?bool $submissionAnimationDisabled;

    /**
     * When set, enables users to weight assignments differently when computing a class average grade.
     */
    private ?string $gradingCategories;

    public function getSubmissionAnimationDisabled(): ?bool
    {
        return $this->submissionAnimationDisabled;
    }

    public function setSubmissionAnimationDisabled(?bool $submissionAnimationDisabled): self
    {
        $this->submissionAnimationDisabled = $submissionAnimationDisabled;
        return $this;
    }

    public function getGradingCategories(): ?string
    {
        return $this->gradingCategories;
    }

    public function setGradingCategories(?string $gradingCategories): self
    {
        $this->gradingCategories = $gradingCategories;
        return $this;
    }

}

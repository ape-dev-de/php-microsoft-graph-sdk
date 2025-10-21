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
     * @var string[]
     */
    private array $gradingCategories = [];


    public function getSubmissionAnimationDisabled(): ?bool
    {
        return $this->submissionAnimationDisabled;
    }

    public function setSubmissionAnimationDisabled(?bool $submissionAnimationDisabled): self
    {
        $this->submissionAnimationDisabled = $submissionAnimationDisabled;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGradingCategories(): array
    {
        return $this->gradingCategories;
    }

    /**
     * @param string[] $gradingCategories
     */
    public function setGradingCategories(array $gradingCategories): self
    {
        $this->gradingCategories = $gradingCategories;
        return $this;
    }

}

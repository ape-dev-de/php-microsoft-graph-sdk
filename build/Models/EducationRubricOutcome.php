<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRubricOutcome
 */
class EducationRubricOutcome
{
    /**
     * A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
     */
    private array $publishedRubricQualityFeedback = [];

    /**
     * A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
     */
    private array $publishedRubricQualitySelectedLevels = [];

    /**
     * A collection of specific feedback for each quality of this rubric.
     */
    private array $rubricQualityFeedback = [];

    /**
     * The level that the teacher has selected for each quality while grading this assignment.
     * @var string[]
     */
    private array $rubricQualitySelectedLevels = [];


    public function getPublishedRubricQualityFeedback(): array
    {
        return $this->publishedRubricQualityFeedback;
    }

    public function setPublishedRubricQualityFeedback(array $publishedRubricQualityFeedback): self
    {
        $this->publishedRubricQualityFeedback = $publishedRubricQualityFeedback;
        return $this;
    }

    public function getPublishedRubricQualitySelectedLevels(): array
    {
        return $this->publishedRubricQualitySelectedLevels;
    }

    public function setPublishedRubricQualitySelectedLevels(array $publishedRubricQualitySelectedLevels): self
    {
        $this->publishedRubricQualitySelectedLevels = $publishedRubricQualitySelectedLevels;
        return $this;
    }

    public function getRubricQualityFeedback(): array
    {
        return $this->rubricQualityFeedback;
    }

    public function setRubricQualityFeedback(array $rubricQualityFeedback): self
    {
        $this->rubricQualityFeedback = $rubricQualityFeedback;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRubricQualitySelectedLevels(): array
    {
        return $this->rubricQualitySelectedLevels;
    }

    /**
     * @param string[] $rubricQualitySelectedLevels
     */
    public function setRubricQualitySelectedLevels(array $rubricQualitySelectedLevels): self
    {
        $this->rubricQualitySelectedLevels = $rubricQualitySelectedLevels;
        return $this;
    }

}

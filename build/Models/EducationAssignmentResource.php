<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentResource
 */
class EducationAssignmentResource
{
    /**
     * Indicates whether this resource should be copied to each student submission for modification and submission. Required
     */
    private ?bool $distributeForStudentWork;

    /**
     * Resource object that has been associated with this assignment.
     */
    private ?string $resource;

    public function getDistributeForStudentWork(): ?bool
    {
        return $this->distributeForStudentWork;
    }

    public function setDistributeForStudentWork(?bool $distributeForStudentWork): self
    {
        $this->distributeForStudentWork = $distributeForStudentWork;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

}

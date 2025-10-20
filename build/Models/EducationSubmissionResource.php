<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmissionResource
 */
class EducationSubmissionResource
{
    /**
     * Pointer to the assignment from which the resource was copied, and if null, the student uploaded the resource.
     */
    private ?string $assignmentResourceUrl;

    /**
     * Resource object.
     */
    private ?string $resource;

    public function getAssignmentResourceUrl(): ?string
    {
        return $this->assignmentResourceUrl;
    }

    public function setAssignmentResourceUrl(?string $assignmentResourceUrl): self
    {
        $this->assignmentResourceUrl = $assignmentResourceUrl;
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

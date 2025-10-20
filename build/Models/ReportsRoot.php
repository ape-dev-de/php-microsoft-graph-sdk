<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReportsRoot
 */
class ReportsRoot
{
    /**
     * Details of submitted reading assignments.
     */
    private array $readingAssignmentSubmissions = [];

    /**
     * Details of check-in responses.
     */
    private ?string $reflectCheckInResponses;

    public function getReadingAssignmentSubmissions(): array
    {
        return $this->readingAssignmentSubmissions;
    }

    public function setReadingAssignmentSubmissions(array $readingAssignmentSubmissions): self
    {
        $this->readingAssignmentSubmissions = $readingAssignmentSubmissions;
        return $this;
    }

    public function getReflectCheckInResponses(): ?string
    {
        return $this->reflectCheckInResponses;
    }

    public function setReflectCheckInResponses(?string $reflectCheckInResponses): self
    {
        $this->reflectCheckInResponses = $reflectCheckInResponses;
        return $this;
    }

}

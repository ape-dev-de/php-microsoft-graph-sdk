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
     * @var string[]
     */
    private array $reflectCheckInResponses = [];


    public function getReadingAssignmentSubmissions(): array
    {
        return $this->readingAssignmentSubmissions;
    }

    public function setReadingAssignmentSubmissions(array $readingAssignmentSubmissions): self
    {
        $this->readingAssignmentSubmissions = $readingAssignmentSubmissions;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getReflectCheckInResponses(): array
    {
        return $this->reflectCheckInResponses;
    }

    /**
     * @param string[] $reflectCheckInResponses
     */
    public function setReflectCheckInResponses(array $reflectCheckInResponses): self
    {
        $this->reflectCheckInResponses = $reflectCheckInResponses;
        return $this;
    }

}

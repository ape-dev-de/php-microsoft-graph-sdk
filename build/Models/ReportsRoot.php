<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReportsRoot
 */
class ReportsRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Details of submitted reading assignments.
     * @var ReadingAssignmentSubmission[]
     */
    public array $readingAssignmentSubmissions = [];

    /** 
     * Details of check-in responses.
     * @var ReflectCheckInResponse[]
     */
    public array $reflectCheckInResponses = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['readingAssignmentSubmissions'])) {
            $this->readingAssignmentSubmissions = $data['readingAssignmentSubmissions'];
        }
        if (isset($data['reflectCheckInResponses'])) {
            $this->reflectCheckInResponses = $data['reflectCheckInResponses'];
        }
    }
}

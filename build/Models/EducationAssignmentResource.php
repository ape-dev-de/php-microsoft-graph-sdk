<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentResource
 */
class EducationAssignmentResource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether this resource should be copied to each student submission for modification and submission. Required */
    public ?bool $distributeForStudentWork = null;

    /** 
     * Resource object that has been associated with this assignment.
     * @var EducationResource|\stdClass|null
     */
    public EducationResource|\stdClass|null $resource = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['distributeForStudentWork'])) {
            $this->distributeForStudentWork = $data['distributeForStudentWork'];
        }
        if (isset($data['resource'])) {
            $this->resource = is_array($data['resource']) ? new EducationResource($data['resource']) : $data['resource'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

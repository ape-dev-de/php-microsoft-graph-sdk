<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmissionResource
 */
class EducationSubmissionResource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Pointer to the assignment from which the resource was copied, and if null, the student uploaded the resource. */
    public ?string $assignmentResourceUrl = null;

    /** 
     * Resource object.
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
        if (isset($data['assignmentResourceUrl'])) {
            $this->assignmentResourceUrl = $data['assignmentResourceUrl'];
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

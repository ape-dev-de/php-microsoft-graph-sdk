<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationCourse
 */
class EducationCourse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique identifier for the course. */
    public ?string $courseNumber = null;

    /** Description of the course. */
    public ?string $description = null;

    /** Name of the course. */
    public ?string $displayName = null;

    /** ID of the course from the syncing system. */
    public ?string $externalId = null;

    /** Subject of the course. */
    public ?string $subject = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['courseNumber'])) {
            $this->courseNumber = $data['courseNumber'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
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

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTeacher
 */
class EducationTeacher
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** ID of the teacher in the source system. */
    public ?string $externalId = null;

    /** Teacher number. */
    public ?string $teacherNumber = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['teacherNumber'])) {
            $this->teacherNumber = $data['teacherNumber'];
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

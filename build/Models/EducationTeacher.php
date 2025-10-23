<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTeacher
 */
class EducationTeacher
{
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
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['teacherNumber'])) {
            $this->teacherNumber = $data['teacherNumber'];
        }
    }
}

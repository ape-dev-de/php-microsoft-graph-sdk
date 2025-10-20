<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTeacher
 */
class EducationTeacher
{
    /**
     * ID of the teacher in the source system.
     */
    private ?string $externalId;

    /**
     * Teacher number.
     */
    private ?string $teacherNumber;

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getTeacherNumber(): ?string
    {
        return $this->teacherNumber;
    }

    public function setTeacherNumber(?string $teacherNumber): self
    {
        $this->teacherNumber = $teacherNumber;
        return $this;
    }

}

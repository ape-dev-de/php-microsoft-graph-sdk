<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationStudent
 */
class EducationStudent
{
    /**
     * Birth date of the student.
     */
    private ?\DateTimeInterface $birthDate;

    /**
     * ID of the student in the source system.
     */
    private ?string $externalId;

    /**
     * The possible values are: female, male, other, unknownFutureValue.
     */
    private ?string $gender;

    /**
     * Current grade level of the student.
     */
    private ?string $grade;

    /**
     * Year the student is graduating from the school.
     */
    private ?string $graduationYear;

    /**
     * Student Number.
     */
    private ?string $studentNumber;

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(?\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(?string $grade): self
    {
        $this->grade = $grade;
        return $this;
    }

    public function getGraduationYear(): ?string
    {
        return $this->graduationYear;
    }

    public function setGraduationYear(?string $graduationYear): self
    {
        $this->graduationYear = $graduationYear;
        return $this;
    }

    public function getStudentNumber(): ?string
    {
        return $this->studentNumber;
    }

    public function setStudentNumber(?string $studentNumber): self
    {
        $this->studentNumber = $studentNumber;
        return $this;
    }

}

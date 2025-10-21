<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationCourse
 */
class EducationCourse
{
    /**
     * Unique identifier for the course.
     */
    private ?string $courseNumber;

    /**
     * Description of the course.
     */
    private ?string $description;

    /**
     * Name of the course.
     */
    private ?string $displayName;

    /**
     * ID of the course from the syncing system.
     */
    private ?string $externalId;

    /**
     * Subject of the course.
     */
    private ?string $subject;


    public function getCourseNumber(): ?string
    {
        return $this->courseNumber;
    }

    public function setCourseNumber(?string $courseNumber): self
    {
        $this->courseNumber = $courseNumber;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

}

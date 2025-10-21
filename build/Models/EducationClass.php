<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationClass
 */
class EducationClass
{
    /**
     * Class code used by the school to identify the class.
     */
    private ?string $classCode;

    /**
     */
    private ?string $course;

    /**
     * Entity who created the class
     */
    private ?string $createdBy;

    /**
     * Description of the class.
     */
    private ?string $description;

    /**
     * Name of the class.
     */
    private ?string $displayName;

    /**
     * ID of the class from the syncing system.
     */
    private ?string $externalId;

    /**
     * Name of the class in the syncing system.
     */
    private ?string $externalName;

    /**
     * How this class was created. Possible values are: sis, manual.
     */
    private ?string $externalSource;

    /**
     * The name of the external source this resource was generated from.
     */
    private ?string $externalSourceDetail;

    /**
     * Grade level of the class.
     */
    private ?string $grade;

    /**
     * Mail name for sending email to all members, if this is enabled.
     */
    private ?string $mailNickname;

    /**
     * Term for this class.
     */
    private ?string $term;

    /**
     * All categories associated with this class. Nullable.
     */
    private array $assignmentCategories = [];

    /**
     * Specifies class-level defaults respected by new assignments created in the class.
     */
    private ?string $assignmentDefaults;

    /**
     * All assignments associated with this class. Nullable.
     */
    private array $assignments = [];

    /**
     * Specifies class-level assignments settings.
     */
    private ?string $assignmentSettings;

    /**
     * The underlying Microsoft 365 group object.
     */
    private ?string $group;

    /**
     * All users in the class. Nullable.
     */
    private array $members = [];

    /**
     * All modules in the class. Nullable.
     */
    private array $modules = [];

    /**
     * All schools that this class is associated with. Nullable.
     */
    private array $schools = [];

    /**
     * All teachers in the class. Nullable.
     * @var string[]
     */
    private array $teachers = [];


    public function getClassCode(): ?string
    {
        return $this->classCode;
    }

    public function setClassCode(?string $classCode): self
    {
        $this->classCode = $classCode;
        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(?string $course): self
    {
        $this->course = $course;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getExternalName(): ?string
    {
        return $this->externalName;
    }

    public function setExternalName(?string $externalName): self
    {
        $this->externalName = $externalName;
        return $this;
    }

    public function getExternalSource(): ?string
    {
        return $this->externalSource;
    }

    public function setExternalSource(?string $externalSource): self
    {
        $this->externalSource = $externalSource;
        return $this;
    }

    public function getExternalSourceDetail(): ?string
    {
        return $this->externalSourceDetail;
    }

    public function setExternalSourceDetail(?string $externalSourceDetail): self
    {
        $this->externalSourceDetail = $externalSourceDetail;
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

    public function getMailNickname(): ?string
    {
        return $this->mailNickname;
    }

    public function setMailNickname(?string $mailNickname): self
    {
        $this->mailNickname = $mailNickname;
        return $this;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(?string $term): self
    {
        $this->term = $term;
        return $this;
    }

    public function getAssignmentCategories(): array
    {
        return $this->assignmentCategories;
    }

    public function setAssignmentCategories(array $assignmentCategories): self
    {
        $this->assignmentCategories = $assignmentCategories;
        return $this;
    }

    public function getAssignmentDefaults(): ?string
    {
        return $this->assignmentDefaults;
    }

    public function setAssignmentDefaults(?string $assignmentDefaults): self
    {
        $this->assignmentDefaults = $assignmentDefaults;
        return $this;
    }

    public function getAssignments(): array
    {
        return $this->assignments;
    }

    public function setAssignments(array $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getAssignmentSettings(): ?string
    {
        return $this->assignmentSettings;
    }

    public function setAssignmentSettings(?string $assignmentSettings): self
    {
        $this->assignmentSettings = $assignmentSettings;
        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

    public function getModules(): array
    {
        return $this->modules;
    }

    public function setModules(array $modules): self
    {
        $this->modules = $modules;
        return $this;
    }

    public function getSchools(): array
    {
        return $this->schools;
    }

    public function setSchools(array $schools): self
    {
        $this->schools = $schools;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTeachers(): array
    {
        return $this->teachers;
    }

    /**
     * @param string[] $teachers
     */
    public function setTeachers(array $teachers): self
    {
        $this->teachers = $teachers;
        return $this;
    }

}

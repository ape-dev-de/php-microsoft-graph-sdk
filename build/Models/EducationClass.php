<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationClass
 */
class EducationClass
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Class code used by the school to identify the class. */
    public ?string $classCode = null;

    /** 
     * 
     * @var EducationCourse|\stdClass|null
     */
    public EducationCourse|\stdClass|null $course = null;

    /** 
     * Entity who created the class
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** Description of the class. */
    public ?string $description = null;

    /** Name of the class. */
    public ?string $displayName = null;

    /** ID of the class from the syncing system. */
    public ?string $externalId = null;

    /** Name of the class in the syncing system. */
    public ?string $externalName = null;

    /** 
     * How this class was created. Possible values are: sis, manual.
     * @var EducationExternalSource|\stdClass|null
     */
    public EducationExternalSource|\stdClass|null $externalSource = null;

    /** The name of the external source this resource was generated from. */
    public ?string $externalSourceDetail = null;

    /** Grade level of the class. */
    public ?string $grade = null;

    /** Mail name for sending email to all members, if this is enabled. */
    public ?string $mailNickname = null;

    /** 
     * Term for this class.
     * @var EducationTerm|\stdClass|null
     */
    public EducationTerm|\stdClass|null $term = null;

    /** 
     * All categories associated with this class. Nullable.
     * @var EducationCategory[]
     */
    public array $assignmentCategories = [];

    /** 
     * Specifies class-level defaults respected by new assignments created in the class.
     * @var EducationAssignmentDefaults|\stdClass|null
     */
    public EducationAssignmentDefaults|\stdClass|null $assignmentDefaults = null;

    /** 
     * All assignments associated with this class. Nullable.
     * @var EducationAssignment[]
     */
    public array $assignments = [];

    /** 
     * Specifies class-level assignments settings.
     * @var EducationAssignmentSettings|\stdClass|null
     */
    public EducationAssignmentSettings|\stdClass|null $assignmentSettings = null;

    /** 
     * The underlying Microsoft 365 group object.
     * @var Group|\stdClass|null
     */
    public Group|\stdClass|null $group = null;

    /** 
     * All users in the class. Nullable.
     * @var EducationUser[]
     */
    public array $members = [];

    /** 
     * All modules in the class. Nullable.
     * @var EducationModule[]
     */
    public array $modules = [];

    /** 
     * All schools that this class is associated with. Nullable.
     * @var EducationSchool[]
     */
    public array $schools = [];

    /** 
     * All teachers in the class. Nullable.
     * @var EducationUser[]
     */
    public array $teachers = [];


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
        if (isset($data['classCode'])) {
            $this->classCode = $data['classCode'];
        }
        if (isset($data['course'])) {
            $this->course = is_array($data['course']) ? new EducationCourse($data['course']) : $data['course'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
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
        if (isset($data['externalName'])) {
            $this->externalName = $data['externalName'];
        }
        if (isset($data['externalSource'])) {
            $this->externalSource = is_string($data['externalSource']) ? EducationExternalSource::tryFrom($data['externalSource']) : $data['externalSource'];
        }
        if (isset($data['externalSourceDetail'])) {
            $this->externalSourceDetail = $data['externalSourceDetail'];
        }
        if (isset($data['grade'])) {
            $this->grade = $data['grade'];
        }
        if (isset($data['mailNickname'])) {
            $this->mailNickname = $data['mailNickname'];
        }
        if (isset($data['term'])) {
            $this->term = is_array($data['term']) ? new EducationTerm($data['term']) : $data['term'];
        }
        if (isset($data['assignmentCategories'])) {
            $this->assignmentCategories = $data['assignmentCategories'];
        }
        if (isset($data['assignmentDefaults'])) {
            $this->assignmentDefaults = is_array($data['assignmentDefaults']) ? new EducationAssignmentDefaults($data['assignmentDefaults']) : $data['assignmentDefaults'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['assignmentSettings'])) {
            $this->assignmentSettings = is_array($data['assignmentSettings']) ? new EducationAssignmentSettings($data['assignmentSettings']) : $data['assignmentSettings'];
        }
        if (isset($data['group'])) {
            $this->group = is_array($data['group']) ? new Group($data['group']) : $data['group'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
        if (isset($data['modules'])) {
            $this->modules = $data['modules'];
        }
        if (isset($data['schools'])) {
            $this->schools = $data['schools'];
        }
        if (isset($data['teachers'])) {
            $this->teachers = $data['teachers'];
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

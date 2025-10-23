<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignment
 */
class EducationAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Optional field to control the assignment behavior for students who are added after the assignment is published. If not specified, defaults to none. Supported values are: none, assignIfOpen. For example, a teacher can use assignIfOpen to indicate that an assignment should be assigned to any new student who joins the class while the assignment is still open, and none to indicate that an assignment shouldn't be assigned to new students.
     * @var EducationAddedStudentAction|\stdClass|null
     */
    public mixed $addedStudentAction = null;

    /** 
     * Optional field to control the assignment behavior  for adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: studentsOnly. The default value is none.
     * @var EducationAddToCalendarOptions|\stdClass|null
     */
    public mixed $addToCalendarAction = null;

    /** Identifies whether students can submit after the due date. If this property isn't specified during create, it defaults to true. */
    public ?bool $allowLateSubmissions = null;

    /** Identifies whether students can add their own resources to a submission or if they can only modify resources added by the teacher. */
    public ?bool $allowStudentsToAddResourcesToSubmission = null;

    /** The date when the assignment should become active. If in the future, the assignment isn't shown to the student until this date. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $assignDateTime = null;

    /** The moment that the assignment was published to students and the assignment shows up on the students timeline. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $assignedDateTime = null;

    /** 
     * Which users, or whole class should receive a submission object once the assignment is published.
     * @var EducationAssignmentRecipient|\stdClass|null
     */
    public mixed $assignTo = null;

    /** Class to which this assignment belongs. */
    public ?string $classId = null;

    /** Date when the assignment is closed for submissions. This is an optional field that can be null if the assignment doesn't allowLateSubmissions or when the closeDateTime is the same as the dueDateTime. But if specified, then the closeDateTime must be greater than or equal to the dueDateTime. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $closeDateTime = null;

    /** 
     * Who created the assignment.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Moment when the assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Name of the assignment. */
    public ?string $displayName = null;

    /** Date when the students assignment is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $dueDateTime = null;

    /** Folder URL where all the feedback file resources for this assignment are stored. */
    public ?string $feedbackResourcesFolderUrl = null;

    /** 
     * How the assignment will be graded.
     * @var EducationAssignmentGradeType|\stdClass|null
     */
    public mixed $grading = null;

    /** 
     * Instructions for the assignment. The instructions and the display name tell the student what to do.
     * @var EducationItemBody|\stdClass|null
     */
    public mixed $instructions = null;

    /** 
     * Who last modified the assignment.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The date and time on which the assignment was modified. A student submission doesn't modify the assignment; only teachers can update assignments. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The URL of the module from which to access the assignment. */
    public ?string $moduleUrl = null;

    /** Optional field to specify the URL of the channel to post the assignment publish notification. If not specified or null, defaults to the General channel. This field only applies to assignments where the assignTo value is educationAssignmentClassRecipient. Updating the notificationChannelUrl isn't allowed after the assignment is published. */
    public ?string $notificationChannelUrl = null;

    /** Folder URL where all the file resources for this assignment are stored. */
    public ?string $resourcesFolderUrl = null;

    /** 
     * Status of the assignment.  You can't PATCH this value. Possible values are: draft, scheduled, published, assigned, unknownFutureValue, inactive. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: inactive.
     * @var EducationAssignmentStatus|\stdClass|null
     */
    public mixed $status = null;

    /** The deep link URL for the given assignment. */
    public ?string $webUrl = null;

    /** 
     * When set, enables users to easily find assignments of a given type. Read-only. Nullable.
     * @var EducationCategory[]
     */
    public array $categories = [];

    /** 
     * When set, enables users to weight assignments differently when computing a class average grade.
     * @var EducationGradingCategory|\stdClass|null
     */
    public mixed $gradingCategory = null;

    /** 
     * Learning objects that are associated with this assignment. Only teachers can modify this list. Nullable.
     * @var EducationAssignmentResource[]
     */
    public array $resources = [];

    /** 
     * When set, the grading rubric attached to this assignment.
     * @var EducationRubric|\stdClass|null
     */
    public mixed $rubric = null;

    /** 
     * Once published, there's a submission object for each student representing their work and grade. Read-only. Nullable.
     * @var EducationSubmission[]
     */
    public array $submissions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['addedStudentAction'])) {
            $this->addedStudentAction = is_array($data['addedStudentAction']) ? new EducationAddedStudentAction($data['addedStudentAction']) : $data['addedStudentAction'];
        }
        if (isset($data['addToCalendarAction'])) {
            $this->addToCalendarAction = is_array($data['addToCalendarAction']) ? new EducationAddToCalendarOptions($data['addToCalendarAction']) : $data['addToCalendarAction'];
        }
        if (isset($data['allowLateSubmissions'])) {
            $this->allowLateSubmissions = $data['allowLateSubmissions'];
        }
        if (isset($data['allowStudentsToAddResourcesToSubmission'])) {
            $this->allowStudentsToAddResourcesToSubmission = $data['allowStudentsToAddResourcesToSubmission'];
        }
        if (isset($data['assignDateTime'])) {
            $this->assignDateTime = is_string($data['assignDateTime']) ? new \DateTimeImmutable($data['assignDateTime']) : $data['assignDateTime'];
        }
        if (isset($data['assignedDateTime'])) {
            $this->assignedDateTime = is_string($data['assignedDateTime']) ? new \DateTimeImmutable($data['assignedDateTime']) : $data['assignedDateTime'];
        }
        if (isset($data['assignTo'])) {
            $this->assignTo = is_array($data['assignTo']) ? new EducationAssignmentRecipient($data['assignTo']) : $data['assignTo'];
        }
        if (isset($data['classId'])) {
            $this->classId = $data['classId'];
        }
        if (isset($data['closeDateTime'])) {
            $this->closeDateTime = is_string($data['closeDateTime']) ? new \DateTimeImmutable($data['closeDateTime']) : $data['closeDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['dueDateTime'])) {
            $this->dueDateTime = is_string($data['dueDateTime']) ? new \DateTimeImmutable($data['dueDateTime']) : $data['dueDateTime'];
        }
        if (isset($data['feedbackResourcesFolderUrl'])) {
            $this->feedbackResourcesFolderUrl = $data['feedbackResourcesFolderUrl'];
        }
        if (isset($data['grading'])) {
            $this->grading = is_array($data['grading']) ? new EducationAssignmentGradeType($data['grading']) : $data['grading'];
        }
        if (isset($data['instructions'])) {
            $this->instructions = is_array($data['instructions']) ? new EducationItemBody($data['instructions']) : $data['instructions'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['moduleUrl'])) {
            $this->moduleUrl = $data['moduleUrl'];
        }
        if (isset($data['notificationChannelUrl'])) {
            $this->notificationChannelUrl = $data['notificationChannelUrl'];
        }
        if (isset($data['resourcesFolderUrl'])) {
            $this->resourcesFolderUrl = $data['resourcesFolderUrl'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new EducationAssignmentStatus($data['status']) : $data['status'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['gradingCategory'])) {
            $this->gradingCategory = is_array($data['gradingCategory']) ? new EducationGradingCategory($data['gradingCategory']) : $data['gradingCategory'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
        }
        if (isset($data['rubric'])) {
            $this->rubric = is_array($data['rubric']) ? new EducationRubric($data['rubric']) : $data['rubric'];
        }
        if (isset($data['submissions'])) {
            $this->submissions = $data['submissions'];
        }
    }
}

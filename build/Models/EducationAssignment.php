<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignment
 */
class EducationAssignment
{
    /**
     * Optional field to control the assignment behavior for students who are added after the assignment is published. If not specified, defaults to none. Supported values are: none, assignIfOpen. For example, a teacher can use assignIfOpen to indicate that an assignment should be assigned to any new student who joins the class while the assignment is still open, and none to indicate that an assignment shouldn''t be assigned to new students.
     */
    private ?string $addedStudentAction;

    /**
     * Optional field to control the assignment behavior  for adding assignments to students'' and teachers'' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: studentsOnly. The default value is none.
     */
    private ?string $addToCalendarAction;

    /**
     * Identifies whether students can submit after the due date. If this property isn''t specified during create, it defaults to true.
     */
    private ?bool $allowLateSubmissions;

    /**
     * Identifies whether students can add their own resources to a submission or if they can only modify resources added by the teacher.
     */
    private ?bool $allowStudentsToAddResourcesToSubmission;

    /**
     * The date when the assignment should become active. If in the future, the assignment isn''t shown to the student until this date. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $assignDateTime;

    /**
     * The moment that the assignment was published to students and the assignment shows up on the students timeline. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $assignedDateTime;

    /**
     * Which users, or whole class should receive a submission object once the assignment is published.
     */
    private ?string $assignTo;

    /**
     * Class to which this assignment belongs.
     */
    private ?string $classId;

    /**
     * Date when the assignment is closed for submissions. This is an optional field that can be null if the assignment doesn''t allowLateSubmissions or when the closeDateTime is the same as the dueDateTime. But if specified, then the closeDateTime must be greater than or equal to the dueDateTime. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $closeDateTime;

    /**
     * Who created the assignment.
     */
    private ?string $createdBy;

    /**
     * Moment when the assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Name of the assignment.
     */
    private ?string $displayName;

    /**
     * Date when the students assignment is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $dueDateTime;

    /**
     * Folder URL where all the feedback file resources for this assignment are stored.
     */
    private ?string $feedbackResourcesFolderUrl;

    /**
     * How the assignment will be graded.
     */
    private ?string $grading;

    /**
     * Instructions for the assignment. The instructions and the display name tell the student what to do.
     */
    private ?string $instructions;

    /**
     * Who last modified the assignment.
     */
    private ?string $lastModifiedBy;

    /**
     * The date and time on which the assignment was modified. A student submission doesn''t modify the assignment; only teachers can update assignments. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The URL of the module from which to access the assignment.
     */
    private ?string $moduleUrl;

    /**
     * Optional field to specify the URL of the channel to post the assignment publish notification. If not specified or null, defaults to the General channel. This field only applies to assignments where the assignTo value is educationAssignmentClassRecipient. Updating the notificationChannelUrl isn''t allowed after the assignment is published.
     */
    private ?string $notificationChannelUrl;

    /**
     * Folder URL where all the file resources for this assignment are stored.
     */
    private ?string $resourcesFolderUrl;

    /**
     * Status of the assignment.  You can''t PATCH this value. Possible values are: draft, scheduled, published, assigned, unknownFutureValue, inactive. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: inactive.
     */
    private ?string $status;

    /**
     * The deep link URL for the given assignment.
     */
    private ?string $webUrl;

    /**
     * When set, enables users to easily find assignments of a given type. Read-only. Nullable.
     */
    private array $categories = [];

    /**
     * When set, enables users to weight assignments differently when computing a class average grade.
     */
    private ?string $gradingCategory;

    /**
     * Learning objects that are associated with this assignment. Only teachers can modify this list. Nullable.
     */
    private array $resources = [];

    /**
     * When set, the grading rubric attached to this assignment.
     */
    private ?string $rubric;

    /**
     * Once published, there''s a submission object for each student representing their work and grade. Read-only. Nullable.
     */
    private ?string $submissions;

    public function getAddedStudentAction(): ?string
    {
        return $this->addedStudentAction;
    }

    public function setAddedStudentAction(?string $addedStudentAction): self
    {
        $this->addedStudentAction = $addedStudentAction;
        return $this;
    }

    public function getAddToCalendarAction(): ?string
    {
        return $this->addToCalendarAction;
    }

    public function setAddToCalendarAction(?string $addToCalendarAction): self
    {
        $this->addToCalendarAction = $addToCalendarAction;
        return $this;
    }

    public function getAllowLateSubmissions(): ?bool
    {
        return $this->allowLateSubmissions;
    }

    public function setAllowLateSubmissions(?bool $allowLateSubmissions): self
    {
        $this->allowLateSubmissions = $allowLateSubmissions;
        return $this;
    }

    public function getAllowStudentsToAddResourcesToSubmission(): ?bool
    {
        return $this->allowStudentsToAddResourcesToSubmission;
    }

    public function setAllowStudentsToAddResourcesToSubmission(?bool $allowStudentsToAddResourcesToSubmission): self
    {
        $this->allowStudentsToAddResourcesToSubmission = $allowStudentsToAddResourcesToSubmission;
        return $this;
    }

    public function getAssignDateTime(): ?\DateTimeInterface
    {
        return $this->assignDateTime;
    }

    public function setAssignDateTime(?\DateTimeInterface $assignDateTime): self
    {
        $this->assignDateTime = $assignDateTime;
        return $this;
    }

    public function getAssignedDateTime(): ?\DateTimeInterface
    {
        return $this->assignedDateTime;
    }

    public function setAssignedDateTime(?\DateTimeInterface $assignedDateTime): self
    {
        $this->assignedDateTime = $assignedDateTime;
        return $this;
    }

    public function getAssignTo(): ?string
    {
        return $this->assignTo;
    }

    public function setAssignTo(?string $assignTo): self
    {
        $this->assignTo = $assignTo;
        return $this;
    }

    public function getClassId(): ?string
    {
        return $this->classId;
    }

    public function setClassId(?string $classId): self
    {
        $this->classId = $classId;
        return $this;
    }

    public function getCloseDateTime(): ?\DateTimeInterface
    {
        return $this->closeDateTime;
    }

    public function setCloseDateTime(?\DateTimeInterface $closeDateTime): self
    {
        $this->closeDateTime = $closeDateTime;
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

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getDueDateTime(): ?\DateTimeInterface
    {
        return $this->dueDateTime;
    }

    public function setDueDateTime(?\DateTimeInterface $dueDateTime): self
    {
        $this->dueDateTime = $dueDateTime;
        return $this;
    }

    public function getFeedbackResourcesFolderUrl(): ?string
    {
        return $this->feedbackResourcesFolderUrl;
    }

    public function setFeedbackResourcesFolderUrl(?string $feedbackResourcesFolderUrl): self
    {
        $this->feedbackResourcesFolderUrl = $feedbackResourcesFolderUrl;
        return $this;
    }

    public function getGrading(): ?string
    {
        return $this->grading;
    }

    public function setGrading(?string $grading): self
    {
        $this->grading = $grading;
        return $this;
    }

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(?string $instructions): self
    {
        $this->instructions = $instructions;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getModuleUrl(): ?string
    {
        return $this->moduleUrl;
    }

    public function setModuleUrl(?string $moduleUrl): self
    {
        $this->moduleUrl = $moduleUrl;
        return $this;
    }

    public function getNotificationChannelUrl(): ?string
    {
        return $this->notificationChannelUrl;
    }

    public function setNotificationChannelUrl(?string $notificationChannelUrl): self
    {
        $this->notificationChannelUrl = $notificationChannelUrl;
        return $this;
    }

    public function getResourcesFolderUrl(): ?string
    {
        return $this->resourcesFolderUrl;
    }

    public function setResourcesFolderUrl(?string $resourcesFolderUrl): self
    {
        $this->resourcesFolderUrl = $resourcesFolderUrl;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    public function getGradingCategory(): ?string
    {
        return $this->gradingCategory;
    }

    public function setGradingCategory(?string $gradingCategory): self
    {
        $this->gradingCategory = $gradingCategory;
        return $this;
    }

    public function getResources(): array
    {
        return $this->resources;
    }

    public function setResources(array $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

    public function getRubric(): ?string
    {
        return $this->rubric;
    }

    public function setRubric(?string $rubric): self
    {
        $this->rubric = $rubric;
        return $this;
    }

    public function getSubmissions(): ?string
    {
        return $this->submissions;
    }

    public function setSubmissions(?string $submissions): self
    {
        $this->submissions = $submissions;
        return $this;
    }

}

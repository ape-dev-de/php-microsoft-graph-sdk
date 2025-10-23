<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningAssignment
 */
class LearningAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when the assignment was completed. Optional. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** The percentage completion value of the course activity. Optional. */
    public ?float $completionPercentage = null;

    /**  */
    public ?string $externalcourseActivityId = null;

    /** The user ID of the learner to whom the activity is assigned. Required. */
    public ?string $learnerUserId = null;

    /** The ID of the learning content created in Viva Learning. Required. */
    public ?string $learningContentId = null;

    /** The registration ID of the provider. Required. */
    public ?string $learningProviderId = null;

    /** 
     * The status of the course activity. Possible values are: notStarted, inProgress, completed. Required.
     * @var CourseStatus|\stdClass|null
     */
    public mixed $status = null;

    /** Assigned date for the course activity. Optional. */
    public ?\DateTimeInterface $assignedDateTime = null;

    /** The user ID of the assigner. Optional. */
    public ?string $assignerUserId = null;

    /**  */
    public ?AssignmentType $assignmentType = null;

    /** 
     * Due date for the course activity. Optional.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $dueDateTime = null;

    /** 
     * Notes for the course activity. Optional.
     * @var ItemBody|\stdClass|null
     */
    public mixed $notes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['completionPercentage'])) {
            $this->completionPercentage = $data['completionPercentage'];
        }
        if (isset($data['externalcourseActivityId'])) {
            $this->externalcourseActivityId = $data['externalcourseActivityId'];
        }
        if (isset($data['learnerUserId'])) {
            $this->learnerUserId = $data['learnerUserId'];
        }
        if (isset($data['learningContentId'])) {
            $this->learningContentId = $data['learningContentId'];
        }
        if (isset($data['learningProviderId'])) {
            $this->learningProviderId = $data['learningProviderId'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new CourseStatus($data['status']) : $data['status'];
        }
        if (isset($data['assignedDateTime'])) {
            $this->assignedDateTime = is_string($data['assignedDateTime']) ? new \DateTimeImmutable($data['assignedDateTime']) : $data['assignedDateTime'];
        }
        if (isset($data['assignerUserId'])) {
            $this->assignerUserId = $data['assignerUserId'];
        }
        if (isset($data['assignmentType'])) {
            $this->assignmentType = is_array($data['assignmentType']) ? new AssignmentType($data['assignmentType']) : $data['assignmentType'];
        }
        if (isset($data['dueDateTime'])) {
            $this->dueDateTime = is_array($data['dueDateTime']) ? new DateTimeTimeZone($data['dueDateTime']) : $data['dueDateTime'];
        }
        if (isset($data['notes'])) {
            $this->notes = is_array($data['notes']) ? new ItemBody($data['notes']) : $data['notes'];
        }
    }
}

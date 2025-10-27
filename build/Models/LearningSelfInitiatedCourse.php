<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningSelfInitiatedCourse
 */
class LearningSelfInitiatedCourse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
    public CourseStatus|\stdClass|null $status = null;

    /** The date and time on which the learner started the self-initiated course. Optional. */
    public ?\DateTimeInterface $startedDateTime = null;


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
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['completionPercentage'])) {
            $this->completionPercentage = is_numeric($data['completionPercentage']) ? (float)$data['completionPercentage'] : $data['completionPercentage'];
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
            $this->status = is_string($data['status']) ? CourseStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['startedDateTime'])) {
            $this->startedDateTime = is_string($data['startedDateTime']) ? new \DateTimeImmutable($data['startedDateTime']) : $data['startedDateTime'];
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

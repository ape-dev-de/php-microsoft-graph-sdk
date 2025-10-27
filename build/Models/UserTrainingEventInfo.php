<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingEventInfo
 */
class UserTrainingEventInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Display name of the training. */
    public ?string $displayName = null;

    /** 
     * Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @var TrainingStatus|\stdClass|null
     */
    public TrainingStatus|\stdClass|null $latestTrainingStatus = null;

    /** 
     * Event details of the training when it was assigned to the user.
     * @var UserTrainingContentEventInfo|\stdClass|null
     */
    public UserTrainingContentEventInfo|\stdClass|null $trainingAssignedProperties = null;

    /** 
     * Event details of the training when it was completed by the user.
     * @var UserTrainingContentEventInfo|\stdClass|null
     */
    public UserTrainingContentEventInfo|\stdClass|null $trainingCompletedProperties = null;

    /** 
     * Event details of the training when it was updated/in-progress by the user.
     * @var UserTrainingContentEventInfo|\stdClass|null
     */
    public UserTrainingContentEventInfo|\stdClass|null $trainingUpdatedProperties = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['latestTrainingStatus'])) {
            $this->latestTrainingStatus = is_string($data['latestTrainingStatus']) ? TrainingStatus::tryFrom($data['latestTrainingStatus']) : $data['latestTrainingStatus'];
        }
        if (isset($data['trainingAssignedProperties'])) {
            $this->trainingAssignedProperties = is_array($data['trainingAssignedProperties']) ? new UserTrainingContentEventInfo($data['trainingAssignedProperties']) : $data['trainingAssignedProperties'];
        }
        if (isset($data['trainingCompletedProperties'])) {
            $this->trainingCompletedProperties = is_array($data['trainingCompletedProperties']) ? new UserTrainingContentEventInfo($data['trainingCompletedProperties']) : $data['trainingCompletedProperties'];
        }
        if (isset($data['trainingUpdatedProperties'])) {
            $this->trainingUpdatedProperties = is_array($data['trainingUpdatedProperties']) ? new UserTrainingContentEventInfo($data['trainingUpdatedProperties']) : $data['trainingUpdatedProperties'];
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

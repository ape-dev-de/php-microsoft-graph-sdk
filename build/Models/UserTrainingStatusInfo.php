<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingStatusInfo
 */
class UserTrainingStatusInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Date and time of assignment of the training to the user. */
    public ?\DateTimeInterface $assignedDateTime = null;

    /** Date and time of completion of the training by the user. */
    public ?\DateTimeInterface $completionDateTime = null;

    /** Display name of the assigned training. */
    public ?string $displayName = null;

    /** 
     * The status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @var TrainingStatus|\stdClass|null
     */
    public mixed $trainingStatus = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['assignedDateTime'])) {
            $this->assignedDateTime = is_string($data['assignedDateTime']) ? new \DateTimeImmutable($data['assignedDateTime']) : $data['assignedDateTime'];
        }
        if (isset($data['completionDateTime'])) {
            $this->completionDateTime = is_string($data['completionDateTime']) ? new \DateTimeImmutable($data['completionDateTime']) : $data['completionDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['trainingStatus'])) {
            $this->trainingStatus = is_array($data['trainingStatus']) ? new TrainingStatus($data['trainingStatus']) : $data['trainingStatus'];
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

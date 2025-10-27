<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftTrainingAssignmentMapping
 */
class MicrosoftTrainingAssignmentMapping
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue.
     * @var TrainingSettingType|\stdClass|null
     */
    public TrainingSettingType|\stdClass|null $settingType = null;

    /** 
     * A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
     * @var TrainingAssignedTo[]
     */
    public array $assignedTo = [];

    /** 
     * 
     * @var Training|\stdClass|null
     */
    public Training|\stdClass|null $training = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['settingType'])) {
            $this->settingType = is_string($data['settingType']) ? TrainingSettingType::tryFrom($data['settingType']) : $data['settingType'];
        }
        if (isset($data['assignedTo'])) {
            $this->assignedTo = $data['assignedTo'];
        }
        if (isset($data['training'])) {
            $this->training = is_array($data['training']) ? new Training($data['training']) : $data['training'];
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

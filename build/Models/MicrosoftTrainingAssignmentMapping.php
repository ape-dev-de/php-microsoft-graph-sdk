<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftTrainingAssignmentMapping
 */
class MicrosoftTrainingAssignmentMapping
{
    /** 
     * Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue.
     * @var TrainingSettingType|\stdClass|null
     */
    public mixed $settingType = null;

    /** 
     * A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
     * @var TrainingAssignedTo[]
     */
    public array $assignedTo = [];

    /** 
     * 
     * @var Training|\stdClass|null
     */
    public mixed $training = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['settingType'])) {
            $this->settingType = is_array($data['settingType']) ? new TrainingSettingType($data['settingType']) : $data['settingType'];
        }
        if (isset($data['assignedTo'])) {
            $this->assignedTo = $data['assignedTo'];
        }
        if (isset($data['training'])) {
            $this->training = is_array($data['training']) ? new Training($data['training']) : $data['training'];
        }
    }
}

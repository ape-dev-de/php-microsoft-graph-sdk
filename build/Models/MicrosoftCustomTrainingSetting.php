<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftCustomTrainingSetting
 */
class MicrosoftCustomTrainingSetting
{
    /** 
     * Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue.
     * @var TrainingSettingType|\stdClass|null
     */
    public mixed $settingType = null;

    /** The completion date and time of the training. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $completionDateTime = null;

    /** 
     * The mapping details of the associated training.
     * @var MicrosoftTrainingAssignmentMapping[]
     */
    public array $trainingAssignmentMappings = [];

    /** 
     * The training completion duration that needs to be provided before scheduling the training. Possible values are: week, fortnite, month, unknownFutureValue.
     * @var TrainingCompletionDuration|\stdClass|null
     */
    public mixed $trainingCompletionDuration = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['settingType'])) {
            $this->settingType = $data['settingType'];
        }
        if (isset($data['completionDateTime'])) {
            $this->completionDateTime = is_string($data['completionDateTime']) ? new \DateTimeImmutable($data['completionDateTime']) : $data['completionDateTime'];
        }
        if (isset($data['trainingAssignmentMappings'])) {
            $this->trainingAssignmentMappings = $data['trainingAssignmentMappings'];
        }
        if (isset($data['trainingCompletionDuration'])) {
            $this->trainingCompletionDuration = $data['trainingCompletionDuration'];
        }
    }
}

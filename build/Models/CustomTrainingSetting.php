<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomTrainingSetting
 */
class CustomTrainingSetting
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

    /** The description of the custom training setting. */
    public ?string $description = null;

    /** The display name of the custom training setting. */
    public ?string $displayName = null;

    /** Training duration. */
    public ?float $durationInMinutes = null;

    /** The training URL. */
    public ?string $url = null;


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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['durationInMinutes'])) {
            $this->durationInMinutes = $data['durationInMinutes'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}

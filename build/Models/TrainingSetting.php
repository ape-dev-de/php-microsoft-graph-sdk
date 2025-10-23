<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingSetting
 */
class TrainingSetting
{
    /** 
     * Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue.
     * @var TrainingSettingType|\stdClass|null
     */
    public mixed $settingType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['settingType'])) {
            $this->settingType = is_array($data['settingType']) ? new TrainingSettingType($data['settingType']) : $data['settingType'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NoTrainingSetting
 */
class NoTrainingSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue.
     * @var TrainingSettingType|\stdClass|null
     */
    public TrainingSettingType|\stdClass|null $settingType = null;


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

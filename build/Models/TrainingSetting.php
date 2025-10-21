<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingSetting
 */
class TrainingSetting
{
    public function __construct(
        /** Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue. */
        public ?TrainingSettingType $settingType = null
    ) {}
}

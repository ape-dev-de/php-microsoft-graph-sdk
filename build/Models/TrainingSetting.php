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
     */
    private ?string $settingType;

    public function getSettingType(): ?string
    {
        return $this->settingType;
    }

    public function setSettingType(?string $settingType): self
    {
        $this->settingType = $settingType;
        return $this;
    }

}

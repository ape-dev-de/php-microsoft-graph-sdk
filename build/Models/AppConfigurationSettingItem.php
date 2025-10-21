<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConfigurationSettingItem
 */
class AppConfigurationSettingItem
{
    /**
     * app configuration key.
     */
    private ?string $appConfigKey;

    /**
     */
    private ?string $appConfigKeyType;

    /**
     * Contains properties for App configuration setting item.
     */
    private ?string $appConfigKeyValue;


    public function getAppConfigKey(): ?string
    {
        return $this->appConfigKey;
    }

    public function setAppConfigKey(?string $appConfigKey): self
    {
        $this->appConfigKey = $appConfigKey;
        return $this;
    }

    public function getAppConfigKeyType(): ?string
    {
        return $this->appConfigKeyType;
    }

    public function setAppConfigKeyType(?string $appConfigKeyType): self
    {
        $this->appConfigKeyType = $appConfigKeyType;
        return $this;
    }

    public function getAppConfigKeyValue(): ?string
    {
        return $this->appConfigKeyValue;
    }

    public function setAppConfigKeyValue(?string $appConfigKeyValue): self
    {
        $this->appConfigKeyValue = $appConfigKeyValue;
        return $this;
    }

}

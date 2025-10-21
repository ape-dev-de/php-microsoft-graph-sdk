<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMobileAppConfiguration
 */
class IosMobileAppConfiguration
{
    /**
     * mdm app configuration Base64 binary.
     */
    private ?string $encodedSettingXml;

    /**
     * Contains properties, inherited properties and actions for iOS mobile app configurations.
     * @var string[]
     */
    private array $settings = [];


    public function getEncodedSettingXml(): ?string
    {
        return $this->encodedSettingXml;
    }

    public function setEncodedSettingXml(?string $encodedSettingXml): self
    {
        $this->encodedSettingXml = $encodedSettingXml;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * @param string[] $settings
     */
    public function setSettings(array $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

}

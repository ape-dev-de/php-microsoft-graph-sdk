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
     */
    private ?string $settings;

    public function getEncodedSettingXml(): ?string
    {
        return $this->encodedSettingXml;
    }

    public function setEncodedSettingXml(?string $encodedSettingXml): self
    {
        $this->encodedSettingXml = $encodedSettingXml;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

}

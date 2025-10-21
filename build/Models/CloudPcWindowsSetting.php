<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcWindowsSetting
 */
class CloudPcWindowsSetting
{
    /**
     * The Windows language or region tag to use for language pack configuration and localization of the Cloud PC. The default value is en-US, which corresponds to English (United States).
     */
    private ?string $locale;


    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsSettings
 */
class UserExperienceAnalyticsSettings
{
    /**
     * The user experience analytics insight is the recomendation to improve the user experience analytics score.
     */
    private ?string $configurationManagerDataConnectorConfigured;


    public function getConfigurationManagerDataConnectorConfigured(): ?string
    {
        return $this->configurationManagerDataConnectorConfigured;
    }

    public function setConfigurationManagerDataConnectorConfigured(?string $configurationManagerDataConnectorConfigured): self
    {
        $this->configurationManagerDataConnectorConfigured = $configurationManagerDataConnectorConfigured;
        return $this;
    }

}

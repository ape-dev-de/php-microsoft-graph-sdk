<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCallbackConfiguration
 */
class CustomExtensionCallbackConfiguration
{
    /**
     * The maximum duration in ISO 8601 format that Microsoft Entra ID will wait for a resume action for the callout it sent to the logic app. The valid range for custom extensions in lifecycle workflows is five minutes to three hours. The valid range for custom extensions in entitlement management is between 5 minutes and 14 days. For example, PT3H refers to three hours, P3D refers to three days, PT10M refers to ten minutes.
     */
    private ?string $timeoutDuration;

    public function getTimeoutDuration(): ?string
    {
        return $this->timeoutDuration;
    }

    public function setTimeoutDuration(?string $timeoutDuration): self
    {
        $this->timeoutDuration = $timeoutDuration;
        return $this;
    }

}

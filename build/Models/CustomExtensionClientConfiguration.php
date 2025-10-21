<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionClientConfiguration
 */
class CustomExtensionClientConfiguration
{
    /**
     * The max number of retries that Microsoft Entra ID makes to the external API. Values of 0 or 1 are supported. If null, the default for the service applies.
     */
    private ?float $maximumRetries;

    /**
     * The max duration in milliseconds that Microsoft Entra ID waits for a response from the external app before it shuts down the connection. The valid range is between 200 and 2000 milliseconds. Default duration is 1000.
     */
    private ?string $timeoutInMilliseconds;


    public function getMaximumRetries(): ?float
    {
        return $this->maximumRetries;
    }

    public function setMaximumRetries(?float $maximumRetries): self
    {
        $this->maximumRetries = $maximumRetries;
        return $this;
    }

    public function getTimeoutInMilliseconds(): ?string
    {
        return $this->timeoutInMilliseconds;
    }

    public function setTimeoutInMilliseconds(?string $timeoutInMilliseconds): self
    {
        $this->timeoutInMilliseconds = $timeoutInMilliseconds;
        return $this;
    }

}

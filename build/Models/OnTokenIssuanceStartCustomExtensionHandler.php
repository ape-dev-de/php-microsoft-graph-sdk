<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartCustomExtensionHandler
 */
class OnTokenIssuanceStartCustomExtensionHandler
{
    /**
     */
    private ?string $configuration;

    /**
     */
    private ?string $customExtension;


    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function getCustomExtension(): ?string
    {
        return $this->customExtension;
    }

    public function setCustomExtension(?string $customExtension): self
    {
        $this->customExtension = $customExtension;
        return $this;
    }

}

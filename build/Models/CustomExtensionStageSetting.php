<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionStageSetting
 */
class CustomExtensionStageSetting
{
    /**
     */
    private ?string $stage;

    /**
     * Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand.
     */
    private ?string $customExtension;


    public function getStage(): ?string
    {
        return $this->stage;
    }

    public function setStage(?string $stage): self
    {
        $this->stage = $stage;
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

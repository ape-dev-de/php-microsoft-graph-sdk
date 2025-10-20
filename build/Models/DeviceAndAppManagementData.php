<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAndAppManagementData
 */
class DeviceAndAppManagementData
{
    /**
     * Exported Data
     */
    private ?string $content;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

}

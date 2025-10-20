<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminSetting
 */
class CopilotAdminSetting
{
    /**
     */
    private ?string $limitedMode;

    public function getLimitedMode(): ?string
    {
        return $this->limitedMode;
    }

    public function setLimitedMode(?string $limitedMode): self
    {
        $this->limitedMode = $limitedMode;
        return $this;
    }

}

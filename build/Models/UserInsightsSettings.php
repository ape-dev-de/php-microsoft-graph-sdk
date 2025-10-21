<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserInsightsSettings
 */
class UserInsightsSettings
{
    /**
     * True if the user's itemInsights and meeting hours insights are enabled; false if the user's itemInsights and meeting hours insights are disabled. The default value is true. Optional.
     */
    private ?string $isEnabled;


    public function getIsEnabled(): ?string
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?string $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

}

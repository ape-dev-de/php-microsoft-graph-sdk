<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PronounsSettings
 */
class PronounsSettings
{
    /**
     * true to enable pronouns in the organization; otherwise, false. The default value is false, and pronouns are disabled.
     */
    private ?string $isEnabledInOrganization;


    public function getIsEnabledInOrganization(): ?string
    {
        return $this->isEnabledInOrganization;
    }

    public function setIsEnabledInOrganization(?string $isEnabledInOrganization): self
    {
        $this->isEnabledInOrganization = $isEnabledInOrganization;
        return $this;
    }

}

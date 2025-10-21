<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightsSettings
 */
class InsightsSettings
{
    /**
     * The ID of a Microsoft Entra group, of which the specified type of insights are disabled for its members. The default value is null. Optional.
     */
    private ?string $disabledForGroup;

    /**
     * true if insights of the specified type are enabled for the organization; false if insights of the specified type are disabled for all users without exceptions. The default value is true. Optional.
     */
    private ?string $isEnabledInOrganization;


    public function getDisabledForGroup(): ?string
    {
        return $this->disabledForGroup;
    }

    public function setDisabledForGroup(?string $disabledForGroup): self
    {
        $this->disabledForGroup = $disabledForGroup;
        return $this;
    }

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

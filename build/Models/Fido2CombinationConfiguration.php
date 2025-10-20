<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2CombinationConfiguration
 */
class Fido2CombinationConfiguration
{
    /**
     * A list of AAGUIDs allowed to be used as part of the specified authentication method combinations.
     */
    private ?string $allowedAAGUIDs;

    public function getAllowedAAGUIDs(): ?string
    {
        return $this->allowedAAGUIDs;
    }

    public function setAllowedAAGUIDs(?string $allowedAAGUIDs): self
    {
        $this->allowedAAGUIDs = $allowedAAGUIDs;
        return $this;
    }

}

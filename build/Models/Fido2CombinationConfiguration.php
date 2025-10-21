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
     * @var string[]
     */
    private array $allowedAAGUIDs = [];


    /**
     * @return string[]
     */
    public function getAllowedAAGUIDs(): array
    {
        return $this->allowedAAGUIDs;
    }

    /**
     * @param string[] $allowedAAGUIDs
     */
    public function setAllowedAAGUIDs(array $allowedAAGUIDs): self
    {
        $this->allowedAAGUIDs = $allowedAAGUIDs;
        return $this;
    }

}

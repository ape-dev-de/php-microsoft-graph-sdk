<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyLongValuePair
 */
class StringKeyLongValuePair
{
    /**
     * The mapping of the user type from the source system to the target system. For example:User to User - For Microsoft Entra ID to Microsoft Entra ID synchronization worker to user - For Workday to Microsoft Entra synchronization.
     */
    private ?string $key;

    /**
     * Total number of synchronized objects.
     */
    private ?string $value;


    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}

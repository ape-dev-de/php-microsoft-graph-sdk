<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceParameter
 */
class IdentityGovernanceParameter
{
    /**
     * The name of the parameter.
     */
    private ?string $name;

    /**
     * The values of the parameter.
     */
    private ?string $values;

    /**
     */
    private ?string $valueType;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getValues(): ?string
    {
        return $this->values;
    }

    public function setValues(?string $values): self
    {
        $this->values = $values;
        return $this;
    }

    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    public function setValueType(?string $valueType): self
    {
        $this->valueType = $valueType;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiValueLegacyExtendedProperty
 */
class MultiValueLegacyExtendedProperty
{
    /**
     * A collection of property values.
     */
    private ?string $value;

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

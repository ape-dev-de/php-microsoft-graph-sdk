<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySinglePropertySchema
 */
class SecuritySinglePropertySchema
{
    /**
     * The name of the property.
     */
    private ?string $name;

    /**
     * The type of the property.
     */
    private ?string $type;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}

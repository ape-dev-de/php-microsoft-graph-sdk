<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtensionSchemaProperty
 */
class ExtensionSchemaProperty
{
    /**
     * The name of the strongly typed property defined as part of a schema extension.
     */
    private ?string $name;

    /**
     * The type of the property that is defined as part of a schema extension.  Allowed values are Binary, Boolean, DateTime, Integer, or String. For more information, see Supported property data types.
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

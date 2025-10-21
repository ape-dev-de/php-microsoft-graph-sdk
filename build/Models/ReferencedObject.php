<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReferencedObject
 */
class ReferencedObject
{
    /**
     * Name of the referenced object. Must match one of the objects in the directory definition.
     */
    private ?string $referencedObjectName;

    /**
     * Currently not supported. Name of the property in the referenced object, the value for which is used as the reference.
     */
    private ?string $referencedProperty;


    public function getReferencedObjectName(): ?string
    {
        return $this->referencedObjectName;
    }

    public function setReferencedObjectName(?string $referencedObjectName): self
    {
        $this->referencedObjectName = $referencedObjectName;
        return $this;
    }

    public function getReferencedProperty(): ?string
    {
        return $this->referencedProperty;
    }

    public function setReferencedProperty(?string $referencedProperty): self
    {
        $this->referencedProperty = $referencedProperty;
        return $this;
    }

}

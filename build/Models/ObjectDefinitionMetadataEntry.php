<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinitionMetadataEntry
 */
class ObjectDefinitionMetadataEntry
{
    /**
     * Possible values are: PropertyNameAccountEnabled, PropertyNameSoftDeleted, IsSoftDeletionSupported, IsSynchronizeAllSupported, ConnectorDataStorageRequired, Extensions, LinkTypeName.
     */
    private ?string $key;

    /**
     * Value of the metadata property.
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

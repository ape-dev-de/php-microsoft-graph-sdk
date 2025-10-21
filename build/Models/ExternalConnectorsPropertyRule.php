<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsPropertyRule
 */
class ExternalConnectorsPropertyRule
{
    /**
     */
    private ?string $operation;

    /**
     * The property from the externalItem schema. Required.
     */
    private ?string $property;

    /**
     * A collection with one or many strings. One or more specified strings are matched with the specified property using the specified operation. Required.
     * @var string[]
     */
    private array $values = [];

    /**
     */
    private ?string $valuesJoinedBy;


    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function setOperation(?string $operation): self
    {
        $this->operation = $operation;
        return $this;
    }

    public function getProperty(): ?string
    {
        return $this->property;
    }

    public function setProperty(?string $property): self
    {
        $this->property = $property;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param string[] $values
     */
    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }

    public function getValuesJoinedBy(): ?string
    {
        return $this->valuesJoinedBy;
    }

    public function setValuesJoinedBy(?string $valuesJoinedBy): self
    {
        $this->valuesJoinedBy = $valuesJoinedBy;
        return $this;
    }

}

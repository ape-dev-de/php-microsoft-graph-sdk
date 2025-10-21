<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingSource
 */
class AttributeMappingSource
{
    /**
     * Equivalent expression representation of this attributeMappingSource object.
     */
    private ?string $expression;

    /**
     * Name parameter of the mapping source. Depending on the type property value, this can be the name of the function, the name of the source attribute, or a constant value to be used.
     */
    private ?string $name;

    /**
     * If this object represents a function, lists function parameters. Parameters consist of attributeMappingSource objects themselves, allowing for complex expressions. If type isn''t Function, this property is null/empty array.
     */
    private array $parameters = [];

    /**
     */
    private ?string $type;


    public function getExpression(): ?string
    {
        return $this->expression;
    }

    public function setExpression(?string $expression): self
    {
        $this->expression = $expression;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;
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

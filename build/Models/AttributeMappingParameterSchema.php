<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingParameterSchema
 */
class AttributeMappingParameterSchema
{
    /**
     * The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function).
     */
    private ?bool $allowMultipleOccurrences;

    /**
     * Parameter name.
     */
    private ?string $name;

    /**
     * true if the parameter is required; otherwise false.
     */
    private ?bool $required;

    /**
     */
    private ?string $type;


    public function getAllowMultipleOccurrences(): ?bool
    {
        return $this->allowMultipleOccurrences;
    }

    public function setAllowMultipleOccurrences(?bool $allowMultipleOccurrences): self
    {
        $this->allowMultipleOccurrences = $allowMultipleOccurrences;
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

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): self
    {
        $this->required = $required;
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

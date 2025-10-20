<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingFunctionSchema
 */
class AttributeMappingFunctionSchema
{
    /**
     * Collection of function parameters.
     */
    private ?string $parameters;

    public function getParameters(): ?string
    {
        return $this->parameters;
    }

    public function setParameters(?string $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }

}

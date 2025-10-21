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
     * @var string[]
     */
    private array $parameters = [];


    /**
     * @return string[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param string[] $parameters
     */
    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }

}

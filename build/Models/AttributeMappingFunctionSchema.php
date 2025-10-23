<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingFunctionSchema
 */
class AttributeMappingFunctionSchema
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Collection of function parameters.
     * @var AttributeMappingParameterSchema[]
     */
    public array $parameters = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['parameters'])) {
            $this->parameters = $data['parameters'];
        }
    }
}

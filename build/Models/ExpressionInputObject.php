<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExpressionInputObject
 */
class ExpressionInputObject
{
    /** 
     * Definition of the test object.
     * @var ObjectDefinition|\stdClass|null
     */
    public mixed $definition = null;

    /** 
     * Property values of the test object.
     * @var StringKeyObjectValuePair[]
     */
    public array $properties = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['definition'])) {
            $this->definition = is_array($data['definition']) ? new ObjectDefinition($data['definition']) : $data['definition'];
        }
        if (isset($data['properties'])) {
            $this->properties = $data['properties'];
        }
    }
}

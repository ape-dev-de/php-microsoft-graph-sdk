<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingParameterSchema
 */
class AttributeMappingParameterSchema
{
    /** The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function). */
    public ?bool $allowMultipleOccurrences = null;

    /** Parameter name. */
    public ?string $name = null;

    /** true if the parameter is required; otherwise false. */
    public ?bool $required = null;

    /**  */
    public ?AttributeType $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowMultipleOccurrences'])) {
            $this->allowMultipleOccurrences = $data['allowMultipleOccurrences'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['required'])) {
            $this->required = $data['required'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}

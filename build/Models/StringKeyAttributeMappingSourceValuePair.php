<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyAttributeMappingSourceValuePair
 */
class StringKeyAttributeMappingSourceValuePair
{
    /** The name of the parameter. */
    public ?string $key = null;

    /** 
     * The value of the parameter.
     * @var AttributeMappingSource|\stdClass|null
     */
    public mixed $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}

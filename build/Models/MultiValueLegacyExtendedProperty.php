<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiValueLegacyExtendedProperty
 */
class MultiValueLegacyExtendedProperty
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of property values.
     * @var string[]
     */
    public array $value = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}

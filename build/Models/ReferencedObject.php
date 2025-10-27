<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReferencedObject
 */
class ReferencedObject
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Name of the referenced object. Must match one of the objects in the directory definition. */
    public ?string $referencedObjectName = null;

    /** Currently not supported. Name of the property in the referenced object, the value for which is used as the reference. */
    public ?string $referencedProperty = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['referencedObjectName'])) {
            $this->referencedObjectName = $data['referencedObjectName'];
        }
        if (isset($data['referencedProperty'])) {
            $this->referencedProperty = $data['referencedProperty'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

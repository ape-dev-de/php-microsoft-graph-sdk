<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceReference
 */
class ResourceReference
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The item's unique identifier. */
    public ?string $id = null;

    /** A string value that can be used to classify the item, such as 'microsoft.graph.driveItem' */
    public ?string $type = null;

    /** A URL leading to the referenced item. */
    public ?string $webUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
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

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeleteAction
 */
class DeleteAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the item that was deleted. */
    public ?string $name = null;

    /** File or Folder, depending on the type of the deleted item. */
    public ?string $objectType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['objectType'])) {
            $this->objectType = $data['objectType'];
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

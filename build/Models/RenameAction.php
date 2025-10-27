<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RenameAction
 */
class RenameAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The new name of the item. */
    public ?string $newName = null;

    /** The previous name of the item. */
    public ?string $oldName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['newName'])) {
            $this->newName = $data['newName'];
        }
        if (isset($data['oldName'])) {
            $this->oldName = $data['oldName'];
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

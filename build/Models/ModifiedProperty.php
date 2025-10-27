<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ModifiedProperty
 */
class ModifiedProperty
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates the property name of the target attribute that was changed. */
    public ?string $displayName = null;

    /** Indicates the updated value for the propery. */
    public ?string $newValue = null;

    /** Indicates the previous value (before the update) for the property. */
    public ?string $oldValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['newValue'])) {
            $this->newValue = $data['newValue'];
        }
        if (isset($data['oldValue'])) {
            $this->oldValue = $data['oldValue'];
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

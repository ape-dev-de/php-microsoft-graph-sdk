<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditProperty
 */
class AuditProperty
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Display name. */
    public ?string $displayName = null;

    /** New value. */
    public ?string $newValue = null;

    /** Old value. */
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

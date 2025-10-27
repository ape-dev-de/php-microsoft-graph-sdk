<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditProperty
 */
class CloudPcAuditProperty
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The display name for this property. */
    public ?string $displayName = null;

    /** The new value for this property. */
    public ?string $newValue = null;

    /** The old value for this property. */
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

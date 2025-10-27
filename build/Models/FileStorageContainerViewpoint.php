<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerViewpoint
 */
class FileStorageContainerViewpoint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The current user's effective role. Read-only. */
    public ?string $effectiveRole = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['effectiveRole'])) {
            $this->effectiveRole = $data['effectiveRole'];
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

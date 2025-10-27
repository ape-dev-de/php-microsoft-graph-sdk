<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VersionAction
 */
class VersionAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the new version that was created by this action. */
    public ?string $newVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['newVersion'])) {
            $this->newVersion = $data['newVersion'];
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

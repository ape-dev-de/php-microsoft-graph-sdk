<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIndicator
 */
class SecurityIndicator
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?SecurityIndicatorSource $source = null;

    /**  */
    public ?SecurityArtifact $artifact = null;


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
        if (isset($data['source'])) {
            $this->source = is_array($data['source']) ? new SecurityIndicatorSource($data['source']) : $data['source'];
        }
        if (isset($data['artifact'])) {
            $this->artifact = is_array($data['artifact']) ? new SecurityArtifact($data['artifact']) : $data['artifact'];
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

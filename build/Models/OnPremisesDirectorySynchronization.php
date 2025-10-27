<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronization
 */
class OnPremisesDirectorySynchronization
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant. Nullable.
     * @var OnPremisesDirectorySynchronizationConfiguration|\stdClass|null
     */
    public OnPremisesDirectorySynchronizationConfiguration|\stdClass|null $configuration = null;

    /**  */
    public ?OnPremisesDirectorySynchronizationFeature $features = null;


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
        if (isset($data['configuration'])) {
            $this->configuration = is_array($data['configuration']) ? new OnPremisesDirectorySynchronizationConfiguration($data['configuration']) : $data['configuration'];
        }
        if (isset($data['features'])) {
            $this->features = is_array($data['features']) ? new OnPremisesDirectorySynchronizationFeature($data['features']) : $data['features'];
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

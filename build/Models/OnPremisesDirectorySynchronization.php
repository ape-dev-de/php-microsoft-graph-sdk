<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronization
 */
class OnPremisesDirectorySynchronization
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant. Nullable.
     * @var OnPremisesDirectorySynchronizationConfiguration|\stdClass|null
     */
    public mixed $configuration = null;

    /**  */
    public ?OnPremisesDirectorySynchronizationFeature $features = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}

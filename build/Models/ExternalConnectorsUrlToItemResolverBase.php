<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsUrlToItemResolverBase
 */
class ExternalConnectorsUrlToItemResolverBase
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The priority which defines the sequence in which the urlToItemResolverBase instances are evaluated. */
    public ?float $priority = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['priority'])) {
            $this->priority = is_numeric($data['priority']) ? (float)$data['priority'] : $data['priority'];
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

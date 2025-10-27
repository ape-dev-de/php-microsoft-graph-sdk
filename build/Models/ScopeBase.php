<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScopeBase
 */
class ScopeBase
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The identifier for the scope. This could be a user ID, group ID, or a keyword like 'All' for tenant scope. */
    public ?string $identity = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['identity'])) {
            $this->identity = $data['identity'];
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

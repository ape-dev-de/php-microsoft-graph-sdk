<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlternativeSecurityId
 */
class AlternativeSecurityId
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** For internal use only. */
    public ?string $identityProvider = null;

    /** For internal use only. */
    public ?string $key = null;

    /** For internal use only. */
    public ?float $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['identityProvider'])) {
            $this->identityProvider = $data['identityProvider'];
        }
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['type'])) {
            $this->type = is_numeric($data['type']) ? (float)$data['type'] : $data['type'];
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

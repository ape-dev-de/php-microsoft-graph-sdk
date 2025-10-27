<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSetting
 */
class OmaSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Description. */
    public ?string $description = null;

    /** Display Name. */
    public ?string $displayName = null;

    /** OMA. */
    public ?string $omaUri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['omaUri'])) {
            $this->omaUri = $data['omaUri'];
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

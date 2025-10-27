<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RgbColor
 */
class RgbColor
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Blue value */
    public ?float $b = null;

    /** Green value */
    public ?float $g = null;

    /** Red value */
    public ?float $r = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['b'])) {
            $this->b = is_numeric($data['b']) ? (float)$data['b'] : $data['b'];
        }
        if (isset($data['g'])) {
            $this->g = is_numeric($data['g']) ? (float)$data['g'] : $data['g'];
        }
        if (isset($data['r'])) {
            $this->r = is_numeric($data['r']) ? (float)$data['r'] : $data['r'];
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

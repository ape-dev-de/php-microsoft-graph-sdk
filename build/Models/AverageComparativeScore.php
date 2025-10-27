<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AverageComparativeScore
 */
class AverageComparativeScore
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Average score within specified basis. */
    public ?string $averageScore = null;

    /** Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes. */
    public ?string $basis = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['averageScore'])) {
            $this->averageScore = $data['averageScore'];
        }
        if (isset($data['basis'])) {
            $this->basis = $data['basis'];
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

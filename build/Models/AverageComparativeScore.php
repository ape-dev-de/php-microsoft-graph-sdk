<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AverageComparativeScore
 */
class AverageComparativeScore
{
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
        if (isset($data['averageScore'])) {
            $this->averageScore = $data['averageScore'];
        }
        if (isset($data['basis'])) {
            $this->basis = $data['basis'];
        }
    }
}

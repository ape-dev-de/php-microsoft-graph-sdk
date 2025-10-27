<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NumberColumn
 */
class NumberColumn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** How many decimal places to display. See below for information about the possible values. */
    public ?string $decimalPlaces = null;

    /** How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number. */
    public ?string $displayAs = null;

    /** 
     * The maximum permitted value.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $maximum = null;

    /** 
     * The minimum permitted value.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $minimum = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['decimalPlaces'])) {
            $this->decimalPlaces = $data['decimalPlaces'];
        }
        if (isset($data['displayAs'])) {
            $this->displayAs = $data['displayAs'];
        }
        if (isset($data['maximum'])) {
            $this->maximum = is_numeric($data['maximum']) ? (float)$data['maximum'] : $data['maximum'];
        }
        if (isset($data['minimum'])) {
            $this->minimum = is_numeric($data['minimum']) ? (float)$data['minimum'] : $data['minimum'];
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

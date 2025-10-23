<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NumberColumn
 */
class NumberColumn
{
    /** How many decimal places to display. See below for information about the possible values. */
    public ?string $decimalPlaces = null;

    /** How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number. */
    public ?string $displayAs = null;

    /** The maximum permitted value. */
    public ?string $maximum = null;

    /** The minimum permitted value. */
    public ?string $minimum = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['decimalPlaces'])) {
            $this->decimalPlaces = $data['decimalPlaces'];
        }
        if (isset($data['displayAs'])) {
            $this->displayAs = $data['displayAs'];
        }
        if (isset($data['maximum'])) {
            $this->maximum = $data['maximum'];
        }
        if (isset($data['minimum'])) {
            $this->minimum = $data['minimum'];
        }
    }
}

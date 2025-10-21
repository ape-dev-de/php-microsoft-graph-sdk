<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NumberColumn
 */
class NumberColumn
{
    public function __construct(
        /** How many decimal places to display. See below for information about the possible values. */
        public ?string $decimalPlaces = null,
        /** How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number. */
        public ?string $displayAs = null,
        /** The maximum permitted value. */
        public ?string $maximum = null,
        /** The minimum permitted value. */
        public ?string $minimum = null
    ) {}
}

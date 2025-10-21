<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalculatedColumn
 */
class CalculatedColumn
{
    public function __construct(
        /** For dateTime output types, the format of the value. Possible values are: dateOnly or dateTime. */
        public ?string $format = null,
        /** The formula used to compute the value for this column. */
        public ?string $formula = null,
        /** The output type used to format values in this column. Possible values are: boolean, currency, dateTime, number, or text. */
        public ?string $outputType = null
    ) {}
}

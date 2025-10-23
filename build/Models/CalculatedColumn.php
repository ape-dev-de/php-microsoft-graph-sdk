<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalculatedColumn
 */
class CalculatedColumn
{
    /** For dateTime output types, the format of the value. Possible values are: dateOnly or dateTime. */
    public ?string $format = null;

    /** The formula used to compute the value for this column. */
    public ?string $formula = null;

    /** The output type used to format values in this column. Possible values are: boolean, currency, dateTime, number, or text. */
    public ?string $outputType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
        if (isset($data['formula'])) {
            $this->formula = $data['formula'];
        }
        if (isset($data['outputType'])) {
            $this->outputType = $data['outputType'];
        }
    }
}

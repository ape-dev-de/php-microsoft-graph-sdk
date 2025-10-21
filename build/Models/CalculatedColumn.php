<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalculatedColumn
 */
class CalculatedColumn
{
    /**
     * For dateTime output types, the format of the value. Possible values are: dateOnly or dateTime.
     */
    private ?string $format;

    /**
     * The formula used to compute the value for this column.
     */
    private ?string $formula;

    /**
     * The output type used to format values in this column. Possible values are: boolean, currency, dateTime, number, or text.
     */
    private ?string $outputType;


    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(?string $formula): self
    {
        $this->formula = $formula;
        return $this;
    }

    public function getOutputType(): ?string
    {
        return $this->outputType;
    }

    public function setOutputType(?string $outputType): self
    {
        $this->outputType = $outputType;
        return $this;
    }

}

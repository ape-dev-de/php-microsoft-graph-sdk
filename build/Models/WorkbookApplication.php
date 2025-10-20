<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookApplication
 */
class WorkbookApplication
{
    /**
     * Returns the calculation mode used in the workbook. Possible values are: Automatic, AutomaticExceptTables, Manual.
     */
    private ?string $calculationMode;

    public function getCalculationMode(): ?string
    {
        return $this->calculationMode;
    }

    public function setCalculationMode(?string $calculationMode): self
    {
        $this->calculationMode = $calculationMode;
        return $this;
    }

}

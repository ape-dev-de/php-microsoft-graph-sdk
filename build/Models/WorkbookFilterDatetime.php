<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilterDatetime
 */
class WorkbookFilterDatetime
{
    /**
     * The date in ISO 8601 format used to filter data.
     */
    private ?string $date;

    /**
     * Defines how specific you should use the date to keep data. For example, if the date is 2005-04-02 and the specificity property is set to month, the filter operation keeps all rows with a date in the month of April 2009. The possible values are: Year, Month, Day, Hour, Minute, Second.
     */
    private ?string $specificity;


    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getSpecificity(): ?string
    {
        return $this->specificity;
    }

    public function setSpecificity(?string $specificity): self
    {
        $this->specificity = $specificity;
        return $this;
    }

}

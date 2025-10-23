<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilterDatetime
 */
class WorkbookFilterDatetime
{
    /** The date in ISO 8601 format used to filter data. */
    public ?string $date = null;

    /** Defines how specific you should use the date to keep data. For example, if the date is 2005-04-02 and the specificity property is set to month, the filter operation keeps all rows with a date in the month of April 2009. The possible values are: Year, Month, Day, Hour, Minute, Second. */
    public ?string $specificity = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['date'])) {
            $this->date = $data['date'];
        }
        if (isset($data['specificity'])) {
            $this->specificity = $data['specificity'];
        }
    }
}

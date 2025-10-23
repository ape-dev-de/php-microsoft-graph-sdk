<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookApplication
 */
class WorkbookApplication
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Returns the calculation mode used in the workbook. Possible values are: Automatic, AutomaticExceptTables, Manual. */
    public ?string $calculationMode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['calculationMode'])) {
            $this->calculationMode = $data['calculationMode'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFormatProtection
 */
class WorkbookFormatProtection
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting. */
    public ?bool $formulaHidden = null;

    /** Indicates whether Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting. */
    public ?bool $locked = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['formulaHidden'])) {
            $this->formulaHidden = $data['formulaHidden'];
        }
        if (isset($data['locked'])) {
            $this->locked = $data['locked'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheetProtection
 */
class WorkbookWorksheetProtection
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Worksheet protection options. Read-only.
     * @var WorkbookWorksheetProtectionOptions|\stdClass|null
     */
    public mixed $options = null;

    /** Indicates whether the worksheet is protected.  Read-only. */
    public ?bool $protected = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['options'])) {
            $this->options = is_array($data['options']) ? new WorkbookWorksheetProtectionOptions($data['options']) : $data['options'];
        }
        if (isset($data['protected'])) {
            $this->protected = $data['protected'];
        }
    }
}

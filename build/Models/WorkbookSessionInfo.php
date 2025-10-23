<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookSessionInfo
 */
class WorkbookSessionInfo
{
    /** ID of the workbook session. */
    public ?string $id = null;

    /** true for persistent session. false for non-persistent session (view mode) */
    public ?bool $persistChanges = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['persistChanges'])) {
            $this->persistChanges = $data['persistChanges'];
        }
    }
}

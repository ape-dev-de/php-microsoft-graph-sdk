<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RenameAction
 */
class RenameAction
{
    /** The new name of the item. */
    public ?string $newName = null;

    /** The previous name of the item. */
    public ?string $oldName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['newName'])) {
            $this->newName = $data['newName'];
        }
        if (isset($data['oldName'])) {
            $this->oldName = $data['oldName'];
        }
    }
}

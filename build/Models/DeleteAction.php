<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeleteAction
 */
class DeleteAction
{
    /** The name of the item that was deleted. */
    public ?string $name = null;

    /** File or Folder, depending on the type of the deleted item. */
    public ?string $objectType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['objectType'])) {
            $this->objectType = $data['objectType'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetVersionItem
 */
class DocumentSetVersionItem
{
    /** The unique identifier for the item. */
    public ?string $itemId = null;

    /** The title of the item. */
    public ?string $title = null;

    /** The version ID of the item. */
    public ?string $versionId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['itemId'])) {
            $this->itemId = $data['itemId'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['versionId'])) {
            $this->versionId = $data['versionId'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardRoot
 */
class CloudClipboardRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents a collection of Cloud Clipboard items.
     * @var CloudClipboardItem[]
     */
    public array $items = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['items'])) {
            $this->items = $data['items'];
        }
    }
}

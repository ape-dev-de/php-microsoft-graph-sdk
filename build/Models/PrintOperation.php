<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintOperation
 */
class PrintOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The DateTimeOffset when the operation was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?PrintOperationStatus $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}

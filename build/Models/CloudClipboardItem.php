<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudClipboardItem
 */
class CloudClipboardItem
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Set by the server. DateTime in UTC when the object was created on the server. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Set by the server. DateTime in UTC when the object expires and after that the object is no longer available. The default and also maximum TTL is 12 hours after the creation, but it might change for performance optimization. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Set by the server if not provided in the client's request. DateTime in UTC when the object was modified by the client. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * A cloudClipboardItem can have multiple cloudClipboardItemPayload objects in the payloads. A window can place more than one clipboard object on the clipboard. Each one represents the same information in a different clipboard format.
     * @var CloudClipboardItemPayload[]
     */
    public array $payloads = [];


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
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['payloads'])) {
            $this->payloads = $data['payloads'];
        }
    }
}

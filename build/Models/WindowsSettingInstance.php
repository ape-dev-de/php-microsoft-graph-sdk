<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsSettingInstance
 */
class WindowsSettingInstance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Set by the server. Represents the dateTime in UTC when the object was created on the server. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Set by the server. The object expires at the specified dateTime in UTC, making it unavailable after that time. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Set by the server if not provided in the request from the Windows client device. Refers to the user's Windows device that modified the object at the specified dateTime in UTC. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Base64-encoded JSON setting value. */
    public ?string $payload = null;


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
        if (isset($data['payload'])) {
            $this->payload = $data['payload'];
        }
    }
}

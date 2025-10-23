<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePoint
 */
class RestorePoint
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Expiration date time of the restore point. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Date time when the restore point was created. */
    public ?\DateTimeInterface $protectionDateTime = null;

    /** 
     * The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     * @var RestorePointTags|\stdClass|null
     */
    public mixed $tags = null;

    /** 
     * The site, drive, or mailbox units that are protected under a protection policy.
     * @var ProtectionUnitBase|\stdClass|null
     */
    public mixed $protectionUnit = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['protectionDateTime'])) {
            $this->protectionDateTime = $data['protectionDateTime'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['protectionUnit'])) {
            $this->protectionUnit = $data['protectionUnit'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePoint
 */
class RestorePoint
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Expiration date time of the restore point. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Date time when the restore point was created. */
        public ?\DateTimeInterface $protectionDateTime = null,
        /** The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue. */
        public ?RestorePointTags $tags = null,
        /** The site, drive, or mailbox units that are protected under a protection policy. */
        public ?ProtectionUnitBase $protectionUnit = null
    ) {}
}

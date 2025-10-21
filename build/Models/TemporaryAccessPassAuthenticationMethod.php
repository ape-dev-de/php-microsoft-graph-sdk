<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TemporaryAccessPassAuthenticationMethod
 */
class TemporaryAccessPassAuthenticationMethod
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time when the Temporary Access Pass was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The state of the authentication method that indicates whether it's currently usable by the user. */
        public ?bool $isUsable = null,
        /** Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime. */
        public ?bool $isUsableOnce = null,
        /** The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days). */
        public ?float $lifetimeInMinutes = null,
        /** Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed. */
        public ?string $methodUsabilityReason = null,
        /** The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET. */
        public ?string $temporaryAccessPass = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Shared
 */
class Shared
{
    public function __construct(
        /** The identity of the owner of the shared item. Read-only. */
        public ?IdentitySet $owner = null,
        /** Indicates the scope of how the item is shared. The possible values are: anonymous, organization, or users. Read-only. */
        public ?string $scope = null,
        /** The identity of the user who shared the item. Read-only. */
        public ?IdentitySet $sharedBy = null,
        /** The UTC date and time when the item was shared. Read-only. */
        public ?\DateTimeInterface $sharedDateTime = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveRecipient
 */
class DriveRecipient
{
    public function __construct(
        /** The alias of the domain object, for cases where an email address is unavailable (for example, security groups). */
        public ?string $alias = null,
        /** The email address for the recipient, if the recipient has an associated email address. */
        public ?string $email = null,
        /** The unique identifier for the recipient in the directory. */
        public ?string $objectId = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Permission
 */
class Permission
{
    public function __construct(
        /** A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there's no expiration set for this permission. Optional. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** For user type permissions, the details of the users and applications for this permission. Read-only. */
        public ?string $grantedTo = null,
        /** For type permissions, the details of the users to whom permission was granted. Read-only. */
        public array $grantedToIdentities = [],
        /** For link type permissions, the details of the users to whom permission was granted. Read-only. */
        public array $grantedToIdentitiesV2 = [],
        /** For user type permissions, the details of the users and applications for this permission. Read-only. */
        public ?string $grantedToV2 = null,
        /** Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only.. */
        public ?bool $hasPassword = null,
        /** Provides a reference to the ancestor of the current permission, if it''s inherited from an ancestor. Read-only. */
        public ?string $inheritedFrom = null,
        /** Details of any associated sharing invitation for this permission. Read-only. */
        public ?string $invitation = null,
        /** Provides the link details of the current permission, if it''s a link type permission. Read-only. */
        public ?string $link = null,
        /** @var string[] The type of permission, for example, read. See below for the full list of roles. Read-only. */
        public array $roles = [],
        /** A unique token that can be used to access this shared item via the shares API. Read-only. */
        public ?string $shareId = null
    ) {}
}

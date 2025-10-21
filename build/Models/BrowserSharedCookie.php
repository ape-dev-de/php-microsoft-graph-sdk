<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookie
 */
class BrowserSharedCookie
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The comment for the shared cookie. */
        public ?string $comment = null,
        /** The date and time when the shared cookie was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The date and time when the shared cookie was deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** The name of the cookie. */
        public ?string $displayName = null,
        /** The history of modifications applied to the cookie. */
        public array $history = [],
        /** Controls whether a cookie is a host-only or domain cookie. */
        public ?bool $hostOnly = null,
        /** The URL of the cookie. */
        public ?string $hostOrDomain = null,
        /** The user who last modified the cookie. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The date and time when the cookie was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The path of the cookie. */
        public ?string $path = null,
        /**  */
        public ?BrowserSharedCookieSourceEnvironment $sourceEnvironment = null,
        /**  */
        public ?BrowserSharedCookieStatus $status = null
    ) {}
}

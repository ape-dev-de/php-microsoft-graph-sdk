<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookieHistory
 */
class BrowserSharedCookieHistory
{
    public function __construct(
        /** The comment for the shared cookie. */
        public ?string $comment = null,
        /** The name of the cookie. */
        public ?string $displayName = null,
        /** Controls whether a cookie is a host-only or domain cookie. */
        public ?bool $hostOnly = null,
        /** The URL of the cookie. */
        public ?string $hostOrDomain = null,
        /**  */
        public ?IdentitySet $lastModifiedBy = null,
        /** The path of the cookie. */
        public ?string $path = null,
        /** The date and time when the cookie was last published. */
        public ?\DateTimeInterface $publishedDateTime = null,
        /** Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue. */
        public ?BrowserSharedCookieSourceEnvironment $sourceEnvironment = null
    ) {}
}

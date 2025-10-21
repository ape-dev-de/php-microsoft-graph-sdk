<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteList
 */
class BrowserSiteList
{
    public function __construct(
        /** The description of the site list. */
        public ?string $description = null,
        /** The name of the site list. */
        public ?string $displayName = null,
        /** The user who last modified the site list. */
        public ?string $lastModifiedBy = null,
        /** The date and time when the site list was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The user who published the site list. */
        public ?string $publishedBy = null,
        /** The date and time when the site list was published. */
        public ?\DateTimeInterface $publishedDateTime = null,
        /** The current revision of the site list. */
        public ?string $revision = null,
        /**  */
        public ?string $status = null,
        /** A collection of shared cookies defined for the site list. */
        public array $sharedCookies = [],
        /** @var string[] A singleton entity which is used to specify IE mode site list metadata */
        public array $sites = []
    ) {}
}

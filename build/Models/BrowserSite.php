<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSite
 */
class BrowserSite
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain. */
        public ?bool $allowRedirect = null,
        /** The comment for the site. */
        public ?string $comment = null,
        /**  */
        public ?BrowserSiteCompatibilityMode $compatibilityMode = null,
        /** The date and time when the site was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The date and time when the site was deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** The history of modifications applied to the site. */
        public array $history = [],
        /** The user who last modified the site. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The date and time when the site was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?BrowserSiteMergeType $mergeType = null,
        /**  */
        public ?BrowserSiteStatus $status = null,
        /**  */
        public ?BrowserSiteTargetEnvironment $targetEnvironment = null,
        /** The URL of the site. */
        public ?string $webUrl = null
    ) {}
}

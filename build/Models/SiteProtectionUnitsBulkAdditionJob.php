<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionUnitsBulkAdditionJob
 */
class SiteProtectionUnitsBulkAdditionJob
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity of person who created the job. */
        public ?string $createdBy = null,
        /** The time of creation of the job. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the protection units bulk addition job. */
        public ?string $displayName = null,
        /** Error details containing resource resolution failures, if any. */
        public ?string $error = null,
        /** The identity of the person who last modified the job. */
        public ?string $lastModifiedBy = null,
        /** Timestamp of the last modification made to the job. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?string $status = null,
        /** @var string[] The list of SharePoint site IDs to add to the SharePoint protection policy. */
        public array $siteIds = [],
        /** @var string[] The list of SharePoint site URLs to add to the SharePoint protection policy. */
        public array $siteWebUrls = []
    ) {}
}

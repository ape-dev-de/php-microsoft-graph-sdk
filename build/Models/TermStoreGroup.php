<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreGroup
 */
class TermStoreGroup
{
    public function __construct(
        /** Date and time of the group creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description that gives details on the term usage. */
        public ?string $description = null,
        /** Name of the group. */
        public ?string $displayName = null,
        /** ID of the parent site of this group. */
        public ?string $parentSiteId = null,
        /** Returns the type of the group. Possible values are: global, system, and siteCollection. */
        public ?string $scope = null,
        /** @var string[] All sets under the group in a term [store]. */
        public array $sets = []
    ) {}
}

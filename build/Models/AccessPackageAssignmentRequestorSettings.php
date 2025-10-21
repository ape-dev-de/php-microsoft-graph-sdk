<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestorSettings
 */
class AccessPackageAssignmentRequestorSettings
{
    public function __construct(
        /** False indicates that the requestor isn't permitted to include a schedule in their request. */
        public ?bool $allowCustomAssignmentSchedule = null,
        /** True allows on-behalf-of requestors to create a request to add access for another principal. */
        public ?bool $enableOnBehalfRequestorsToAddAccess = null,
        /** True allows on-behalf-of requestors to create a request to remove access for another principal. */
        public ?bool $enableOnBehalfRequestorsToRemoveAccess = null,
        /** True allows on-behalf-of requestors to create a request to update access for another principal. */
        public ?bool $enableOnBehalfRequestorsToUpdateAccess = null,
        /** True allows requestors to create a request to add access for themselves. */
        public ?bool $enableTargetsToSelfAddAccess = null,
        /** True allows requestors to create a request to remove their access. */
        public ?bool $enableTargetsToSelfRemoveAccess = null,
        /** True allows requestors to create a request to update their access. */
        public ?bool $enableTargetsToSelfUpdateAccess = null,
        /** @var string[] The principals who can request on-behalf-of others. */
        public array $onBehalfRequestors = []
    ) {}
}

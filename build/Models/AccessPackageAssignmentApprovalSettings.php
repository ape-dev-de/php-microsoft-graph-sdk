<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentApprovalSettings
 */
class AccessPackageAssignmentApprovalSettings
{
    public function __construct(
        /** If false, then approval isn't required for new requests in this policy. */
        public ?bool $isApprovalRequiredForAdd = null,
        /** If false, then approval isn't required for updates to requests in this policy. */
        public ?bool $isApprovalRequiredForUpdate = null,
        /** If false, then requestor justification isn't required for updates to requests in this policy. */
        public ?bool $isRequestorJustificationRequired = null,
        /** If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required. */
        public array $stages = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentPolicy
 */
class AccessPackageAssignmentPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue. */
        public ?string $allowedTargetScope = null,
        /** This property is only present for an auto assignment policy; if absent, this is a request-based policy. */
        public ?string $automaticRequestSettings = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of the policy. */
        public ?string $description = null,
        /** The display name of the policy. */
        public ?string $displayName = null,
        /** The expiration date for assignments created in this policy. */
        public ?string $expiration = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /**  */
        public ?string $notificationSettings = null,
        /** Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests. */
        public ?string $requestApprovalSettings = null,
        /** Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request. */
        public ?string $requestorSettings = null,
        /** Settings for access reviews of assignments through this policy. */
        public ?string $reviewSettings = null,
        /** The principals that can be assigned access from an access package through this policy. */
        public array $specificAllowedTargets = [],
        /** Access package containing this policy. Read-only.  Supports $expand. */
        public ?string $accessPackage = null,
        /** Catalog of the access package containing this policy. Read-only. */
        public ?string $catalog = null,
        /** The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand. */
        public array $customExtensionStageSettings = [],
        /** Questions that are posed to the  requestor. */
        public array $questions = []
    ) {}
}

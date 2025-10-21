<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionRule
 */
class DriveProtectionRule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity of person who created the rule. */
        public ?IdentitySet $createdBy = null,
        /** The time of creation of the rule. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Contains error details if an operation on a rule fails. */
        public ?PublicError $error = null,
        /**  */
        public ?bool $isAutoApplyEnabled = null,
        /** The identity of the person who last modified the rule. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Timestamp of the last modification made to the rule. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The status of the protection rule. The possible values are: draft, active, completed, completedWithErrors, unknownFutureValue. The draft member is currently unsupported. */
        public ?ProtectionRuleStatus $status = null,
        /** Contains a drive expression. For examples, see driveExpression examples. */
        public ?string $driveExpression = null
    ) {}
}

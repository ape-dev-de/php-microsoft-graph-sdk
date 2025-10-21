<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureSummary
 */
class UserRegistrationFeatureSummary
{
    public function __construct(
        /** Total number of users accounts, excluding those that are blocked. */
        public ?float $totalUserCount = null,
        /** Number of users registered or capable for multi-factor authentication, self-service password reset, and passwordless authentication. */
        public array $userRegistrationFeatureCounts = [],
        /** The role type of the user. Possible values are: all, privilegedAdmin, admin, user, unknownFutureValue. */
        public ?IncludedUserRoles $userRoles = null,
        /** User type. Possible values are: all, member, guest, unknownFutureValue. */
        public ?IncludedUserTypes $userTypes = null
    ) {}
}

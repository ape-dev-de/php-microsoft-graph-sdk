<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodSummary
 */
class UserRegistrationMethodSummary
{
    public function __construct(
        /** Total number of users in the tenant. */
        public ?float $totalUserCount = null,
        /** Number of users registered for each authentication method. */
        public array $userRegistrationMethodCounts = [],
        /** The role type of the user. Possible values are: all, privilegedAdmin, admin, user, unknownFutureValue. */
        public ?IncludedUserRoles $userRoles = null,
        /** User type. Possible values are: all, member, guest, unknownFutureValue. */
        public ?IncludedUserTypes $userTypes = null
    ) {}
}

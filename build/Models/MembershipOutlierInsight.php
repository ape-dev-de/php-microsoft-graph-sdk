<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembershipOutlierInsight
 */
class MembershipOutlierInsight
{
    public function __construct(
        /** Indicates the identifier of the container, for example, a group ID. */
        public ?string $containerId = null,
        /** Indicates the identifier of the user. */
        public ?string $memberId = null,
        /**  */
        public ?string $outlierContainerType = null,
        /**  */
        public ?string $outlierMemberType = null,
        /** Navigation link to the container directory object. For example, to a group. */
        public ?string $container = null,
        /** Navigation link to a member object who modified the record. For example, to a user. */
        public ?string $lastModifiedBy = null,
        /** Navigation link to a member object. For example, to a user. */
        public ?string $member = null
    ) {}
}

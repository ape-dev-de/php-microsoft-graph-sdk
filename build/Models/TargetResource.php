<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetResource
 */
class TargetResource
{
    public function __construct(
        /** Indicates the unique ID of the resource. */
        public ?string $id = null,
        /** Indicates the visible name defined for the resource. Typically specified when the resource is created. */
        public ?string $displayName = null,
        /** When type is set to Group, this indicates the group type. Possible values are: unifiedGroups, azureAD, and unknownFutureValue */
        public ?string $groupType = null,
        /** Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type. */
        public array $modifiedProperties = [],
        /** Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User. */
        public ?string $type = null,
        /** When type is set to User, this includes the user name that initiated the action; null for other types. */
        public ?string $userPrincipalName = null
    ) {}
}

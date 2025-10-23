<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTarget
 */
class CrossTenantAccessPolicyTarget
{
    /** Defines the target for cross-tenant access policy settings and can have one of the following values:  The unique identifier of the user, group, or application  AllUsers  AllApplications - Refers to any Microsoft cloud application.  Office365 - Includes the applications mentioned as part of the Office 365 suite. */
    public ?string $target = null;

    /** 
     * The type of resource that you want to target. The possible values are: user, group, application, unknownFutureValue.
     * @var CrossTenantAccessPolicyTargetType|\stdClass|null
     */
    public mixed $targetType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
        if (isset($data['targetType'])) {
            $this->targetType = $data['targetType'];
        }
    }
}

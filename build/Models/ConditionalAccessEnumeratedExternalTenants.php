<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessEnumeratedExternalTenants
 */
class ConditionalAccessEnumeratedExternalTenants
{
    /** 
     * The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object.
     * @var ConditionalAccessExternalTenantsMembershipKind|\stdClass|null
     */
    public mixed $membershipKind = null;

    /** 
     * A collection of tenant IDs that define the scope of a policy targeting conditional access for guests and external users.
     * @var string[]
     */
    public array $members = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['membershipKind'])) {
            $this->membershipKind = is_array($data['membershipKind']) ? new ConditionalAccessExternalTenantsMembershipKind($data['membershipKind']) : $data['membershipKind'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
    }
}

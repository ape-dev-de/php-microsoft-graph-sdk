<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessExternalTenants
 */
class ConditionalAccessExternalTenants
{
    /** 
     * The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object.
     * @var ConditionalAccessExternalTenantsMembershipKind|\stdClass|null
     */
    public mixed $membershipKind = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['membershipKind'])) {
            $this->membershipKind = is_array($data['membershipKind']) ? new ConditionalAccessExternalTenantsMembershipKind($data['membershipKind']) : $data['membershipKind'];
        }
    }
}

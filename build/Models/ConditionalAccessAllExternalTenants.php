<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessAllExternalTenants
 */
class ConditionalAccessAllExternalTenants
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object.
     * @var ConditionalAccessExternalTenantsMembershipKind|\stdClass|null
     */
    public ConditionalAccessExternalTenantsMembershipKind|\stdClass|null $membershipKind = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['membershipKind'])) {
            $this->membershipKind = is_string($data['membershipKind']) ? ConditionalAccessExternalTenantsMembershipKind::tryFrom($data['membershipKind']) : $data['membershipKind'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

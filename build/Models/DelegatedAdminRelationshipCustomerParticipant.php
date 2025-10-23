<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipCustomerParticipant
 */
class DelegatedAdminRelationshipCustomerParticipant
{
    /** The display name of the customer tenant as set by Microsoft Entra ID. Read-only */
    public ?string $displayName = null;

    /** The Microsoft Entra ID-assigned tenant ID of the customer tenant. */
    public ?string $tenantId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
    }
}

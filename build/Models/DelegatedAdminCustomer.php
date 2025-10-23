<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminCustomer
 */
class DelegatedAdminCustomer
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Microsoft Entra ID display name of the customer tenant. Read-only. Supports $orderby. */
    public ?string $displayName = null;

    /** The Microsoft Entra ID-assigned tenant ID of the customer. Read-only. */
    public ?string $tenantId = null;

    /** 
     * Contains the management details of a service in the customer tenant that's managed by delegated administration.
     * @var DelegatedAdminServiceManagementDetail[]
     */
    public array $serviceManagementDetails = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['serviceManagementDetails'])) {
            $this->serviceManagementDetails = $data['serviceManagementDetails'];
        }
    }
}

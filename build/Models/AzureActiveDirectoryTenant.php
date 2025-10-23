<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureActiveDirectoryTenant
 */
class AzureActiveDirectoryTenant
{
    /** The name of the Microsoft Entra tenant. Read only. */
    public ?string $displayName = null;

    /** The ID of the Microsoft Entra tenant. Read only. */
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

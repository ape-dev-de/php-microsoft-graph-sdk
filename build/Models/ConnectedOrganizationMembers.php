<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganizationMembers
 */
class ConnectedOrganizationMembers
{
    /** The ID of the connected organization in entitlement management. */
    public ?string $connectedOrganizationId = null;

    /** The name of the connected organization. */
    public ?string $description = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['connectedOrganizationId'])) {
            $this->connectedOrganizationId = $data['connectedOrganizationId'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
    }
}

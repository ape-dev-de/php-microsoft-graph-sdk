<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalGroup
 */
class ExternalConnectorsExternalGroup
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The description of the external group. Optional. */
    public ?string $description = null;

    /** The friendly name of the external group. Optional. */
    public ?string $displayName = null;

    /** 
     * A member added to an externalGroup. You can add Microsoft Entra users, Microsoft Entra groups, or an externalGroup as members.
     * @var ExternalConnectorsIdentity[]
     */
    public array $members = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
    }
}

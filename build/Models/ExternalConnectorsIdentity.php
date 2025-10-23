<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsIdentity
 */
class ExternalConnectorsIdentity
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of identity. Possible values are: user or group for Microsoft Entra identities and externalgroup for groups in an external system.
     * @var ExternalConnectorsIdentityType|\stdClass|null
     */
    public mixed $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}

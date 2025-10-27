<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsIdentity
 */
class ExternalConnectorsIdentity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of identity. Possible values are: user or group for Microsoft Entra identities and externalgroup for groups in an external system.
     * @var ExternalConnectorsIdentityType|\stdClass|null
     */
    public ExternalConnectorsIdentityType|\stdClass|null $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new ExternalConnectorsIdentityType($data['type']) : $data['type'];
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

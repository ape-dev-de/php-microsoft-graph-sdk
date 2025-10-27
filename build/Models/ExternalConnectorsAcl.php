<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsAcl
 */
class ExternalConnectorsAcl
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?ExternalConnectorsAccessType $accessType = null;

    /**  */
    public ?ExternalConnectorsAclType $type = null;

    /** The unique identifer of the identity. For Microsoft Entra identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. For external groups value is set to the ID of the externalGroup */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accessType'])) {
            $this->accessType = is_string($data['accessType']) ? ExternalConnectorsAccessType::tryFrom($data['accessType']) : $data['accessType'];
        }
        if (isset($data['type'])) {
            $this->type = is_string($data['type']) ? ExternalConnectorsAclType::tryFrom($data['type']) : $data['type'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
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

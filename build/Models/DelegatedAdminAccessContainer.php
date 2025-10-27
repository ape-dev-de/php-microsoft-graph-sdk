<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessContainer
 */
class DelegatedAdminAccessContainer
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The identifier of the access container (for example, a security group). For 'securityGroup' access containers, this must be a valid ID of a Microsoft Entra security group in the Microsoft partner's tenant. */
    public ?string $accessContainerId = null;

    /**  */
    public ?DelegatedAdminAccessContainerType $accessContainerType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accessContainerId'])) {
            $this->accessContainerId = $data['accessContainerId'];
        }
        if (isset($data['accessContainerType'])) {
            $this->accessContainerType = is_string($data['accessContainerType']) ? DelegatedAdminAccessContainerType::tryFrom($data['accessContainerType']) : $data['accessContainerType'];
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

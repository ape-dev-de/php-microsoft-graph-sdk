<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessContainer
 */
class DelegatedAdminAccessContainer
{
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
        if (isset($data['accessContainerId'])) {
            $this->accessContainerId = $data['accessContainerId'];
        }
        if (isset($data['accessContainerType'])) {
            $this->accessContainerType = $data['accessContainerType'];
        }
    }
}

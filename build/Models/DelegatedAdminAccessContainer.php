<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessContainer
 */
class DelegatedAdminAccessContainer
{
    public function __construct(
        /** The identifier of the access container (for example, a security group). For 'securityGroup' access containers, this must be a valid ID of a Microsoft Entra security group in the Microsoft partner's tenant. */
        public ?string $accessContainerId = null,
        /**  */
        public ?string $accessContainerType = null
    ) {}
}

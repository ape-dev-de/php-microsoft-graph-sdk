<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsAcl
 */
class ExternalConnectorsAcl
{
    public function __construct(
        /**  */
        public ?string $accessType = null,
        /**  */
        public ?string $type = null,
        /** The unique identifer of the identity. For Microsoft Entra identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. For external groups value is set to the ID of the externalGroup */
        public ?string $value = null
    ) {}
}

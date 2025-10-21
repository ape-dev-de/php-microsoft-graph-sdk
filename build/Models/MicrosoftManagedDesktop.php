<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftManagedDesktop
 */
class MicrosoftManagedDesktop
{
    public function __construct(
        /** Indicates the provisioning policy associated with Microsoft Managed Desktop settings. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue. The default is notManaged. */
        public ?string $managedType = null,
        /** The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with. */
        public ?string $profile = null
    ) {}
}

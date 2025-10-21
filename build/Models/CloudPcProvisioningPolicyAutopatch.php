<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcProvisioningPolicyAutopatch
 */
class CloudPcProvisioningPolicyAutopatch
{
    public function __construct(
        /** The unique identifier (ID) of a Windows Autopatch group. An Autopatch group is a logical container or unit that groups several Microsoft Entra groups and software update policies. Devices with the same Autopatch group ID share unified software update management. The default value is null that indicates that no Autopatch group is associated with the provisioning policy. */
        public ?string $autopatchGroupId = null
    ) {}
}

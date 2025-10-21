<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * M365AppsInstallationOptions
 */
class M365AppsInstallationOptions
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?AppsInstallationOptionsForMac $appsForMac = null,
        /**  */
        public ?AppsInstallationOptionsForWindows $appsForWindows = null,
        /**  */
        public ?AppsUpdateChannelType $updateChannel = null
    ) {}
}

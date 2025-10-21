<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppX
 */
class WindowsUniversalAppX
{
    public function __construct(
        /**  */
        public ?string $applicableArchitectures = null,
        /**  */
        public ?string $applicableDeviceTypes = null,
        /** The Identity Name. */
        public ?string $identityName = null,
        /** The Identity Publisher Hash. */
        public ?string $identityPublisherHash = null,
        /** The Identity Resource Identifier. */
        public ?string $identityResourceIdentifier = null,
        /** The identity version. */
        public ?string $identityVersion = null,
        /** Whether or not the app is a bundle. */
        public ?bool $isBundle = null,
        /**  */
        public ?string $minimumSupportedOperatingSystem = null,
        /** @var string[] Contains properties and inherited properties for Windows Universal AppX Line Of Business apps. Inherits from `mobileLobApp`. */
        public array $committedContainedApps = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppX
 */
class WindowsAppX
{
    public function __construct(
        /**  */
        public ?string $applicableArchitectures = null,
        /** The identity name of the uploaded app package. For example: ''Contoso.DemoApp''. */
        public ?string $identityName = null,
        /** The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: ''AB82CD0XYZ''. */
        public ?string $identityPublisherHash = null,
        /** The identity resource identifier of the uploaded app package. For example: ''TestResourceId''. */
        public ?string $identityResourceIdentifier = null,
        /** The identity version of the uploaded app package. For example: ''1.0.0.0''. */
        public ?string $identityVersion = null,
        /** When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE. */
        public ?bool $isBundle = null,
        /** Contains properties and inherited properties for Windows AppX Line Of Business apps. */
        public ?string $minimumSupportedOperatingSystem = null
    ) {}
}

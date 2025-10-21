<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionStartCustomExtensionHandler
 */
class OnAttributeCollectionStartCustomExtensionHandler
{
    public function __construct(
        /** Configuration regarding properties of the custom extension that are can be overwritten per event listener. */
        public ?string $configuration = null,
        /**  */
        public ?string $customExtension = null
    ) {}
}

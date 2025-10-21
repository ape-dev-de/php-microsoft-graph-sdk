<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteOperation
 */
class OnenoteOperation
{
    public function __construct(
        /** The error returned by the operation. */
        public ?string $error = null,
        /** The operation percent complete if the operation is still in running status. */
        public ?string $percentComplete = null,
        /** The resource id. */
        public ?string $resourceId = null,
        /** The resource URI for the object. For example, the resource URI for a copied page or section. */
        public ?string $resourceLocation = null
    ) {}
}

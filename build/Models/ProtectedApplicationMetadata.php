<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectedApplicationMetadata
 */
class ProtectedApplicationMetadata
{
    public function __construct(
        /** The client (application) ID of the Microsoft Entra application. Required. */
        public ?string $applicationLocation = null
    ) {}
}

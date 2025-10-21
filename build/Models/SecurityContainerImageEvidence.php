<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerImageEvidence
 */
class SecurityContainerImageEvidence
{
    public function __construct(
        /** The digest image entity, in case this is a tag image. */
        public ?string $digestImage = null,
        /** The unique identifier for the container image entity. */
        public ?string $imageId = null,
        /** The container registry for this image. */
        public ?string $registry = null
    ) {}
}

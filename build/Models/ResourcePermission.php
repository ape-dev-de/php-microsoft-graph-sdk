<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourcePermission
 */
class ResourcePermission
{
    public function __construct(
        /**  */
        public ?string $type = null,
        /**  */
        public ?string $value = null
    ) {}
}

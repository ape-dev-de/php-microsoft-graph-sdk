<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorage
 */
class FileStorage
{
    public function __construct(
        /**  */
        public array $containers = [],
        /** @var string[]  */
        public array $deletedContainers = []
    ) {}
}

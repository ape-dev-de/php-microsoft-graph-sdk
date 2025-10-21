<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseCollectionPaginationCountResponse
 */
class BaseCollectionPaginationCountResponse
{
    public function __construct(
        /**  */
        public ?int $@odata.count = null,
        /**  */
        public ?string $@odata.nextLink = null
    ) {}
}

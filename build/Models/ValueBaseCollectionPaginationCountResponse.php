<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Compound model extending BaseCollectionPaginationCountResponse
 */
class ValueBaseCollectionPaginationCountResponse extends BaseCollectionPaginationCountResponse
{
    /**
     * 
     * @var array<int, mixed>
     */
    public array $value;

}

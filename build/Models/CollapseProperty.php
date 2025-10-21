<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CollapseProperty
 */
class CollapseProperty
{
    public function __construct(
        /** @var string[] Defines the collapse group to trim results. The properties in this collection must be sortable/refinable properties. Required. */
        public array $fields = [],
        /** Defines a maximum limit count for this field. This numeric value must be a positive integer. Required. */
        public ?string $limit = null
    ) {}
}

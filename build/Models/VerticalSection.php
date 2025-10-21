<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerticalSection
 */
class VerticalSection
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue. */
        public ?string $emphasis = null,
        /** The set of web parts in this section. */
        public array $webparts = []
    ) {}
}

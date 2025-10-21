<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerticalSection
 */
class VerticalSection
{
    public function __construct(
        /** Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue. */
        public ?string $emphasis = null,
        /** @var string[] The set of web parts in this section. */
        public array $webparts = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MetaDataKeyStringPair
 */
class MetaDataKeyStringPair
{
    public function __construct(
        /** Key of the meta data. */
        public ?string $key = null,
        /** Value of the meta data. */
        public ?string $value = null
    ) {}
}

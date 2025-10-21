<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MetaDataKeyValuePair
 */
class MetaDataKeyValuePair
{
    public function __construct(
        /** Key of the metadata. */
        public ?string $key = null,
        /** Value of the metadata. Should be an object. */
        public ?string $value = null
    ) {}
}

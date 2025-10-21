<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidCustomConfiguration
 */
class AndroidCustomConfiguration
{
    public function __construct(
        /** @var string[] This topic provides descriptions of the declared methods, properties and relationships exposed by the androidCustomConfiguration resource. */
        public array $omaSettings = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternetExplorerMode
 */
class InternetExplorerMode
{
    public function __construct(
        /** @var string[] A collection of site lists to support Internet Explorer mode. */
        public array $siteLists = []
    ) {}
}

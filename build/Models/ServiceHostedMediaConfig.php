<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHostedMediaConfig
 */
class ServiceHostedMediaConfig
{
    public function __construct(
        /** @var string[] The list of media to pre-fetch. */
        public array $preFetchMedia = []
    ) {}
}

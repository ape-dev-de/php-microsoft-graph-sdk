<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPlatforms
 */
class ConditionalAccessPlatforms
{
    public function __construct(
        /** Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue. */
        public array $excludePlatforms = [],
        /** Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue. */
        public array $includePlatforms = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseEndUserNotification
 */
class BaseEndUserNotification
{
    public function __construct(
        /** The default language for the end user notification. */
        public ?string $defaultLanguage = null,
        /**  */
        public ?string $endUserNotification = null
    ) {}
}

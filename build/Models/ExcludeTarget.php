<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExcludeTarget
 */
class ExcludeTarget
{
    public function __construct(
        /** The object identifier of a Microsoft Entra user or group. */
        public ?string $id = null,
        /**  */
        public ?AuthenticationMethodTargetType $targetType = null
    ) {}
}

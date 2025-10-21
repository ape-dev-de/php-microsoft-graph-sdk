<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessFilter
 */
class ConditionalAccessFilter
{
    public function __construct(
        /**  */
        public ?FilterMode $mode = null,
        /** Rule syntax is similar to that used for membership rules for groups in Microsoft Entra ID. For details, see rules with multiple expressions */
        public ?string $rule = null
    ) {}
}

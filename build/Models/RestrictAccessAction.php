<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestrictAccessAction
 */
class RestrictAccessAction
{
    public function __construct(
        /** The type of DLP action. Possible value is restrictAccessAction. */
        public ?DlpAction $action = null,
        /** Action for the app to take. The possible values are: warn, audit, block. */
        public ?RestrictionAction $restrictionAction = null
    ) {}
}

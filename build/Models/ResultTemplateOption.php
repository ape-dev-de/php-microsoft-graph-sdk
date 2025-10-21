<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultTemplateOption
 */
class ResultTemplateOption
{
    public function __construct(
        /** Indicates whether search display layouts are enabled. If enabled, the user will get the result template to render the search results content in the resultTemplates property of the response. The result template is based on Adaptive Cards. Optional. */
        public ?bool $enableResultTemplate = null
    ) {}
}

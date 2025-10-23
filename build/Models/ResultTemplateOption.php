<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultTemplateOption
 */
class ResultTemplateOption
{
    /** Indicates whether search display layouts are enabled. If enabled, the user will get the result template to render the search results content in the resultTemplates property of the response. The result template is based on Adaptive Cards. Optional. */
    public ?bool $enableResultTemplate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['enableResultTemplate'])) {
            $this->enableResultTemplate = $data['enableResultTemplate'];
        }
    }
}

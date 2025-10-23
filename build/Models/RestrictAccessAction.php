<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestrictAccessAction
 */
class RestrictAccessAction
{
    /** 
     * The type of DLP action. Possible value is restrictAccessAction.
     * @var DlpAction|\stdClass|null
     */
    public mixed $action = null;

    /** 
     * Action for the app to take. The possible values are: warn, audit, block.
     * @var RestrictionAction|\stdClass|null
     */
    public mixed $restrictionAction = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['action'])) {
            $this->action = $data['action'];
        }
        if (isset($data['restrictionAction'])) {
            $this->restrictionAction = $data['restrictionAction'];
        }
    }
}

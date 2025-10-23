<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarSharingMessageAction
 */
class CalendarSharingMessageAction
{
    /** 
     * 
     * @var CalendarSharingAction|\stdClass|null
     */
    public mixed $action = null;

    /** 
     * 
     * @var CalendarSharingActionType|\stdClass|null
     */
    public mixed $actionType = null;

    /** 
     * 
     * @var CalendarSharingActionImportance|\stdClass|null
     */
    public mixed $importance = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['action'])) {
            $this->action = $data['action'];
        }
        if (isset($data['actionType'])) {
            $this->actionType = $data['actionType'];
        }
        if (isset($data['importance'])) {
            $this->importance = $data['importance'];
        }
    }
}
